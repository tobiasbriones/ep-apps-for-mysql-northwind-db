<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Http\Api\Api\V1\Products;

use App\Config\Database\AppDatabaseConfig;
use App\Config\Env;
use App\Config\Http\AppSerialization;
use App\Database\Factory\ConnectionFactory;
use App\Database\Factory\ProductDaoFactory;
use App\Database\RelationalModel\MySql\MySqlPdoConnection;
use App\Database\RelationalModel\MySql\Relation\Product\MySqlProductDao;
use App\Database\RelationalModel\PdoParams;
use App\Domain\Repository\Repository;
use App\Http\Util\RequestUtils;
use App\Repository\AppProductRepository;
use Exception;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

// Many things are left to implement for this layer of the App. I'll be back.
class ProductsController {

    private const GET_ALL_PAGE_PARAM_NAME = "page";
    private const GET_ALL_PAGE_PARAM_DEF_VALUE = 0;
    private const GET_ALL_LIMIT_PARAM_NAME = "limit";
    private const GET_ALL_LIMIT_PARAM_DEF_VALUE = 15;
    private const FORMAT_PARAM_NAME = "format";

    public function __construct(private Repository $repository) {}

    public static function getAll(): callable {
        return function (Request $req, Response $res): Response {
            try {
                $page = RequestUtils::getIntQueryParam(
                    $req,
                    self::GET_ALL_PAGE_PARAM_NAME,
                    self::GET_ALL_PAGE_PARAM_DEF_VALUE
                );
                $limit = RequestUtils::getIntQueryParam(
                    $req,
                    self::GET_ALL_LIMIT_PARAM_NAME,
                    self::GET_ALL_LIMIT_PARAM_DEF_VALUE
                );
                $params = new PdoParams(
                    Env::get(Env::DB_HOST_KEY),
                    Env::get(Env::DB_NAME_KEY),
                    Env::get(Env::DB_ROOT_USERNAME_KEY),
                    Env::get(Env::DB_ROOT_PASSWORD_KEY)
                );
                $conn = MySqlPdoConnection::newInstance($params);
                $productDao = new MySqlProductDao($conn);
                $productRepository = new AppProductRepository($productDao);
                $products = $productRepository->getAll($page, $limit);

                if (sizeof($products) === 0) {
                    $res->withStatus(404);
                    $res->getBody()->write(json_encode(["msg" => "Not found"]));
                }
                else {
                    $res->getBody()->write(json_encode($products));
                }
            }
            catch (Exception $err) {
                $res = $res->withStatus(500);
            }
            return $res;
        };
    }

    public static function get(): callable {
        return function (Request $req, Response $res, array $args): Response {
            // NOTE: When this app works as just a CRUD API I don't need the
            // repository pattern. Instead, create a Mapper to transform the
            // data retrieved from the DAO to a domain record.
            // The mapper can be also gotten from a framework or ORM but that's
            // not the point of this app
            // By using this approach I think this may be quite useful for
            // a microservice architecture
            try {
                $dbConfig = new AppDatabaseConfig();
                $conn = ConnectionFactory::newConnection($dbConfig);
                $productDao = ProductDaoFactory::newProductDao($conn);
                $productRepository = new AppProductRepository($productDao);
                $product = $productRepository->get($args["id"]);

                if ($product === null) {
                    $res->withStatus(404);
                    $res->getBody()->write(json_encode(["msg" => "Not found"]));
                }
                else {
                    $serialization = RequestUtils::getStringQueryParam(
                        $req,
                        self::FORMAT_PARAM_NAME,
                        AppSerialization::DEF_SERIALIZATION
                    );
                    $serializable = new ProductSerializable($product);
                    $enc = $serializable->serialize($serialization);
                    $res->getBody()->write($enc);
                }
            }
            catch (Exception $err) {
                $res = $res->withStatus(500);
                echo $err;
            }
            return $res;
        };
    }

}

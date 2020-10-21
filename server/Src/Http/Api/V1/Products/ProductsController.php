<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Http\Api\V1\Products;

use App\Config\Env;
use App\Database\RelationalModel\MySql\MySqlPdoConnection;
use App\Database\RelationalModel\MySql\Relation\Product\MySqlProductDao;
use App\Database\RelationalModel\PdoParams;
use App\Domain\Model\Product\ProductId;
use App\Extension\ProductExtension;
use Exception;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class ProductsController {

    public static function getAll(): callable {
        return function (Request $req, Response $res): Response {
            try {
                $res->getBody()->write(json_encode(["all"]));
            }
            catch (Exception $err) {
                $res = $res->withStatus(500);
            }
            return $res;
        };
    }

    public static function get(): callable {
        return function (Request $req, Response $res, array $args): Response {
            try {
                $params = new PdoParams(
                    Env::get(Env::DB_HOST_KEY),
                    Env::get(Env::DB_NAME_KEY),
                    Env::get(Env::DB_ROOT_USERNAME_KEY),
                    Env::get(Env::DB_ROOT_PASSWORD_KEY)
                );
                $conn = MySqlPdoConnection::newInstance($params);
                $productDao = new MySqlProductDao($conn);
                $product = $productDao->fetch(new ProductId($args["code"]));

                if ($product === null) {
                    $res->withStatus(404);
                    $res->getBody()->write(json_encode(["msg" => "Not found"]));
                }
                else {
                    $res->getBody()->write(json_encode(ProductExtension::jsonSerialize($product)));
                }
            }
            catch (Exception $err) {
                $res = $res->withStatus(500);
            }
            return $res;
        };
    }

}

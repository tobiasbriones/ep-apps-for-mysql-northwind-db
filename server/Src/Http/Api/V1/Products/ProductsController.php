<?php
/*
 * Copyright (c) 2020-2021 Tobias Briones. All rights reserved.
 *
 * SPDX-License-Identifier: MIT
 *
 * This file is part of Example Project: Apps for the MySQL Northwind DB.
 *
 * This source code is licensed under the MIT License found in the
 * LICENSE file in the root directory of this source tree or at
 * https://opensource.org/licenses/MIT.
 */

namespace App\Http\Api\V1\Products;

use App\Config\Http\AppSerialization;
use App\Domain\Repository\ProductRepository;
use App\Http\Util\RequestUtils;
use Exception;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class ProductsController {

    private const GET_ALL_PAGE_PARAM_NAME = "page";
    private const GET_ALL_PAGE_PARAM_DEF_VALUE = 0;
    private const GET_ALL_LIMIT_PARAM_NAME = "limit";
    private const GET_ALL_LIMIT_PARAM_DEF_VALUE = 15;
    private const FORMAT_PARAM_NAME = "format";

    public function __construct(private ProductRepository $repository) {}

    public function getAll(): callable {
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
                $products = $this->repository->getAll($page, $limit);

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

    public function get(): callable {
        return function (Request $req, Response $res, array $args): Response {
            try {
                $product = $this->repository->get($args["id"]);

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

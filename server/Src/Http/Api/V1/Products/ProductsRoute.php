<?php
/*
 * Copyright (c) 2021 Tobias Briones. All rights reserved.
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

use App\Domain\Model\Product\ProductId;
use App\Domain\Repository\ProductRepository;
use App\Http\Util\RequestUtils;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

final class ProductsRoute {

    private const GET_ALL_PAGE_PARAM_NAME = "page";
    private const GET_ALL_PAGE_PARAM_DEF_VALUE = 0;
    private const GET_ALL_LIMIT_PARAM_NAME = "limit";
    private const GET_ALL_LIMIT_PARAM_DEF_VALUE = 15;
    private ProductsController $controller;

    public function __construct(ProductRepository $repository) {
        $this->controller = new ProductsController($repository);
    }

    public function onGetAll(): callable {
        return function (Request $req, Response $res): Response {
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
            $serialization = RequestUtils::getSerializationParam($req);
            return $this->controller->getAll($page, $limit, $serialization, $res);
        };
    }

    public function onGet(): callable {
        return function (Request $req, Response $res, array $args): Response {
            $id = new ProductId($args["id"]);
            $serialization = RequestUtils::getSerializationParam($req);
            return $this->controller->get($id, $serialization, $res);
        };
    }

}

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

namespace App\Http\Api;

use App\Http\Api\V1\Products\ProductsController;
use App\Main;
use Slim\App;
use Slim\Psr7\Request;
use Slim\Psr7\Response;

final class Routes {

    public const BASE_ENDPOINT = "/api/v" . Main::API_VERSION;

    public function __construct(private ApiDependencyConfig $config) {}

    public function init(App $app): void {
        $productsController = new ProductsController($this->config->productRepository());

        $app->get(
            "/",
            function (Request $request, Response $response, $args) {
                $response->getBody()->write("Hey!");
                return $response;
            }
        );

        $app->get(self::BASE_ENDPOINT . "/products", $productsController->getAll());
        $app->get(self::BASE_ENDPOINT . "/products/{id}", $productsController->get());
    }

}

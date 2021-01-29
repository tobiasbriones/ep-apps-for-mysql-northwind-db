<?php
/*
 * Copyright (c) 2021 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App;

use App\Config\Http\AppApiDependencyConfig;
use App\Http\Api\ApiDependencyConfig;
use App\Http\Api\V1\Products\ProductsController;
use Slim\App;
use Slim\Factory\AppFactory;
use Slim\Psr7\Request;
use Slim\Psr7\Response;

class Main {

    public const APP_VERSION = "0.1.0";
    public const API_VERSION = 1;
    private App $app;
    private ApiDependencyConfig $apiConfig;

    public function __construct() {
        $this->app = AppFactory::create();
        $this->apiConfig = new AppApiDependencyConfig();
    }

    public function start() {
        $app = $this->app;

        $app->get(
            "/",
            function (Request $request, Response $response, $args) {
                $response->getBody()->write("Hey!");
                return $response;
            }
        );

        $app->get("/api/v1/products", ProductsController::getAll());
        $app->get("/api/v1/products/{id}", ProductsController::get());

        $app->run();
    }

}

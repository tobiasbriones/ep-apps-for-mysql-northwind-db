<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

use App\Http\Api\V1\Products\ProductsController;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . "/../vendor/autoload.php";

$app = AppFactory::create();

$app->get(
    "/",
    function (Request $request, Response $response, $args) {
        $response->getBody()->write("Hey!");
        return $response;
    }
);

$app->get("/api/v1/products", ProductsController::getAll());
$app->get("/api/v1/products/{code}", ProductsController::get());

$app->run();

<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

use App\Api\V1\Products\ProductsController;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . "/../vendor/autoload.php";

$app = AppFactory::create();

// Check a DB connection for "/"
$app->get(
    "/",
    function (Request $request, Response $response, $args) {
        try {
            \App\Database\Connection::newInstance();
            $response->getBody()->write("Connected to the database successfully!");
        }
        catch (Exception $err) {
            $response->getBody()->write("Fail to connect. $err");
        }
        return $response;
    }
);

$app->get("/api/v1/products", ProductsController::getAll());
$app->get("/api/v1/products/{id}", ProductsController::get());

$app->run();

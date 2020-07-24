<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Api\V1\Products;

use App\Database\Connection;
use App\Database\Entity\Product\ProductEntity;
use Exception;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class ProductsController {
    
    public static function getAll(): callable {
        return function (Request $req, Response $res): Response {
            try {
                $conn = Connection::newInstance();
                $entity = new ProductEntity($conn);
                $products = $entity->readAll();
                
                $res = $res->withHeader("Content-Type", "application/json;charset=UTF-8");
                
                $res->getBody()->write(json_encode($products));
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
                $conn = Connection::newInstance();
                $entity = new ProductEntity($conn);
                $product = $entity->read($args["id"]);
                
                if ($product == null) {
                    return $res->withStatus(400);
                }
                $res = $res->withHeader("Content-Type", "application/json;charset=UTF-8");
                
                $res->getBody()->write(json_encode($product));
            }
            catch (Exception $err) {
                $res = $res->withStatus(500);
            }
            return $res;
        };
    }
    
}

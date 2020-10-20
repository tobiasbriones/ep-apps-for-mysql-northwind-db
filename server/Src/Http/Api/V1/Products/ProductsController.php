<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Http\Api\V1\Products;

use Exception;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class ProductsController {

    public static function getAll(): callable {
        return function (Request $req, Response $res): Response {
            try {
                $res->getBody()->write(json_encode([]));
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
                $res->getBody()->write(json_encode([]));
            }
            catch (Exception $err) {
                $res = $res->withStatus(500);
            }
            return $res;
        };
    }

}

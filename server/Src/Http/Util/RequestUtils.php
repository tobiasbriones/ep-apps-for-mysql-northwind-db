<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Http\Util;

use Psr\Http\Message\ServerRequestInterface as Request;

class RequestUtils {

    public static function getIntQueryParam(
        Request $req,
        string $paramName,
        int $def
    ): int {
        $queryParams = $req->getQueryParams();

        if (isset($queryParams[$paramName]) && is_numeric($queryParams[$paramName])) {
            $paramValue = $queryParams[$paramName];
        }
        else {
            $paramValue = $def;
        }
        return $paramValue;
    }

    public static function getStringQueryParam(
        Request $req,
        string $paramName,
        string $def
    ): string {
        $queryParams = $req->getQueryParams();

        if (isset($queryParams[$paramName])) {
            $paramValue = $queryParams[$paramName];
        }
        else {
            $paramValue = $def;
        }
        return $paramValue;
    }

}

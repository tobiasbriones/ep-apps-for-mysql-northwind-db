<?php
/*
 * Copyright (c) 2020 Tobias Briones. All rights reserved.
 *
 * SPDX-License-Identifier: MIT
 *
 * This file is part of Example Project: Apps for the MySQL Northwind DB.
 *
 * This source code is licensed under the MIT License found in the
 * LICENSE file in the root directory of this source tree or at
 * https://opensource.org/licenses/MIT.
 */

namespace App\Http\Util;

use App\Config\Http\AppSerialization;
use App\Http\Serialization;
use Psr\Http\Message\ServerRequestInterface as Request;

class RequestUtils {

    private const FORMAT_PARAM_NAME = "format";

    public static function getSerializationParam(Request $req): int {
        $str = RequestUtils::getStringQueryParam(
            $req,
            self::FORMAT_PARAM_NAME,
            AppSerialization::DEF_SERIALIZATION
        );
        return Serialization::fromString($str);
    }

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

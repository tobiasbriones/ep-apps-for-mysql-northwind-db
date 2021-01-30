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

namespace App\Http;

class Serialization {

    public const JSON = 1;
    public const XML = 2;
    public const HTML = 3;

    public static function fromString(string $format): int {
        return match($format) {
            default => self::JSON,
            "xml", "XML" => self::XML,
            "html", "HTML" => self::HTML
        };
    }

}

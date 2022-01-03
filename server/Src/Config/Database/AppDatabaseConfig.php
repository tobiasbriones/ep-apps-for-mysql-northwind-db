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

namespace App\Config\Database;

use App\Config\Env;
use App\Database\RelationalModel\PdoParams;
use App\Database\RelationalModel\RelationalDatabaseConfig;
use App\Database\RelationalModel\RelationalDatabaseProvider;

final class AppDatabaseConfig implements RelationalDatabaseConfig {

    private const DB_CONFIG = RelationalDatabaseProvider::MYSQL_DB;
    private PdoParams $pdoParams;

    public function __construct() {
        $this->pdoParams = new PdoParams(
            Env::get(Env::DB_HOST_KEY),
            Env::get(Env::DB_NAME_KEY),
            Env::get(Env::DB_ROOT_USERNAME_KEY),
            Env::get(Env::DB_ROOT_PASSWORD_KEY)
        );
    }

    public function getDatabaseProvider(): int {
        return self::DB_CONFIG;
    }

    public function getPdoParams(): PdoParams {
        return $this->pdoParams;
    }

}

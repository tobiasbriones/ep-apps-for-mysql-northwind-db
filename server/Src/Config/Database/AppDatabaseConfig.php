<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Config\Database;

use App\Config\Env;
use App\Database\RelationalModel\PdoParams;
use App\Database\RelationalModel\RelationalDatabaseConfig;
use App\Database\RelationalModel\RelationalDatabaseProvider;

class AppDatabaseConfig implements RelationalDatabaseConfig {

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

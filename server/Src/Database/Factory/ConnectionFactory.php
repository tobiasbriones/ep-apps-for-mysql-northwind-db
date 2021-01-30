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

namespace App\Database\Factory;

use App\Database\Connection;
use App\Database\DatabaseConfig;
use App\Database\RelationalModel\MySql\MySqlPdoConnection;
use App\Database\RelationalModel\RelationalDatabaseConfig;
use App\Database\RelationalModel\RelationalDatabaseProvider;
use Exception;

class ConnectionFactory {

    /**
     * @param DatabaseConfig $config
     *
     * @return Connection|null
     * @throws Exception if something fails
     */
    public static function newConnection(DatabaseConfig $config): ?Connection {
        if ($config instanceof RelationalDatabaseConfig) {
            return self::newRelationalConnection($config);
        }
        return null;
    }

    /**
     * @param RelationalDatabaseConfig $config
     *
     * @return Connection|null
     * @throws Exception if something fails
     */
    private static function newRelationalConnection(
        RelationalDatabaseConfig $config
    ): ?Connection {
        switch ($config->getDatabaseProvider()) {
            case RelationalDatabaseProvider::MYSQL_DB:
                return MySqlPdoConnection::newInstance($config->getPdoParams());
        }
        return null;
    }

}

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

namespace App\Database\RelationalModel\MySql\Relation;

use App\Database\RelationalModel\MySql\MySqlPdoConnection;
use PDO;

/**
 * Defines the base class for a DAO (Data Access Object) based on a SQL
 * database.
 *
 * @package App\Database\Relation
 */
class BaseDao {

    private PDO $connection;

    public function __construct(MySqlPdoConnection $connection) {
        $this->connection = $connection->getConnection();
    }

    protected final function getConnection(): PDO {
        return $this->connection;
    }

}

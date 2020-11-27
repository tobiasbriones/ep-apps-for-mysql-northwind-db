<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
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
    private bool $shallUseSerializableRecord;

    public function __construct(MySqlPdoConnection $connection) {
        $this->connection = $connection->getConnection();
        $this->shallUseSerializableRecord = true;
    }

    protected final function getConnection(): PDO {
        return $this->connection;
    }

    public function shallUseSerializableRecord(): bool {
        return $this->shallUseSerializableRecord;
    }

}

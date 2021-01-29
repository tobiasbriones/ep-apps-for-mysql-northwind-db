<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Database\RelationalModel\MySql;

use App\Database\RelationalModel\PdoParams;
use App\Database\RelationalModel\RelationalConnection;
use Exception;
use PDO;

/**
 * Takes care of creating a PDO northwind database connection with MySQL.
 *
 * @package App\Database\RelationalModel\MySql
 */
class MySqlPdoConnection implements RelationalConnection {

    /**
     * Creates a PDO northwind database connection.
     *
     * @param PdoParams $params params to build the PDO connection
     *
     * @return MySqlPdoConnection the MySql PDO connection
     * @throws Exception if it fails to connect to the database
     */
    public static function newInstance(PdoParams $params): MySqlPdoConnection {
        $host = $params->host();
        $dbName = $params->databaseName();
        $userName = $params->userName();
        $password = $params->password();
        $dns = "mysql:host=$host;dbname=$dbName";
        $options = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"];
        $conn = new PDO($dns, $userName, $password, $options);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return new MySqlPdoConnection($conn);
    }

    private PDO $connection;

    private function __construct(PDO $connection) {
        $this->connection = $connection;
    }

    public function getConnection(): PDO {
        return $this->connection;
    }

}

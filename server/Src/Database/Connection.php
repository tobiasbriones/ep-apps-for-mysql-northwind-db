<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Database;

use App\Config\Env;
use PDO;

/**
 * Takes care of creating a PDO northwind database connection.
 *
 * @package App\Database
 */
class Connection {
    
    /**
     * Creates a PDO northwind database connection.
     *
     * @return PDO
     */
    public static function newInstance(): PDO {
        $host = Env::get(Env::DB_HOST_KEY);
        $dbname = Env::get(Env::DB_NAME_KEY);
        $user = Env::get(Env::DB_ROOT_USERNAME_KEY);
        $password = Env::get(Env::DB_ROOT_PASSWORD_KEY);
        $dns = "mysql:host=$host;dbname=$dbname";
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        $conn = new PDO($dns, $user, $password, $options);
        
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
    
}

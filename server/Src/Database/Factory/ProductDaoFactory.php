<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Database\Factory;

use App\Data\Common\Product\ProductDao;
use App\Database\Connection;
use App\Database\RelationalModel\MySql\MySqlPdoConnection;
use App\Database\RelationalModel\MySql\Relation\Product\MySqlProductDao;
use App\Database\RelationalModel\RelationalConnection;

// NOTE: Need to define the AbstractDaoFactory but manage the fact that PHP
// does not have generics
class ProductDaoFactory {

    public static function newProductDao(Connection $connection): ?ProductDao {
        if ($connection instanceof RelationalConnection) {
            return self::newRelationalDao($connection);
        }
        return null;
    }

    private static function newRelationalDao(
        RelationalConnection $connection
    ): ?ProductDao {
        if ($connection instanceof MySqlPdoConnection) {
            return new MySqlProductDao($connection);
        }
        return null;
    }

}

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

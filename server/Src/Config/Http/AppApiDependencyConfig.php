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

namespace App\Config\Http;

use App\Config\Database\AppDatabaseConfig;
use App\Database\Factory\ConnectionFactory;
use App\Database\Factory\ProductDaoFactory;
use App\Domain\Repository\ProductRepository;
use App\Domain\Repository\Repository;
use App\Http\Api\ApiDependencyConfig;
use App\Repository\AppProductRepository;
use Exception;

final class AppApiDependencyConfig implements ApiDependencyConfig {

    private AppDatabaseConfig $databaseConfig;
    private ProductRepository $productRepository;

    public function __construct() {
        $this->databaseConfig = new AppDatabaseConfig();
    }

    /**
     * @throws Exception if something fails
     */
    public function init() {
        $conn = ConnectionFactory::newConnection($this->databaseConfig);
        $productDao = ProductDaoFactory::newProductDao($conn);
        $this->productRepository = new AppProductRepository($productDao);
    }

    public function productRepository(): ProductRepository {
        return $this->productRepository;
    }

}

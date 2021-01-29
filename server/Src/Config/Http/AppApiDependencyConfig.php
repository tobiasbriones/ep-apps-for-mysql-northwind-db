<?php
/*
 * Copyright (c) 2021 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Config\Http;

use App\Config\Database\AppDatabaseConfig;
use App\Database\Factory\ConnectionFactory;
use App\Database\Factory\ProductDaoFactory;
use App\Domain\Repository\Repository;
use App\Http\Api\ApiDependencyConfig;
use App\Repository\AppProductRepository;
use Exception;

class AppApiDependencyConfig implements ApiDependencyConfig {

    private AppDatabaseConfig $databaseConfig;
    private Repository $productRepository;

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

    public function productRepository(): Repository {
        return $this->productRepository;
    }

}

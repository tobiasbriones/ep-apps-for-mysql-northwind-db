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

namespace App;

use App\Config\Http\AppApiDependencyConfig;
use App\Http\Api\ApiDependencyConfig;
use App\Http\Api\Routes;
use Exception;
use Slim\App;
use Slim\Factory\AppFactory;

final class Main {

    public const APP_VERSION = "0.1.0";
    public const API_VERSION = 1;
    private App $app;
    private ApiDependencyConfig $apiConfig;
    private Routes $routes;

    public function __construct() {
        $this->app = AppFactory::create();
        $this->apiConfig = new AppApiDependencyConfig();
        $this->routes = new Routes($this->apiConfig);
    }

    public function start(): void {
        $this->init();
        $this->app->run();
    }

    private function init(): void {
        $this->initApiConfig();
        $this->routes->init($this->app);
    }

    private function initApiConfig(): void {
        try {
            $this->apiConfig->init();
        }
        catch (Exception) {
            echo "Failed to initialize application";
        }
    }

}

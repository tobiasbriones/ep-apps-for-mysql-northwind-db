<?php
/*
 * Copyright (c) 2021 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App;

use App\Config\Http\AppApiDependencyConfig;
use App\Http\Api\ApiDependencyConfig;
use Slim\App;
use Slim\Factory\AppFactory;

class Main {

    public const APP_VERSION = "0.1.0";
    public const API_VERSION = 1;
    private App $app;
    private ApiDependencyConfig $apiConfig;

    public function __construct() {
        $this->app = AppFactory::create();
        $this->apiConfig = new AppApiDependencyConfig();
    }

    public function start() {

    }

}

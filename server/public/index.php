<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

use App\Main;

require __DIR__ . "/../vendor/autoload.php";

$main = new Main();

$main->start();

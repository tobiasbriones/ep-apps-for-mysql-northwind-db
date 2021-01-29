<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Database\RelationalModel;

use App\Database\DatabaseConfig;

interface RelationalDatabaseConfig extends DatabaseConfig {

    public function getPdoParams(): PdoParams;

}

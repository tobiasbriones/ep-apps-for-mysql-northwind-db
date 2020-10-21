<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Database\RelationalModel\MySql;

use Exception;

class MySqlConnectionException extends Exception {

    public function __construct(string $message = "") {
        parent::__construct($message);
    }

}

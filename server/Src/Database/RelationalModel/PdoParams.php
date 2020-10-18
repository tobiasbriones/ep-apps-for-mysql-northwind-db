<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Database\RelationalModel;

class PdoParams {

    private string $host;
    private string $databaseName;
    private string $userName;
    private string $password;

    public function __construct(string $host, string $databaseName, string $userName, string $password) {
        $this->host = $host;
        $this->databaseName = $databaseName;
        $this->userName = $userName;
        $this->password = $password;
    }

    public function host(): string {
        return $this->host;
    }

    public function databaseName(): string {
        return $this->databaseName;
    }

    public function userName(): string {
        return $this->userName;
    }

    public function password(): string {
        return $this->password;
    }

}

<?php
/*
 * Copyright (c) 2020 Tobias Briones. All rights reserved.
 *
 * SPDX-License-Identifier: MIT
 *
 * This file is part of Example Project: Apps for the MySQL Northwind DB.
 *
 * This source code is licensed under the MIT License found in the
 * LICENSE file in the root directory of this source tree or at
 * https://opensource.org/licenses/MIT.
 */

namespace App\Database\RelationalModel;

final class PdoParams {

    public function __construct(
        private string $host,
        private string $databaseName,
        private string $userName,
        private string $password
    ) {}

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

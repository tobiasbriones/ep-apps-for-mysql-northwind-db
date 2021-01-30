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

namespace App\Database;

// NOTE: This will be a marker interface for now. The problem is that I want to
// support any kind of DB (SQL, NoSQL, ...) in this enterprise app so the
// abstraction is pretty high and PHP does not have generics and I have to
// further design this part of the app
interface Connection {

}

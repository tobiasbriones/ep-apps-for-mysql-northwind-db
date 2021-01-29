<?php
/*
 * Copyright (c) 2021 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Database;

// NOTE: This will be a marker interface for now. The problem is that I want to
// support any kind of DB (SQL, NoSQL, ...) in this enterprise app so the
// abstraction is pretty high and PHP does not have generics and I have to
// further design this part of the app
interface Connection {

}

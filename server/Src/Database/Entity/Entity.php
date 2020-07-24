<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Database\Entity;

use PDO;

class Entity {
    
    private PDO $conn;
    
    public function __construct(PDO $conn) {
        $this->conn = $conn;
    }
    
    protected function getConnection(): PDO {
        return $this->conn;
    }
    
}

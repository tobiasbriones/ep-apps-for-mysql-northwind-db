<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Database\Relation;

/**
 * Defines a base class for a SQL Identifiable Entity.
 *
 * @package App\Database\Relation
 */
class Entity implements Identifiable {

    private int $id;

    public function __construct(int $id) {
        $this->id = $id;
    }

    public final function id(): int {
        return $this->id;
    }

}

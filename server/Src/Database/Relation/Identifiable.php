<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Database\Relation;

/**
 * Defines an Identifiable entity which is identified by its integer id. The id
 * is a non-negative integer number. This interface is
 * realized by an entity.
 *
 * @package App\Domain\Model
 */
interface Identifiable {

    /**
     * Returns the entity's id. The id is a non-negative integer number.
     *
     * @return int the record's id
     */
    public function id(): int;

}

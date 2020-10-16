<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Domain\Model;

/**
 * Defines an Identifiable model which is identified by
 * its integer id. The id is a non-negative integer number. This interface is
 * realized by a record, that is, an object that holds the actual data of one
 * instance of it's corresponding model.
 *
 * @package App\Domain\Model
 */
interface Identifiable {

    /**
     * Returns the record's id. The id is a non-negative integer number.
     *
     * @return int the record's id
     */
    public function id(): int;

}

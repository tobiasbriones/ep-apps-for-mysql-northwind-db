<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Domain\Model;

/**
 * Defines an Identifiable model's accessor.
 * It's useful and may be realized by external modules; for example, in order to
 * load data from the database, an object may implement a model's accessor and
 * let a builder object construct the corresponding record since the accessor
 * serves as an API to decouple and access the values from the external data
 * source and so build the corresponding record.
 *
 * @package App\Domain\Model
 * @see     Identifiable
 */
interface IdentifiableAccessor {

    /**
     * Returns the record's id. The id is a non-negative integer number.
     *
     * @return int the record's id
     */
    public function getId(): int;

}

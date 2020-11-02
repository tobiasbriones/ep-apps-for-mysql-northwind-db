<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Domain\Model\Product;

class ProductId implements IdProductAttributeSet {

    private int $id;

    public function __construct(int $id) {
        $this->id = $id;
    }

    public function id(): int {
        return $this->id;
    }

}

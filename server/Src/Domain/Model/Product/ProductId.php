<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Domain\Model\Product;

class ProductId implements IdentifiableProductAttributes {

    private string $code;

    public function __construct(string $code) {
        $this->code = $code;
    }

    public function code(): string {
        return $this->code;
    }

}

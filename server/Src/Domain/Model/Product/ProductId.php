<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Domain\Model\Product;

class ProductId implements IdProductAttributes {

    private string $productCode;

    public function __construct(string $productCode) {
        $this->productCode = $productCode;
    }

    public function productCode(): string {
        return $this->productCode;
    }

}

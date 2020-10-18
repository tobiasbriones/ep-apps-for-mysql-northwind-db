<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Data\RelationalModel\Relation\Product;

use App\Domain\Model\Product\Product;

/**
 * Defines the Product Entity from the Product Tuple.
 *
 * @package App\Data\RelationalModel\Relation\Product
 */
interface ProductEntity extends ProductTuple {

    public function getProduct(): Product;

}

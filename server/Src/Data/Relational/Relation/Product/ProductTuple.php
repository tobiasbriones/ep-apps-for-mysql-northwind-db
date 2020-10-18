<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Data\Relational\Relation\Product;

use App\Data\Relational\Relation\Identifiable;
use App\Domain\Model\Product\ProductAttributes;

/**
 * Defines the Product Tuple from the product relation.
 *
 * @package App\Database\Relation\Product
 */
interface ProductTuple extends Identifiable, ProductAttributes {}

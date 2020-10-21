<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Domain\Model\Product;

/**
 * Defines the main set of the Product Attributes that identify a Product.
 *
 * @package App\Domain\Model\Product
 */
interface IdProductAttributes {

    public const CODE_ATTR_NAME = "product_code";

    public function productCode(): string;

}

<?php
/*
 * Copyright (c) 2020 Tobias Briones. All rights reserved.
 *
 * SPDX-License-Identifier: MIT
 *
 * This file is part of Example Project: Apps for the MySQL Northwind DB.
 *
 * This source code is licensed under the MIT License found in the
 * LICENSE file in the root directory of this source tree or at
 * https://opensource.org/licenses/MIT.
 */

namespace App\Domain\Model\Product;

class ProductAttributeNames {

    public const ID = "id";
    public const CODE = "product_code";
    public const SUPPLIER_IDS = "supplier_ids";
    public const NAME = "product_name";
    public const DESCRIPTION = "description";
    public const STANDARD_COST = "standard_cost";
    public const LIST_PRICE = "list_price";
    public const REORDER_LEVEL = "reorder_level";
    public const TARGET_LEVEL = "target_level";
    public const QUANTITY_PER_UNIT = "quantity_per_unit";
    public const DISCONTINUED = "discontinued";
    public const MINIMUM_REORDER_QUANTITY = "minimum_reorder_quantity";
    public const CATEGORY = "category";

    private function __construct() {}

}

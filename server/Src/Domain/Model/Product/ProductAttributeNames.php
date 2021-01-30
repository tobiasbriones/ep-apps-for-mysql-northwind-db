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

    public const ID_ATTR_NAME = "id";
    public const CODE_ATTR_NAME = "product_code";
    public const SUPPLIER_IDS_ATTR_NAME = "supplier_ids";
    public const NAME_ATTR_NAME = "product_name";
    public const DESCRIPTION_ATTR_NAME = "description";
    public const STANDARD_COST_ATTR_NAME = "standard_cost";
    public const LIST_PRICE_ATTR_NAME = "list_price";
    public const REORDER_LEVEL_ATTR_NAME = "reorder_level";
    public const TARGET_LEVEL_ATTR_NAME = "target_level";
    public const QUANTITY_PER_UNIT_ATTR_NAME = "quantity_per_unit";
    public const DISCONTINUED_ATTR_NAME = "discontinued";
    public const MINIMUM_REORDER_QUANTITY_ATTR_NAME = "minimum_reorder_quantity";
    public const CATEGORY_ATTR_NAME = "category";

    private function __construct() {}

}

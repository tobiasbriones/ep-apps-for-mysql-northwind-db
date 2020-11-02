<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Domain\Model\Product;

/**
 * Defines the Product attributes.
 *
 * @package App\Domain\Model\Product
 */
interface ProductAttributes extends IdProductAttributes {

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

    public function productCode(): string;

    public function supplierIds(): string;

    public function productName(): string;

    public function description(): ?string;

    public function standardCost(): float;

    public function listPrice(): float;

    public function reorderLevel(): int;

    public function targetLevel(): int;

    public function quantityPerUnit(): string;

    public function discontinued(): bool;

    public function minimumReorderQuantity(): int;

    public function category(): string;

}

<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Extension;

use App\Domain\Model\Product\Product;

class ProductExtension {

    public static function jsonSerialize(Product $self): array {
        return [
            Product::SUPPLIER_IDS_ATTR_NAME => $self->supplierIds(),
            Product::CODE_ATTR_NAME => $self->code(),
            Product::NAME_ATTR_NAME => $self->name(),
            Product::DESCRIPTION_ATTR_NAME => $self->description(),
            Product::STANDARD_COST_ATTR_NAME => $self->standardCost(),
            Product::LIST_PRICE_ATTR_NAME => $self->listPrice(),
            Product::REORDER_LEVEL_ATTR_NAME => $self->reorderLevel(),
            Product::TARGET_LEVEL_ATTR_NAME => $self->targetLevel(),
            Product::QUANTITY_PER_UNIT_ATTR_NAME => $self->quantityPerUnit(),
            Product::DISCONTINUED_ATTR_NAME => $self->discontinued(),
            Product::MINIMUM_REORDER_QUANTITY_ATTR_NAME => $self->minimumReorderQuantity(),
            Product::CATEGORY_ATTR_NAME => $self->category()
        ];
    }

}

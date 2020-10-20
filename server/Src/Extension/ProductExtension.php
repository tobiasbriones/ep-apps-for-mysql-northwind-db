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
            "supplier_ids" => $self->supplierIds(),
            "code" => $self->code(),
            "name" => $self->name(),
            "description" => $self->description(),
            "standard_cost" => $self->standardCost(),
            "list_price" => $self->listPrice(),
            "reorder_level" => $self->reorderLevel(),
            "target_level" => $self->targetLevel(),
            "quantity_per_unit" => $self->quantityPerUnit(),
            "discontinued" => $self->discontinued(),
            "minimumReorder_quantity" => $self->minimumReorderQuantity(),
            "category" => $self->category()
        ];
    }

}

<?php
/*
 * Copyright (c) 2021 Tobias Briones. All rights reserved.
 *
 * SPDX-License-Identifier: MIT
 *
 * This file is part of Example Project: Apps for the MySQL Northwind DB.
 *
 * This source code is licensed under the MIT License found in the
 * LICENSE file in the root directory of this source tree or at
 * https://opensource.org/licenses/MIT.
 */

namespace App\Http\Api\V1\Products;

use App\Domain\Model\Product\Product;
use App\Domain\Model\Product\ProductAttributeNames;
use App\Http\Serialization;

class ProductSerializable {

    public function __construct(private Product $product) {}

    public function serialize(int $serialization): string {
        return match ($serialization) {
            Serialization::JSON => $this->jsonSerialize(),
            Serialization::XML => $this->xmlSerialize(),
            Serialization::HTML => $this->htmlSerialize(),
        };
    }

    private function jsonSerialize(): string {
        $array = $this->toArray();
        return json_encode($array);
    }

    private function xmlSerialize(): string {
        return "not supported";
    }

    private function htmlSerialize(): string {
        return "not supported";
    }

    private function toArray(): array {
        $self = $this->product;
        return [
            ProductAttributeNames::ID_ATTR_NAME => $self->id(),
            ProductAttributeNames::SUPPLIER_IDS_ATTR_NAME => $self->supplierIds(),
            ProductAttributeNames::CODE_ATTR_NAME => $self->productCode(),
            ProductAttributeNames::NAME_ATTR_NAME => $self->productName(),
            ProductAttributeNames::DESCRIPTION_ATTR_NAME => $self->description(),
            ProductAttributeNames::STANDARD_COST_ATTR_NAME => $self->standardCost(),
            ProductAttributeNames::LIST_PRICE_ATTR_NAME => $self->listPrice(),
            ProductAttributeNames::REORDER_LEVEL_ATTR_NAME => $self->reorderLevel(),
            ProductAttributeNames::TARGET_LEVEL_ATTR_NAME => $self->targetLevel(),
            ProductAttributeNames::QUANTITY_PER_UNIT_ATTR_NAME => $self->quantityPerUnit(),
            ProductAttributeNames::DISCONTINUED_ATTR_NAME => $self->discontinued(),
            ProductAttributeNames::MINIMUM_REORDER_QUANTITY_ATTR_NAME => $self->minimumReorderQuantity(
            ),
            ProductAttributeNames::CATEGORY_ATTR_NAME => $self->category()
        ];
    }

}

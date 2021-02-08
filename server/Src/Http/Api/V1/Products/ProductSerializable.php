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

    public static function serializeAll(array $products, int $serialization): string {
        return match ($serialization) {
            Serialization::JSON => self::jsonSerializeAll($products),
            Serialization::XML => self::xmlSerializeAll(),
            Serialization::HTML => self::htmlSerializeAll(),
        };
    }

    private static function jsonSerializeAll(array $products): string {
        $array = [];

        foreach ($products as $product) {
            $serializable = new ProductSerializable($product);
            $array[] = $serializable->toArray();
        }
        return json_encode($array);
    }

    private static function xmlSerializeAll(): string {
        return "not supported";
    }

    private static function htmlSerializeAll(): string {
        return "not supported";
    }

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
            ProductAttributeNames::ID => $self->id(),
            ProductAttributeNames::SUPPLIER_IDS => $self->supplierIds(),
            ProductAttributeNames::CODE => $self->productCode(),
            ProductAttributeNames::NAME => $self->productName(),
            ProductAttributeNames::DESCRIPTION => $self->description(),
            ProductAttributeNames::STANDARD_COST => $self->standardCost(),
            ProductAttributeNames::LIST_PRICE => $self->listPrice(),
            ProductAttributeNames::REORDER_LEVEL => $self->reorderLevel(),
            ProductAttributeNames::TARGET_LEVEL => $self->targetLevel(),
            ProductAttributeNames::QUANTITY_PER_UNIT => $self->quantityPerUnit(),
            ProductAttributeNames::DISCONTINUED => $self->discontinued(),
            ProductAttributeNames::MINIMUM_REORDER_QUANTITY => $self->minimumReorderQuantity(
            ),
            ProductAttributeNames::CATEGORY => $self->category()
        ];
    }

}

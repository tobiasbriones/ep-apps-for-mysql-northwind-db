<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Extension;

use App\Domain\Model\Product\Product;
use App\Domain\Model\Product\ProductAttributeNames;
use JsonSerializable;

class ProductSerializableDecorator implements Product, JsonSerializable {

    private Product $product;

    public function __construct(Product $product) {
        $this->product = $product;
    }
    
    public function id(): int {
        return $this->product->id();
    }

    public function productCode(): ?string {
        return $this->product->productCode();
    }

    public function supplierIds(): ?string {
        return $this->product->supplierIds();
    }

    public function productName(): ?string {
        return $this->product->productName();
    }

    public function description(): ?string {
        return $this->product->description();
    }

    public function standardCost(): ?float {
        return $this->product->standardCost();
    }

    public function listPrice(): float {
        return $this->product->listPrice();
    }

    public function reorderLevel(): ?int {
        return $this->product->reorderLevel();
    }

    public function targetLevel(): ?int {
        return $this->product->targetLevel();
    }

    public function quantityPerUnit(): ?string {
        return $this->product->quantityPerUnit();
    }

    public function discontinued(): bool {
        return $this->product->discontinued();
    }

    public function minimumReorderQuantity(): ?int {
        return $this->product->minimumReorderQuantity();
    }

    public function category(): ?string {
        return $this->product->category();
    }

    public function jsonSerialize(): array {
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

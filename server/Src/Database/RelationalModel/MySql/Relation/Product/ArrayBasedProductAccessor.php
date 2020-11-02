<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Database\RelationalModel\MySql\Relation\Product;

use App\Domain\Model\Product\ProductAccessor;
use App\Domain\Model\Product\ProductAttributeNames;

class ArrayBasedProductAccessor implements ProductAccessor {

    private array $productArray;

    public function __construct(array $productArray) {
        $this->productArray = $productArray;
    }

    public function getId(): int {
        return $this->productArray[ProductAttributeNames::ID_ATTR_NAME];
    }

    public function getSupplierIds(): string {
        return $this->productArray[ProductAttributeNames::SUPPLIER_IDS_ATTR_NAME];
    }

    public function getCode(): string {
        return $this->productArray[ProductAttributeNames::CODE_ATTR_NAME];
    }

    public function getName(): string {
        return $this->productArray[ProductAttributeNames::NAME_ATTR_NAME];
    }

    public function getDescription(): ?string {
        return $this->productArray[ProductAttributeNames::DESCRIPTION_ATTR_NAME];
    }

    public function getStandardCost(): float {
        return $this->productArray[ProductAttributeNames::STANDARD_COST_ATTR_NAME];
    }

    public function getListPrice(): float {
        return $this->productArray[ProductAttributeNames::LIST_PRICE_ATTR_NAME];
    }

    public function getReorderLevel(): int {
        return $this->productArray[ProductAttributeNames::REORDER_LEVEL_ATTR_NAME];
    }

    public function getTargetLevel(): int {
        return $this->productArray[ProductAttributeNames::TARGET_LEVEL_ATTR_NAME];
    }

    public function getQuantityPerUnit(): string {
        return $this->productArray[ProductAttributeNames::QUANTITY_PER_UNIT_ATTR_NAME];
    }

    public function getDiscontinued(): bool {
        return $this->productArray[ProductAttributeNames::DISCONTINUED_ATTR_NAME];
    }

    public function getMinimumReorderQuantity(): ?int {
        return $this->productArray[ProductAttributeNames::MINIMUM_REORDER_QUANTITY_ATTR_NAME];
    }

    public function getCategory(): string {
        return $this->productArray[ProductAttributeNames::CATEGORY_ATTR_NAME];
    }

}

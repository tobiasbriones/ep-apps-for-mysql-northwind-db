<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Database\RelationalModel\MySql\Relation\Product;

use App\Data\RelationalModel\Relation\Product\ProductTuple;
use App\Domain\Model\Product\ProductAccessor;

class ArrayBasedProductAccessor implements ProductAccessor {

    private array $productArray;

    public function __construct(array $productArray) {
        $this->productArray = $productArray;
    }

    public function getSupplierIds(): string {
        return $this->productArray[ProductTuple::SUPPLIER_IDS_ATTR_NAME];
    }

    public function getCode(): string {
        return $this->productArray[ProductTuple::CODE_ATTR_NAME];
    }

    public function getName(): string {
        return $this->productArray[ProductTuple::NAME_ATTR_NAME];
    }

    public function getDescription(): ?string {
        return $this->productArray[ProductTuple::DESCRIPTION_ATTR_NAME];
    }

    public function getStandardCost(): float {
        return $this->productArray[ProductTuple::STANDARD_COST_ATTR_NAME];
    }

    public function getListPrice(): float {
        return $this->productArray[ProductTuple::LIST_PRICE_ATTR_NAME];
    }

    public function getReorderLevel(): int {
        return $this->productArray[ProductTuple::REORDER_LEVEL_ATTR_NAME];
    }

    public function getTargetLevel(): int {
        return $this->productArray[ProductTuple::TARGET_LEVEL_ATTR_NAME];
    }

    public function getQuantityPerUnit(): string {
        return $this->productArray[ProductTuple::QUANTITY_PER_UNIT_ATTR_NAME];
    }

    public function getDiscontinued(): bool {
        return $this->productArray[ProductTuple::DISCONTINUED_ATTR_NAME];
    }

    public function getMinimumReorderQuantity(): int {
        return $this->productArray[ProductTuple::MINIMUM_REORDER_QUANTITY_ATTR_NAME];
    }

    public function getCategory(): string {
        return $this->productArray[ProductTuple::CATEGORY_ATTR_NAME];
    }

}

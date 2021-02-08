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

namespace App\Database\RelationalModel\MySql\Relation\Product;

use App\Domain\Model\Product\ProductAccessor;
use App\Domain\Model\Product\ProductAttributeNames;

final class ArrayBasedProductAccessor implements ProductAccessor {

    private array $productArray;

    public function __construct(array $productArray) {
        $this->productArray = $productArray;
    }

    public function getId(): int {
        return $this->productArray[ProductAttributeNames::ID];
    }

    public function getSupplierIds(): ?string {
        return $this->productArray[ProductAttributeNames::SUPPLIER_IDS];
    }

    public function getCode(): ?string {
        return $this->productArray[ProductAttributeNames::CODE];
    }

    public function getName(): ?string {
        return $this->productArray[ProductAttributeNames::NAME];
    }

    public function getDescription(): ?string {
        return $this->productArray[ProductAttributeNames::DESCRIPTION];
    }

    public function getStandardCost(): ?float {
        return $this->productArray[ProductAttributeNames::STANDARD_COST];
    }

    public function getListPrice(): float {
        return $this->productArray[ProductAttributeNames::LIST_PRICE];
    }

    public function getReorderLevel(): ?int {
        return $this->productArray[ProductAttributeNames::REORDER_LEVEL];
    }

    public function getTargetLevel(): ?int {
        return $this->productArray[ProductAttributeNames::TARGET_LEVEL];
    }

    public function getQuantityPerUnit(): ?string {
        return $this->productArray[ProductAttributeNames::QUANTITY_PER_UNIT];
    }

    public function getDiscontinued(): bool {
        return $this->productArray[ProductAttributeNames::DISCONTINUED];
    }

    public function getMinimumReorderQuantity(): ?int {
        return $this->productArray[ProductAttributeNames::MINIMUM_REORDER_QUANTITY];
    }

    public function getCategory(): ?string {
        return $this->productArray[ProductAttributeNames::CATEGORY];
    }

}

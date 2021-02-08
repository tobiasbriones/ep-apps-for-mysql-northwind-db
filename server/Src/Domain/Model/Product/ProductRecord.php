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

use Exception;

/**
 * Defines the Product attributes.
 *
 * @package App\Domain\Model\Product
 */
class ProductRecord extends ProductId {

    public function __construct(
        private int $id,
        private ?string $supplierIds,
        private ?string $productCode,
        private ?string $productName,
        private ?string $description,
        private ?float $standardCost,
        private float $listPrice,
        private ?int $reorderLevel,
        private ?int $targetLevel,
        private ?string $quantityPerUnit,
        private bool $discontinued,
        private ?int $minimumReorderQuantity,
        private ?string $category
    ) {
        parent::__construct($id);
        $this->validate();
    }

    public function productCode(): ?string {
        return $this->productCode;
    }

    public function supplierIds(): ?string {
        return $this->supplierIds;
    }

    public function productName(): ?string {
        return $this->productName;
    }

    public function description(): ?string {
        return $this->description;
    }

    public function standardCost(): ?float {
        return $this->standardCost;
    }

    public function listPrice(): float {
        return $this->listPrice;
    }

    public function reorderLevel(): ?int {
        return $this->reorderLevel;
    }

    public function targetLevel(): ?int {
        return $this->targetLevel;
    }

    public function quantityPerUnit(): ?string {
        return $this->quantityPerUnit;
    }

    public function discontinued(): bool {
        return $this->discontinued;
    }

    public function minimumReorderQuantity(): ?int {
        return $this->minimumReorderQuantity;
    }

    public function category(): ?string {
        return $this->category;
    }

    /**
     * @throws Exception if the state is invalid
     */
    private function validate(): void {
        if ($this->standardCost < 0) {
            throw new Exception("Invalid standard cost: $this->standardCost");
        }
        if ($this->listPrice < 0) {
            throw new Exception("Invalid standard list price: $this->standardCost");
        }
        if ($this->reorderLevel < 0) {
            throw new Exception("Invalid standard reorder level: $this->standardCost");
        }
        if ($this->targetLevel < 0) {
            throw new Exception("Invalid target level: $this->standardCost");
        }
        if ($this->minimumReorderQuantity < 0) {
            throw new Exception("Invalid minimum reorder quantity: $this->standardCost");
        }
    }

}

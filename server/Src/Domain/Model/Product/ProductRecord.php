<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Domain\Model\Product;

/**
 * Provides the implementation of the Product model.
 *
 * @package App\Domain\Model\Product
 */
class ProductRecord implements Product {

    private int $id;
    private ?string $supplierIds;
    private ?string $productCode;
    private ?string $productName;
    private ?string $description;
    private ?float $standardCost;
    private float $listPrice;
    private ?int $reorderLevel;
    private ?int $targetLevel;
    private ?string $quantityPerUnit;
    private ?bool $discontinued;
    private ?int $minimumReorderQuantity;
    private ?string $category;

    public function __construct(
        int $id,
        string $supplierIds,
        string $productCode,
        string $productName,
        ?string $description,
        float $standardCost,
        float $listPrice,
        int $reorderLevel,
        int $targetLevel,
        string $quantityPerUnit,
        bool $discontinued,
        int $minimumReorderQuantity,
        string $category
    ) {
        $this->id = $id;
        $this->supplierIds = $supplierIds;
        $this->productCode = $productCode;
        $this->productName = $productName;
        $this->description = $description;
        $this->standardCost = $standardCost;
        $this->listPrice = $listPrice;
        $this->reorderLevel = $reorderLevel;
        $this->targetLevel = $targetLevel;
        $this->quantityPerUnit = $quantityPerUnit;
        $this->discontinued = $discontinued;
        $this->minimumReorderQuantity = $minimumReorderQuantity;
        $this->category = $category;
    }

    public function id(): int {
        return $this->id;
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

}

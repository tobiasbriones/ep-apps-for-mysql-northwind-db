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

    public static function of(ProductAccessor $accessor): Product {
        return new ProductRecord(
            $accessor->getId(),
            $accessor->getSupplierIds(),
            $accessor->getCode(),
            $accessor->getName(),
            $accessor->getDescription(),
            $accessor->getStandardCost(),
            $accessor->getListPrice(),
            $accessor->getReorderLevel(),
            $accessor->getTargetLevel(),
            $accessor->getQuantityPerUnit(),
            $accessor->getDiscontinued(),
            $accessor->getMinimumReorderQuantity(),
            $accessor->getCategory()
        );
    }

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
    ) {}

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

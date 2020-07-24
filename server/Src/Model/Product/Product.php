<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Model\Product;

use JsonSerializable;

class Product implements JsonSerializable {
    
    private int $id;
    private string $supplierIds;
    private string $code;
    private string $name;
    private ?string $description;
    private float $standardCost;
    private float $listPrice;
    private int $reorderLevel;
    private int $targetLevel;
    private string $quantityPerUnit;
    private bool $discontinued;
    private int $minimumReorderQuantity;
    private string $category;
    
    public function __construct(ProductBuilder $builder) {
        $this->id = $builder->id;
        $this->supplierIds = $builder->supplierIds;
        $this->code = $builder->code;
        $this->name = $builder->name;
        $this->description = $builder->description;
        $this->standardCost = $builder->standardCost;
        $this->listPrice = $builder->listPrice;
        $this->reorderLevel = $builder->reorderLevel;
        $this->targetLevel = $builder->targetLevel;
        $this->quantityPerUnit = $builder->quantityPerUnit;
        $this->discontinued = $builder->discontinued;
        $this->minimumReorderQuantity = $builder->minimumReorderQuantity;
        $this->category = $builder->category;
    }
    
    public function jsonSerialize() {
        return [
            "id" => $this->getId(),
            "supplierIds" => $this->getSupplierIds(),
            "code" => $this->getCode(),
            "name" => $this->getName(),
            "description" => $this->getDescription(),
            "standardCost" => $this->getStandardCost(),
            "listPrice" => $this->getListPrice(),
            "reorderLevel" => $this->getReorderLevel(),
            "targetLevel" => $this->getTargetLevel(),
            "quantityPerUnit" => $this->getQuantityPerUnit(),
            "discontinued" => $this->isDiscontinued(),
            "minimumReorderQuantity" => $this->getMinimumReorderQuantity(),
            "category" => $this->getCategory(),
        ];
    }
    
    /**
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }
    
    /**
     * @return string
     */
    public function getSupplierIds(): string {
        return $this->supplierIds;
    }
    
    /**
     * @return string
     */
    public function getCode(): string {
        return $this->code;
    }
    
    /**
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }
    
    /**
     * @return string
     */
    public function getDescription(): ?string {
        return $this->description;
    }
    
    /**
     * @return float
     */
    public function getStandardCost(): float {
        return $this->standardCost;
    }
    
    /**
     * @return float
     */
    public function getListPrice(): float {
        return $this->listPrice;
    }
    
    /**
     * @return int
     */
    public function getReorderLevel(): int {
        return $this->reorderLevel;
    }
    
    /**
     * @return int
     */
    public function getTargetLevel(): int {
        return $this->targetLevel;
    }
    
    /**
     * @return string
     */
    public function getQuantityPerUnit(): string {
        return $this->quantityPerUnit;
    }
    
    /**
     * @return bool
     */
    public function isDiscontinued(): bool {
        return $this->discontinued;
    }
    
    /**
     * @return int
     */
    public function getMinimumReorderQuantity(): int {
        return $this->minimumReorderQuantity;
    }
    
    /**
     * @return string
     */
    public function getCategory(): string {
        return $this->category;
    }
    
}

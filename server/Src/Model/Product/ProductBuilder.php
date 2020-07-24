<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Model\Product;

class ProductBuilder {
    
    public int $id;
    public string $supplierIds;
    public string $code;
    public string $name;
    public ?string $description;
    public float $standardCost;
    public float $listPrice;
    public int $reorderLevel;
    public int $targetLevel;
    public string $quantityPerUnit;
    public bool $discontinued;
    public int $minimumReorderQuantity;
    public string $category;
    
    public function __construct($id) {
        $this->id = $id;
    }
    
    public function setSuppliersIds($suppliersIds): ProductBuilder {
        $this->supplierIds = $suppliersIds;
        return $this;
    }
    
    public function setCode($code): ProductBuilder {
        $this->code = $code;
        return $this;
    }
    
    public function setName($name): ProductBuilder {
        $this->name = $name;
        return $this;
    }
    
    public function setDescription($description): ProductBuilder {
        $this->description = $description;
        return $this;
    }
    
    public function setStandardCost($standardCost): ProductBuilder {
        $this->standardCost = $standardCost;
        return $this;
    }
    
    public function setListPrice($listPrice): ProductBuilder {
        $this->listPrice = $listPrice;
        return $this;
    }
    
    public function setReorderLevel($reorderLevel): ProductBuilder {
        $this->reorderLevel = $reorderLevel;
        return $this;
    }
    
    public function setTargetLevel($targetLevel): ProductBuilder {
        $this->targetLevel = $targetLevel;
        return $this;
    }
    
    public function setQuantityPerUnit($quantityPerUnit): ProductBuilder {
        $this->quantityPerUnit = $quantityPerUnit;
        return $this;
    }
    
    public function setDiscontinued($discontinued): ProductBuilder {
        $this->discontinued = $discontinued;
        return $this;
    }
    
    public function setMinimumReorderQuantity($minimumReorderQuantity): ProductBuilder {
        $this->minimumReorderQuantity = $minimumReorderQuantity;
        return $this;
    }
    
    public function setCategory($category): ProductBuilder {
        $this->category = $category;
        return $this;
    }
    
    public function build(): Product {
        return new Product($this);
    }
    
}

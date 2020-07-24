<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Database\Entity\Product;

use App\Database\Entity\Entity;
use App\Model\Product\Product;
use App\Model\Product\ProductBuilder;
use PDO;

class ProductEntity extends Entity implements ProductCrudSQL {
    
    public function __construct(PDO $conn) {
        parent::__construct($conn);
    }
    
    public function create(Product $product) {
        // TODO: Implement create() method.
    }
    
    public function createAll(Product ...$products) {
        // TODO: Implement createAll() method.
    }
    
    public function read(int $id): ?Product {
        $conn = $this->getConnection();
        $ps = $conn->prepare(self::READ_PRODUCT_SQL);
        
        $ps->bindParam("id", $id);
        if (!$ps->execute()) {
            return null;
        }
        $row = $ps->fetch(PDO::FETCH_ASSOC);
        
        if (!$row) {
            return null;
        }
        return $this->buildProduct($row);
    }
    
    public function readAll(): array {
        $conn = $this->getConnection();
        $ps = $conn->prepare(self::READ_ALL_PRODUCTS_SQL);
        
        if (!$ps->execute()) {
            return [];
        }
        return $ps->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function update(Product $product) {
        // TODO: Implement update() method.
    }
    
    public function updateAll(Product ...$products) {
        // TODO: Implement updateAll() method.
    }
    
    public function delete(Product $product) {
        // TODO: Implement delete() method.
    }
    
    public function deleteAll(Product ...$products) {
        // TODO: Implement deleteAll() method.
    }
    
    private function buildProduct(array $row): Product {
        $builder = new ProductBuilder($row["id"]);
        
        $builder->setSuppliersIds($row["supplier_ids"])
            ->setCode($row["product_code"])
            ->setName($row["product_name"])
            ->setDescription($row["description"])
            ->setStandardCost($row["standard_cost"])
            ->setListPrice($row["list_price"])
            ->setReorderLevel($row["reorder_level"])
            ->setTargetLevel($row["target_level"])
            ->setQuantityPerUnit($row["quantity_per_unit"])
            ->setDiscontinued($row["discontinued"] == 1)
            ->setMinimumReorderQuantity($row["minimum_reorder_quantity"])
            ->setCategory($row["category"]);
        return $builder->build();
    }
    
}

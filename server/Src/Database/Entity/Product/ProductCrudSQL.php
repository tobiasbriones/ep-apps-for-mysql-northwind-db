<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Database\Entity\Product;

use App\Model\Product\Product;

interface ProductCrudSQL {
    
    /**
     * SQL query that selects a product by id.
     *
     * Params to bind:
     *
     * - id: product id
     */
    const READ_PRODUCT_SQL = "SELECT * FROM products WHERE id = :id";
    
    /**
     * SQL query that selects all of the products.
     */
    const READ_ALL_PRODUCTS_SQL = "SELECT * FROM products";
    
    public function create(Product $product);
    public function createAll(Product ...$products);
    public function read(int $id): ?Product;
    public function readAll(): array;
    public function update(Product $product);
    public function updateAll(Product ...$products);
    public function delete(Product $product);
    public function deleteAll(Product ...$products);
    
}

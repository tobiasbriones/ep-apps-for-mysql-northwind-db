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

/**
 * Defines the SQL queries for accessing the Products relation.
 *
 * @package App\Database\RelationalModel\MySql\Relation\Product
 */
final class MySqlProductRelationSql {

    /**
     * SQL query to insert a new product.
     *
     * Params to bind:
     *
     * - <strong>product_code:</strong> product code
     * - <strong>supplier_ids:</strong> product supplier ids
     * - <strong>product_name:</strong> product name
     * - <strong>description:</strong> product description
     * - <strong>standard_cost:</strong> product standard cost
     * - <strong>list_price:</strong> product list price
     * - <strong>reorder_level:</strong> product reorder level
     * - <strong>target_level:</strong> product target level
     * - <strong>quantity_per_unit:</strong> product quantity per unit
     * - <strong>discontinued:</strong> product discontinued
     * - <strong>minimum_reorder_quantity:</strong> product minimum reorder quantity
     * - <strong>category:</strong> product category
     */
    public const CREATE_PRODUCT_SQL = <<<EOT
        INSERT INTO products
        VALUES (
            :product_code
            :supplier_ids, 
            :product_name, 
            :description,
            :standard_cost,
            :list_price,
            :reorder_level,
            :target_level,
            :quantity_per_unit,
            :discontinued,
            :minimum_reorder_quantity,
            :category
        )
        EOT;

    /**
     * SQL query that selects a product by code.
     *
     * Params to bind:
     *
     * - <strong>id:</strong> product id
     */
    public const FETCH_PRODUCT_SQL = <<<EOT
        SELECT id,
               product_code, 
               supplier_ids, 
               product_name, 
               description,
               standard_cost,
               list_price,
               reorder_level,
               target_level,
               quantity_per_unit,
               discontinued,
               minimum_reorder_quantity,
               category
        FROM products WHERE id = :id
        EOT;

    /**
     * SQL query that selects all of the products.
     */
    public const FETCH_ALL_PRODUCTS_SQL = "SELECT * FROM products";

    /**
     * SQL query that selects all of the products by pagination.
     *
     * Params to bind:
     *
     * - <strong>limit:</strong> page limit number
     * - <strong>offset_rows:</strong> offset rows
     */
    public const FETCH_ALL_PRODUCTS_BY_PAGE_SQL = <<<EOT
        SELECT * FROM products 
        ORDER BY product_code
        LIMIT :limit
        OFFSET :offset_rows
        EOT;

    /**
     * SQL query to update a product by code. The product code is not changed.
     *
     * Params to bind:
     *
     * - <strong>supplier_ids:</strong> product supplier ids
     * - <strong>product_code:</strong> product code
     * - <strong>product_name:</strong> product name
     * - <strong>description:</strong> product description
     * - <strong>standard_cost:</strong> product standard cost
     * - <strong>list_price:</strong> product list price
     * - <strong>reorder_level:</strong> product reorder level
     * - <strong>target_level:</strong> product target level
     * - <strong>quantity_per_unit:</strong> product quantity per unit
     * - <strong>discontinued:</strong> product discontinued
     * - <strong>minimum_reorder_quantity:</strong> product minimum reorder quantity
     * - <strong>category:</strong> product category
     * - <strong>id:</strong> product id
     */
    public const UPDATE_PRODUCT_SQL = <<<EOT
        UPDATE products 
        SET supplier_ids = :supplier_ids, 
            product_code = :product_code,
            product_name = :product_name, 
            description = :description,
            standard_cost = :standard_cost,
            list_price = :list_price,
            reorder_level = :reorder_level,
            target_level = :target_level,
            quantity_per_unit = :quantity_per_unit,
            discontinued = :discontinued,
            minimum_reorder_quantity :minimum_reorder_quantity,
            category = :category
        WHERE id = :id
        EOT;

    /**
     * SQL query that deletes a product by code.
     *
     * Params to bind:
     *
     * - <strong>id:</strong> product id
     */
    public const DELETE_PRODUCT_SQL = "DELETE FROM products WHERE id = :id";

    private function __construct() {}

}

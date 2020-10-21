<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Database\RelationalModel\MySql\Relation\Product;

use App\Data\Common\Product\ProductDao;
use App\Data\RelationalModel\Relation\Product\ProductTuple;
use App\Database\RelationalModel\MySql\MySqlConnectionException;
use App\Database\RelationalModel\MySql\MySqlPdoConnection;
use App\Database\RelationalModel\MySql\Relation\BaseDao;
use App\Domain\Model\Product\AccessorBasedProductBuilder;
use App\Domain\Model\Product\IdProductAttributes;
use App\Domain\Model\Product\Product;
use Exception;
use PDO;
use PDOStatement;

class MySqlProductDao extends BaseDao implements ProductDao {

    public function __construct(MySqlPdoConnection $connection) {
        parent::__construct($connection);
    }

    /**
     * @param Product $product
     *
     * @return Product
     * @throws MySqlConnectionException if something fails
     */
    public function create(Product $product): Product {
        $conn = $this->getConnection();
        $ps = $conn->prepare(MySqlProductRelationSql::CREATE_PRODUCT_SQL);

        self::bindAllParams($product, $ps);
        if (!$ps->execute()) {
            $msg = "Fail to create product: $product";
            throw new MySqlConnectionException($msg);
        }
        return $product;
    }

    private static function bindAllParams(Product $product, PDOStatement $ps): void {
        $code = $product->code();
        $supplierIds = $product->supplierIds();
        $name = $product->name();
        $description = $product->description();
        $standardCost = $product->standardCost();
        $listPrice = $product->listPrice();
        $reorderLevel = $product->reorderLevel();
        $targetLevel = $product->targetLevel();
        $quantityPerUnit = $product->quantityPerUnit();
        $discontinued = $product->discontinued();
        $minimumReorderQuantity = $product->minimumReorderQuantity();
        $category = $product->category();

        $ps->bindParam(ProductTuple::CODE_ATTR_NAME, $code);
        $ps->bindParam(ProductTuple::SUPPLIER_IDS_ATTR_NAME, $supplierIds);
        $ps->bindParam(ProductTuple::NAME_ATTR_NAME, $name);
        $ps->bindParam(ProductTuple::DESCRIPTION_ATTR_NAME, $description);
        $ps->bindParam(ProductTuple::STANDARD_COST_ATTR_NAME, $standardCost);
        $ps->bindParam(ProductTuple::LIST_PRICE_ATTR_NAME, $listPrice);
        $ps->bindParam(ProductTuple::REORDER_LEVEL_ATTR_NAME, $reorderLevel);
        $ps->bindParam(ProductTuple::TARGET_LEVEL_ATTR_NAME, $targetLevel);
        $ps->bindParam(ProductTuple::QUANTITY_PER_UNIT_ATTR_NAME, $quantityPerUnit);
        $ps->bindParam(ProductTuple::DISCONTINUED_ATTR_NAME, $discontinued);
        $ps->bindParam(ProductTuple::MINIMUM_REORDER_QUANTITY_ATTR_NAME, $minimumReorderQuantity);
        $ps->bindParam(ProductTuple::CATEGORY_ATTR_NAME, $category);
    }

    /**
     * @param IdProductAttributes $id product to fetch
     *
     * @return Product|null
     * @throws MySqlConnectionException|Exception if something fails
     */
    public function fetch(IdProductAttributes $id): ?Product {
        $conn = $this->getConnection();
        $code = $id->code();
        $ps = $conn->prepare(MySqlProductRelationSql::FETCH_PRODUCT_SQL);

        $ps->bindParam(ProductTuple::CODE_ATTR_NAME, $code);
        if (!$ps->execute()) {
            $msg = "Fail to fetch product: $id";
            throw new MySqlConnectionException($msg);
        }
        $row = $ps->fetch(PDO::FETCH_ASSOC);

        if (!$row) {
            return null;
        }
        $accessor = new ArrayBasedProductAccessor($row);
        $builder = new AccessorBasedProductBuilder();

        $builder->set($accessor);
        return $builder->build();
    }

    /**
     * @param Product $product product to update
     *
     * @throws MySqlConnectionException if something fails
     */
    public function update(Product $product): void {
        $conn = $this->getConnection();
        $ps = $conn->prepare(MySqlProductRelationSql::UPDATE_PRODUCT_SQL);

        self::bindAllParams($product, $ps);

        if (!$ps->execute()) {
            $msg = "Fail to update product: $product";
            throw new MySqlConnectionException($msg);
        }
    }

    /**
     * @param Product $product product to delete
     *
     * @throws MySqlConnectionException if something fails
     */
    public function delete(Product $product): void {
        $conn = $this->getConnection();
        $code = $product->code();
        $ps = $conn->prepare(MySqlProductRelationSql::DELETE_PRODUCT_SQL);

        $ps->bindParam(ProductTuple::CODE_ATTR_NAME, $code);
        if (!$ps->execute()) {
            $msg = "Fail to delete product: $product";
            throw new MySqlConnectionException($msg);
        }
    }

}

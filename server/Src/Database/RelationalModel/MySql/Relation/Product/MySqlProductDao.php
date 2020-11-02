<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Database\RelationalModel\MySql\Relation\Product;

use App\Data\Common\Product\ProductDao;
use App\Database\RelationalModel\MySql\MySqlConnectionException;
use App\Database\RelationalModel\MySql\MySqlPdoConnection;
use App\Database\RelationalModel\MySql\Relation\BaseDao;
use App\Domain\Model\Product\AccessorBasedProductBuilder;
use App\Domain\Model\Product\IdProductAttributeSet;
use App\Domain\Model\Product\Product;
use App\Domain\Model\Product\ProductAttributeNames;
use Exception;
use PDO;
use PDOStatement;

class MySqlProductDao extends BaseDao implements ProductDao {

    private static function bindAllParams(Product $product, PDOStatement $ps): void {
        $code = $product->productCode();
        $supplierIds = $product->supplierIds();
        $name = $product->productName();
        $description = $product->description();
        $standardCost = $product->standardCost();
        $listPrice = $product->listPrice();
        $reorderLevel = $product->reorderLevel();
        $targetLevel = $product->targetLevel();
        $quantityPerUnit = $product->quantityPerUnit();
        $discontinued = $product->discontinued();
        $minimumReorderQuantity = $product->minimumReorderQuantity();
        $category = $product->category();

        $ps->bindParam(ProductAttributeNames::CODE_ATTR_NAME, $code);
        $ps->bindParam(ProductAttributeNames::SUPPLIER_IDS_ATTR_NAME, $supplierIds);
        $ps->bindParam(ProductAttributeNames::NAME_ATTR_NAME, $name);
        $ps->bindParam(ProductAttributeNames::DESCRIPTION_ATTR_NAME, $description);
        $ps->bindParam(ProductAttributeNames::STANDARD_COST_ATTR_NAME, $standardCost);
        $ps->bindParam(ProductAttributeNames::LIST_PRICE_ATTR_NAME, $listPrice);
        $ps->bindParam(ProductAttributeNames::REORDER_LEVEL_ATTR_NAME, $reorderLevel);
        $ps->bindParam(ProductAttributeNames::TARGET_LEVEL_ATTR_NAME, $targetLevel);
        $ps->bindParam(ProductAttributeNames::QUANTITY_PER_UNIT_ATTR_NAME, $quantityPerUnit);
        $ps->bindParam(ProductAttributeNames::DISCONTINUED_ATTR_NAME, $discontinued);
        $ps->bindParam(
            ProductAttributeNames::MINIMUM_REORDER_QUANTITY_ATTR_NAME,
            $minimumReorderQuantity
        );
        $ps->bindParam(ProductAttributeNames::CATEGORY_ATTR_NAME, $category);
    }

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

    /**
     * @param IdProductAttributeSet $id product to fetch
     *
     * @return Product|null
     * @throws MySqlConnectionException|Exception if something fails
     */
    public function fetch(IdProductAttributeSet $id): ?Product {
        $conn = $this->getConnection();
        $id = $id->id();
        $ps = $conn->prepare(MySqlProductRelationSql::FETCH_PRODUCT_SQL);

        $ps->bindParam(ProductAttributeNames::ID_ATTR_NAME, $id);
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
        $id = $product->id();
        $conn = $this->getConnection();
        $ps = $conn->prepare(MySqlProductRelationSql::UPDATE_PRODUCT_SQL);

        self::bindAllParams($product, $ps);
        $ps->bindParam(ProductAttributeNames::ID_ATTR_NAME, $id);

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
        $id = $product->id();
        $ps = $conn->prepare(MySqlProductRelationSql::DELETE_PRODUCT_SQL);

        $ps->bindParam(ProductAttributeNames::ID_ATTR_NAME, $id);
        if (!$ps->execute()) {
            $msg = "Fail to delete product: $product";
            throw new MySqlConnectionException($msg);
        }
    }

}

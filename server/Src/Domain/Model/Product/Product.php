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
 * Defines the Product model from the Northwind Database Schema.
 *
 * @package App\Domain\Model\Product
 */
final class Product extends ProductRecord {

    /**
     * @param ProductAccessor $accessor
     *
     * @return Product
     * @throws Exception if the given product is invalid
     */
    public static function of(ProductAccessor $accessor): Product {
        return new Product(
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

}

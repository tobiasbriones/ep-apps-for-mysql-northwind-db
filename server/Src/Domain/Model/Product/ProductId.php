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
 * Defines the main set of the Product Attributes that identify a Product.
 *
 * @package App\Domain\Model\Product
 */
class ProductId {

    /**
     * @param int $id id to validate
     *
     * @throws Exception if the id is invalid
     */
    private static function validate(int $id): void {
        if ($id < 0) {
            $msg = "Invalid id: $id. The id is a non-negative integer number";
            throw new Exception($msg);
        }
    }

    /**
     * @param int $id id value to build
     *
     * @throws Exception if the id is invalid
     */
    public function __construct(private int $id) {
        ProductId::validate($id);
    }

    public final function id(): int {
        return $this->id;
    }

}

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

namespace App\Data\Common\Product;

use App\Domain\Model\Product\IdProductAttributeSet;
use App\Domain\Model\Product\Product;

/**
 * Defines the Product DAO.
 *
 * @package App\Data\Common\Product
 */
interface ProductDao {

    public function create(Product $product): Product;

    public function fetch(IdProductAttributeSet $id): ?Product;

    public function fetchAll(int $page, int $limit): array;

    public function update(Product $product): void;

    public function delete(Product $product): void;

}

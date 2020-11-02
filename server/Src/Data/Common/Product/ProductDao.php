<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
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

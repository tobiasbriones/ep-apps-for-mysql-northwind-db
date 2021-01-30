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

/**
 * Defines the Product attributes.
 *
 * @package App\Domain\Model\Product
 */
interface ProductAttributeSet extends IdProductAttributeSet {

    public function productCode(): ?string;

    public function supplierIds(): ?string;

    public function productName(): ?string;

    public function description(): ?string;

    public function standardCost(): ?float;

    public function listPrice(): float;

    public function reorderLevel(): ?int;

    public function targetLevel(): ?int;

    public function quantityPerUnit(): ?string;

    public function discontinued(): bool;

    public function minimumReorderQuantity(): ?int;

    public function category(): ?string;

}

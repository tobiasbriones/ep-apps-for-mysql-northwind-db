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
 * Defines the Product Accessor from the Product record.
 *
 * @package App\Domain\Model\Product
 * @see     Product
 */
interface ProductAccessor {

    public function getId(): ?int;

    public function getSupplierIds(): ?string;

    public function getCode(): ?string;

    public function getName(): ?string;

    public function getDescription(): ?string;

    public function getStandardCost(): ?float;

    public function getListPrice(): float;

    public function getReorderLevel(): ?int;

    public function getTargetLevel(): ?int;

    public function getQuantityPerUnit(): ?string;

    public function getDiscontinued(): bool;

    public function getMinimumReorderQuantity(): ?int;

    public function getCategory(): ?string;

}

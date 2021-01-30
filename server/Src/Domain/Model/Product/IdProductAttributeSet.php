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
 * Defines the main set of the Product Attributes that identify a Product.
 *
 * @package App\Domain\Model\Product
 */
interface IdProductAttributeSet {

    public function id(): int;

}

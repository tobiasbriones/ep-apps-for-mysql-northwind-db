<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Domain\Model\Product;

/**
 * Defines the Product attributes.
 *
 * @package App\Domain\Model\Product
 */
interface ProductAttributes extends IdentifiableProductAttributes {

    public function supplierIds(): string;

    public function name(): string;

    public function description(): ?string;

    public function standardCost(): float;

    public function listPrice(): float;

    public function reorderLevel(): int;

    public function targetLevel(): int;

    public function quantityPerUnit(): string;

    public function discontinued(): bool;

    public function minimumReorderQuantity(): int;

    public function category(): string;

}

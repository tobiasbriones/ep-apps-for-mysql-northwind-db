<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Domain\Model\Product;

/**
 * Defines the Product Accessor from the Product model.
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

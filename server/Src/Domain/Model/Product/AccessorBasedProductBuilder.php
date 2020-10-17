<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Database\Relation\Product;

use Exception;

/**
 * Builds a Product record from a ProductAccessor. This builder is reusable.
 *
 * @package App\Domain\Model\Product
 * @see ProductAccessor
 */
class AccessorBasedProductBuilder {

    private ?ProductAccessor $accessor;

    public function __construct() {
        $this->accessor = null;
    }

    public function set(ProductAccessor $accessor): void {
        $this->accessor = $accessor;
    }

    /**
     * @throws Exception if the accessor of this builder is null
     */
    public function build(): ProductRecord {
        if ($this->accessor == null) {
            $msg = "The builder is not set. Accessor is null";
            throw new Exception($msg);
        }
        return new ProductRecord(
            $this->accessor->getSupplierIds(),
            $this->accessor->getCode(),
            $this->accessor->getName(),
            $this->accessor->getDescription(),
            $this->accessor->getStandardCost(),
            $this->accessor->getListPrice(),
            $this->accessor->getReorderLevel(),
            $this->accessor->getTargetLevel(),
            $this->accessor->getQuantityPerUnit(),
            $this->accessor->getDiscontinued(),
            $this->accessor->getMinimumReorderQuantity(),
            $this->accessor->getCategory()
        );
    }

}

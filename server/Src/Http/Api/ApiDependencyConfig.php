<?php
/*
 * Copyright (c) 2021 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Http\Api;

use App\Domain\Repository\Repository;

interface ApiDependencyConfig {

    public function productRepository(): Repository;

}

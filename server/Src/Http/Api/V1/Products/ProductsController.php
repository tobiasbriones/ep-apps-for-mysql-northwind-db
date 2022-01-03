<?php
/*
 * Copyright (c) 2020-2021 Tobias Briones. All rights reserved.
 *
 * SPDX-License-Identifier: MIT
 *
 * This file is part of Example Project: Apps for the MySQL Northwind DB.
 *
 * This source code is licensed under the MIT License found in the
 * LICENSE file in the root directory of this source tree or at
 * https://opensource.org/licenses/MIT.
 */

namespace App\Http\Api\V1\Products;

use App\Domain\Model\Product\ProductId;
use App\Domain\Repository\ProductRepository;
use Exception;
use Psr\Http\Message\ResponseInterface as Response;

final class ProductsController {

    public function __construct(private ProductRepository $repository) {}

    public function getAll(int $page, int $limit, int $serialization, Response $res): Response {
        try {
            $products = $this->repository->getAll($page, $limit);

            if (sizeof($products) === 0) {
                $res->withStatus(404);
                $res->getBody()->write(json_encode(["msg" => "Not found"]));
            }
            else {
                $res->getBody()->write(
                    ProductSerializable::serializeAll($products, $serialization)
                );
            }
        }
        catch (Exception) {
            $res = $res->withStatus(500);
        }
        return $res;
    }

    public function get(ProductId $id, int $serialization, Response $res): Response {
        try {
            $product = $this->repository->get($id->id());

            if ($product === null) {
                $res->withStatus(404);
                $res->getBody()->write(json_encode(["msg" => "Not found"]));
            }
            else {
                $serializable = new ProductSerializable($product);
                $enc = $serializable->serialize($serialization);
                $res->getBody()->write($enc);
            }
        }
        catch (Exception $err) {
            $res = $res->withStatus(500);
            echo $err;
        }
        return $res;
    }

}

<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Domain\Repository;

use Exception;

/**
 * Default repository.
 *
 * @template R
 * @package App\Domain\Repository
 */
interface Repository {

    /**
     * @param int $id id of the record to be fetched
     *
     * @return object
     * @throws Exception if something goes wrong
     */
    public function get(int $id): object;

    /**
     * @param int $page page number
     * @param int $limit limit of results
     *
     * @return array
     * @throws Exception if something goes wrong
     */
    public function getAll(int $page, int $limit): array;

    /**
     * @param mixed $record record to create
     *
     * @throws Exception if something goes wrong
     */
    public function add($record): void;

    /**
     * @param mixed $record record to update
     *
     * @throws Exception if something goes wrong
     */
    public function set($record): void;

    /**
     * @param mixed $record record to delete
     *
     * @throws Exception if something goes wrong
     */
    public function remove($record): void;

}

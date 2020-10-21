<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Config;

use Dotenv\Dotenv;
use Exception;

/**
 * Class responsible for loading the environment variables.
 *
 * @package App\Config
 */
class Env {

    public const DB_HOST_KEY = "DB_HOST_NAME";
    public const DB_NAME_KEY = "DB_NAME";
    public const DB_ROOT_USERNAME_KEY = "DB_ROOT_USERNAME";
    public const DB_ROOT_PASSWORD_KEY = "DB_ROOT_PASSWORD";
    private static bool $isLoaded = false;

    /**
     * Returns the value of the ENV property with the specified key.
     *
     * @param string $key the ENV key property to get
     *
     * @return string the ENV value property from the given key
     * @throws Exception if property wasn't found or the given key is invalid
     */
    public static function get(string $key): string {
        if (!Env::$isLoaded) {
            Dotenv::createImmutable(dirname(__DIR__, 2))->load();
            Env::$isLoaded = true;
        }
        if (!isset($_ENV[$key])) {
            $msg = "Invalid key: $key";
            throw new Exception($msg);
        }
        return $_ENV[$key];
    }

}

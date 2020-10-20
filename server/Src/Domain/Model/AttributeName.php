<?php
/*
 * Copyright (c) 2020 Tobias Briones.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace App\Domain\Model;

use Exception;

/**
 * Defines an attribute name and allows to use it in different formats. The
 * default format is lower snake case and in order to construct an AttributeName
 * the argument passed to the constructor must be lower snake case. Notice that
 * this class is just the idea of what has to be done in an enterprise
 * programming language, the implementation may vary; and doing this in a
 * scripting language like PHP is overkill and unnecessary.
 *
 * @package App\Domain\Model
 */
class AttributeName {

    /**
     * Validates that the given attribute name argument is a lower snake case
     * string.
     *
     * @param string $attributeName the attribute name to validate
     *
     * @throws Exception if the passed attribute name is not a lower snake case
     *                   string
     */
    private static function validateLowerSnakeCaseString(string $attributeName): void {
        $isValid = preg_match("/[a-z]+(_[a-z]+)*/", $attributeName) === 1;

        if (!$isValid) {
            $msg = "Attribute name is invalid: $attributeName. It must be lower snake case";
            throw new Exception($msg);
        }
    }

    public const LOWER_SNAKE_CASE_FORMAT = 0;
    public const PASCAL_CASE_FORMAT = 0;
    public const CAMEL_CASE_FORMAT = 0;
    public const DEFAULT_FORMAT = self::LOWER_SNAKE_CASE_FORMAT;
    private string $attributeName;

    /**
     * Constructs an AttributeName. The attribute name parameter must be in
     * lower snake case, e.g. "parameter_name", otherwise an exception is
     * thrown. Only the argument format is validated, not the semantic, e.g.
     * "parameterna_me" is still a valid snake case string. The attribute name
     * will be accepted <code>if and only if</code> it matches the regular
     * expresion "[a-z]+(_[a-z]+)*".
     *
     * @param string $attributeName the attribute name in snake case
     *
     * @throws Exception if the passed attribute name is not a lower snake case
     *                   string
     */
    public function __construct(string $attributeName) {
        $this->attributeName = $attributeName;

        self::validateLowerSnakeCaseString($attributeName);
    }

    public final function value(): string {
        return $this->attributeName;
    }

    public final function toPascalCase(): string {
        $pascalCaseWithUnderscores = ucwords($this->attributeName, "_");
        return str_replace("_", "", $pascalCaseWithUnderscores);
    }

    public final function toCamelCase(): string {
        return lcfirst($this->toPascalCase());
    }

    public final function toCase(int $case) {
        switch ($case) {
            case self::PASCAL_CASE_FORMAT:
                return $this->toPascalCase();
            case self::CAMEL_CASE_FORMAT:
                return $this->toCamelCase();
            case self::DEFAULT_FORMAT:
            case self::LOWER_SNAKE_CASE_FORMAT:
            default:
                return $this->value();
        }
    }

}

<?php

namespace App\GraphQL\Type;

use GraphQL\Language\AST\Node;
use DateTime;

class DateTimeType
{
    /**
     * @param DateTime $value
     *
     * @return string
     */
    public static function serialize(DateTime $value): string
    {
        return $value->format('Y-m-d H:i:s');
    }

    /**
     * @param string $value
     *
     * @return DateTime
     */
    public static function parseValue(string $value): DateTime
    {
        return new DateTime($value);
    }

    /**
     * @param Node $valueNode
     *
     * @return string
     */
    public static function parseLiteral(Node $valueNode): string
    {
        return new DateTime($valueNode->value);
    }
}
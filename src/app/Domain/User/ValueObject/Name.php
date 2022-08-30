<?php

declare(strict_types=1);

namespace App\Domain\User\ValueObject;

use App\Domain\ValueObjects\Type\StringAbstract;
use App\Exceptions\GraphQL\ValueObjectException;

/**
 * 氏名
 */
final class Name extends StringAbstract
{
    public const VARIABLE_NAME = '氏名';

    /** 最大文字数 */
    public const MAX = 50;

    /**  最小文字数 */
    public const MIN = 1;

    /**
     * @param string $value
     */
    public function __construct(
        private string $value
    ) {
        $this->validate(self::VARIABLE_NAME, $value);

        $this->value = $value;
    }

    /**
     * @return string
     */
    public function value(): string
    {
        return $this->value;
    }
}

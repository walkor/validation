<?php

/*
 * Copyright (c) Alexandre Gomes Gaigalas <alganet@gmail.com>
 * SPDX-License-Identifier: MIT
 */

declare(strict_types=1);

namespace Respect\Validation\Exceptions;

use Respect\Validation\Rules\CreditCard;

/**
 * @author Henrique Moody <henriquemoody@gmail.com>
 * @author Jean Pimentel <jeanfap@gmail.com>
 * @author William Espindola <oi@williamespindola.com.br>
 */
final class CreditCardException extends ValidationException
{
    public const BRANDED = 'branded';

    /**
     * {@inheritDoc}
     */
    protected $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => '{{name}} 必须是有效的信用卡号',
            self::BRANDED => '{{name}} 必须是有效的 {{brand}} 信用卡号',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => '{{name}} 不能是有效的信用卡号',
            self::BRANDED => '{{name}} 不能是有效的 {{brand}} 信用卡号',
        ],
    ];

    /**
     * {@inheritDoc}
     */
    protected function chooseTemplate(): string
    {
        if ($this->getParam('brand') === CreditCard::ANY) {
            return self::STANDARD;
        }

        return self::BRANDED;
    }
}

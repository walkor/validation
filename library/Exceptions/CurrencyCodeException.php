<?php

/*
 * Copyright (c) Alexandre Gomes Gaigalas <alganet@gmail.com>
 * SPDX-License-Identifier: MIT
 */

declare(strict_types=1);

namespace Respect\Validation\Exceptions;

/**
 * @author Henrique Moody <henriquemoody@gmail.com>
 * @author Justin Hook <justinhook88@yahoo.co.uk>
 * @author William Espindola <oi@williamespindola.com.br>
 */
final class CurrencyCodeException extends ValidationException
{
    /**
     * {@inheritDoc}
     */
    protected $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => '{{name}} 必须是有效的货币',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => '{{name}} 不能是有效的货币',
        ],
    ];
}

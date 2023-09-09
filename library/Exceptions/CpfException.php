<?php

/*
 * Copyright (c) Alexandre Gomes Gaigalas <alganet@gmail.com>
 * SPDX-License-Identifier: MIT
 */

declare(strict_types=1);

namespace Respect\Validation\Exceptions;

/**
 * @author Henrique Moody <henriquemoody@gmail.com>
 * @author Jair Henrique <jair.henrique@gmail.com>
 * @author William Espindola <oi@williamespindola.com.br>
 */
final class CpfException extends ValidationException
{
    /**
     * {@inheritDoc}
     */
    protected $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => '{{name}} 必须是有效的CPF编号',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => '{{name}} 不能是有效的CPF编号',
        ],
    ];
}

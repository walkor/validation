<?php

/*
 * Copyright (c) Alexandre Gomes Gaigalas <alganet@gmail.com>
 * SPDX-License-Identifier: MIT
 */

declare(strict_types=1);

namespace Respect\Validation\Exceptions;

/**
 * @author Henrique Moody <henriquemoody@gmail.com>
 * @author Jens Segers <segers.jens@gmail.com>
 * @author William Espindola <oi@williamespindola.com.br>
 */
final class Base64Exception extends ValidationException
{
    /**
     * {@inheritDoc}
     */
    protected $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => '{{name}} 必须采用Base64编码',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => '{{name}} 不能是Base64编码',
        ],
    ];
}

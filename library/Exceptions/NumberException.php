<?php

/*
 * Copyright (c) Alexandre Gomes Gaigalas <alganet@gmail.com>
 * SPDX-License-Identifier: MIT
 */

declare(strict_types=1);

namespace Respect\Validation\Exceptions;

/**
 * @author Henrique Moody <henriquemoody@gmail.com>
 * @author Ismael Elias <ismael.esq@hotmail.com>
 * @author Vitaliy <reboot.m@gmail.com>
 */
final class NumberException extends ValidationException
{
    /**
     * {@inheritDoc}
     */
    protected $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => '{{name}} 必须是数字',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => '{{name}} 不能为数字',
        ],
    ];
}

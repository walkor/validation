<?php

/*
 * Copyright (c) Alexandre Gomes Gaigalas <alganet@gmail.com>
 * SPDX-License-Identifier: MIT
 */

declare(strict_types=1);

namespace Respect\Validation\Exceptions;

/**
 * Exception class for CallableType rule.
 *
 * @author Henrique Moody <henriquemoody@gmail.com>
 */
final class CallableTypeException extends ValidationException
{
    /**
     * {@inheritDoc}
     */
    protected $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => '{{name}} 必须是可调用的',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => '{{name}} 不能是可调用的',
        ],
    ];
}

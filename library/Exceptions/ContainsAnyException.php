<?php

/*
 * Copyright (c) Alexandre Gomes Gaigalas <alganet@gmail.com>
 * SPDX-License-Identifier: MIT
 */

declare(strict_types=1);

namespace Respect\Validation\Exceptions;

/**
 * @author Kirill Dlussky <kirill@dlussky.ru>
 */
final class ContainsAnyException extends ValidationException
{
    /**
     * {@inheritDoc}
     */
    protected $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => '{{name}} 必须包含至少一个值 {{needles}}',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => '{{name}} 不能包含任何值 {{needles}}',
        ],
    ];
}

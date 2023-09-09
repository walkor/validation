<?php

/*
 * Copyright (c) Alexandre Gomes Gaigalas <alganet@gmail.com>
 * SPDX-License-Identifier: MIT
 */

declare(strict_types=1);

namespace Respect\Validation\Exceptions;

/**
 * @author Alexandre Gomes Gaigalas <alganet@gmail.com>
 * @author Henrique Moody <henriquemoody@gmail.com>
 */
final class AlphaException extends FilteredValidationException
{
    /**
     * {@inheritDoc}
     */
    protected $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => '{{name}} 只能包含字母（a-z）',
            self::EXTRA => '{{name}} 只能包含字母（a-z）和 {{additionalChars}}',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => '{{name}} 不能包含字母（a-z）',
            self::EXTRA => '{{name}} 不能包含字母（a-z）或 {{additionalChars}}',
        ],
    ];
}

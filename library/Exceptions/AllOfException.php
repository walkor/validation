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
class AllOfException extends GroupedValidationException
{
    /**
     * {@inheritDoc}
     */
    protected $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::NONE => '{{name}} 必需符合以下规则',
            self::SOME => '{{name}} 必需符合以下规则',
        ],
        self::MODE_NEGATIVE => [
            self::NONE => '{{name}} 不能符合以下规则',
            self::SOME => '{{name}} 不能符合以下规则',
        ],
    ];
}

<?php

/*
 * Copyright (c) Alexandre Gomes Gaigalas <alganet@gmail.com>
 * SPDX-License-Identifier: MIT
 */

declare(strict_types=1);

namespace Respect\Validation\Exceptions;

/**
 * @author Henrique Moody <henriquemoody@gmail.com>
 * @author Singwai Chan <singwai.chan@live.com>
 */
final class SubsetException extends ValidationException
{
    /**
     * {@inheritDoc}
     */
    protected $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => '{{name}} 必须是 {{superset}} 的子集',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => '{{name}} 不能是 {{superset}} 的子集',
        ],
    ];
}

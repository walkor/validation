<?php

/*
 * Copyright (c) Alexandre Gomes Gaigalas <alganet@gmail.com>
 * SPDX-License-Identifier: MIT
 */

declare(strict_types=1);

namespace Respect\Validation\Exceptions;

/**
 * @author Henrique Moody <henriquemoody@gmail.com>
 */
class SubdivisionCodeException extends ValidationException
{
    /**
     * {@inheritDoc}
     */
    protected $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => '{{name}} 必须是 {{countryName}} 的细分代码',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => '{{name}} 不能是 {{countryName}} 的细分代码',
        ],
    ];
}

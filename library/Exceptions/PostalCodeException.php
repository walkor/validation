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
final class PostalCodeException extends ValidationException
{
    /**
     * {@inheritDoc}
     */
    protected $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => '{{name}} 必须是 {{countryCode}} 上的有效邮政编码',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => '{{name}} 不能是 {{countryCode}} 上的有效邮政编码',
        ],
    ];
}

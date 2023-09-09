<?php

/*
 * Copyright (c) Alexandre Gomes Gaigalas <alganet@gmail.com>
 * SPDX-License-Identifier: MIT
 */

declare(strict_types=1);

namespace Respect\Validation\Exceptions;

/**
 * @author Davide Pastore <pasdavide@gmail.com>
 * @author Henrique Moody <henriquemoody@gmail.com>
 */
final class HexRgbColorException extends ValidationException
{
    /**
     * {@inheritDoc}
     */
    protected $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => '{{name}} 必须是十六进制RGB颜色',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => '{{name}} 不能是十六进制RGB颜色',
        ],
    ];
}

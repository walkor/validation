<?php

/*
 * Copyright (c) Alexandre Gomes Gaigalas <alganet@gmail.com>
 * SPDX-License-Identifier: MIT
 */

declare(strict_types=1);

namespace Respect\Validation\Exceptions;

/**
 * @author Henrique Moody <henriquemoody@gmail.com>
 * @author Tomasz Regdos <tomek@regdos.com>
 */
final class NipException extends ValidationException
{
    /**
     * {@inheritDoc}
     */
    protected $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => '{{name}} 必须是有效的波兰增值税标识号',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => '{{name}} 不能是有效的波兰增值税标识号',
        ],
    ];
}

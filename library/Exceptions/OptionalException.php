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
final class OptionalException extends ValidationException
{
    public const NAMED = 'named';

    /**
     * {@inheritDoc}
     */
    protected $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => '该值必须是可选的',
            self::NAMED => '{{name}} 必须是可选的',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => '该值不能是可选的',
            self::NAMED => '{{name}} 不能是可选的',
        ],
    ];

    protected function chooseTemplate(): string
    {
        return $this->getParam('name') ? self::NAMED : self::STANDARD;
    }
}

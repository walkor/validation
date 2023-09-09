<?php

/*
 * Copyright (c) Alexandre Gomes Gaigalas <alganet@gmail.com>
 * SPDX-License-Identifier: MIT
 */

declare(strict_types=1);

namespace Respect\Validation\Exceptions;

/**
 * @author Alexandre Gomes Gaigalas <alganet@gmail.com>
 * @author Bram Van der Sype <bram.vandersype@gmail.com>
 * @author Henrique Moody <henriquemoody@gmail.com>
 */
final class NotEmptyException extends ValidationException
{
    public const NAMED = 'named';

    /**
     * {@inheritDoc}
     */
    protected $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => '值不能为空',
            self::NAMED => '{{name}} 不能为空',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => '值必须为空',
            self::NAMED => '{{name}} 必须为空',
        ],
    ];

    /**
     * {@inheritDoc}
     */
    protected function chooseTemplate(): string
    {
        if ($this->getParam('input') || $this->getParam('name')) {
            return self::NAMED;
        }

        return self::STANDARD;
    }
}

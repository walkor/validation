<?php

/*
 * Copyright (c) Alexandre Gomes Gaigalas <alganet@gmail.com>
 * SPDX-License-Identifier: MIT
 */

declare(strict_types=1);

namespace Respect\Validation\Exceptions;

/**
 * @author Alexandre Gomes Gaigalas <alganet@gmail.com>
 * @author Danilo Benevides <danilobenevides01@gmail.com>
 * @author Henrique Moody <henriquemoody@gmail.com>
 * @author Luís Otávio Cobucci Oblonczyk <lcobucci@gmail.com>
 */
final class IpException extends ValidationException
{
    public const NETWORK_RANGE = 'network_range';

    /**
     * {@inheritDoc}
     */
    protected $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => '{{name}} 必须是IP地址',
            self::NETWORK_RANGE => '{{name}} 必须是 {{range}} 范围内的IP地址',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => '{{name}} 不能是IP地址',
            self::NETWORK_RANGE => '{{name}} 不能是 {{range}} 范围内的IP地址',
        ],
    ];

    /**
     * {@inheritDoc}
     */
    protected function chooseTemplate(): string
    {
        if (!$this->getParam('range')) {
            return self::STANDARD;
        }

        return self::NETWORK_RANGE;
    }
}

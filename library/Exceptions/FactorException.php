<?php

/*
 * Copyright (c) Alexandre Gomes Gaigalas <alganet@gmail.com>
 * SPDX-License-Identifier: MIT
 */

declare(strict_types=1);

namespace Respect\Validation\Exceptions;

/**
 * @author Danilo Correa <danilosilva87@gmail.com>
 * @author David Meister <thedavidmeister@gmail.com>
 * @author Henrique Moody <henriquemoody@gmail.com>
 */
final class FactorException extends ValidationException
{
    /**
     * {@inheritDoc}
     */
    protected $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => '{{name}} 必须是 {{dividend}} 的因子',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => '{{name}} 不能是 {{dividend}} 的因子',
        ],
    ];
}

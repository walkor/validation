<?php

/*
 * Copyright (c) Alexandre Gomes Gaigalas <alganet@gmail.com>
 * SPDX-License-Identifier: MIT
 */

declare(strict_types=1);

namespace Respect\Validation\Exceptions;

use function count;

/**
 * @author Henrique Moody <henriquemoody@gmail.com>
 */
final class KeySetException extends GroupedValidationException implements NonOmissibleException
{
    public const STRUCTURE = 'structure';
    public const STRUCTURE_EXTRA = 'structure_extra';

    /**
     * {@inheritDoc}
     */
    protected $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::NONE => '所有必需的规则都必须传递给 {{name}}',
            self::SOME => '这些规则必须传递给 {{name}}',
            self::STRUCTURE => '必须有键 {{keys}}',

            self::STRUCTURE_EXTRA => '不能有键 {{keys}}',
        ],
    ];

    /**
     * {@inheritDoc}
     */
    protected function chooseTemplate(): string
    {
        if (count($this->getParam('extraKeys'))) {
            return self::STRUCTURE_EXTRA;
        }

        if (count($this->getChildren()) === 0) {
            return self::STRUCTURE;
        }

        return parent::chooseTemplate();
    }
}

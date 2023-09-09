<?php

/*
 * Copyright (c) Alexandre Gomes Gaigalas <alganet@gmail.com>
 * SPDX-License-Identifier: MIT
 */

declare(strict_types=1);

namespace Respect\Validation\Exceptions;

use Respect\Validation\Rules\Sorted;

/**
 * @author Henrique Moody <henriquemoody@gmail.com>
 * @author Mikhail Vyrtsev <reeywhaar@gmail.com>
 */
final class SortedException extends ValidationException
{
    public const ASCENDING = 'ascending';
    public const DESCENDING = 'descending';

    /**
     * {@inheritDoc}
     */
    protected $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::ASCENDING => '{{name}} 必须按升序排序',
            self::DESCENDING => '{{name}} 必须按降序排序',
        ],
        self::MODE_NEGATIVE => [
            self::ASCENDING => '{{name}} 不能按升序排序',
            self::DESCENDING => '{{name}} 不能按降序排序',
        ],
    ];

    /**
     * {@inheritDoc}
     */
    protected function chooseTemplate(): string
    {
        return $this->getParam('direction') === Sorted::ASCENDING ? self::ASCENDING : self::DESCENDING;
    }
}

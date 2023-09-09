<?php

/*
 * Copyright (c) Alexandre Gomes Gaigalas <alganet@gmail.com>
 * SPDX-License-Identifier: MIT
 */

declare(strict_types=1);

namespace Respect\Validation\Exceptions;

/**
 * @author Danilo Correa <danilosilva87@gmail.com>
 * @author Henrique Moody <henriquemoody@gmail.com>
 * @author Ricardo Gobbo <ricardo@clicknow.com.br>
 */
final class VideoUrlException extends ValidationException
{
    public const SERVICE = 'service';

    /**
     * {@inheritDoc}
     */
    protected $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => '{{name}} 必须是有效的视频URL',
            self::SERVICE => '{{name}} 必须是有效的 {{service}} 视频URL',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => '{{name}} 不能是有效的视频URL',
            self::SERVICE => '{{name}} 不能是有效的 {{service}} 视频URL',
        ],
    ];

    /**
     * {@inheritDoc}
     */
    protected function chooseTemplate(): string
    {
        if ($this->getParam('service')) {
            return self::SERVICE;
        }

        return self::STANDARD;
    }
}

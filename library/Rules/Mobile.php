<?php

declare(strict_types=1);

namespace Respect\Validation\Rules;

use libphonenumber\NumberParseException;

use function is_scalar;

final class Mobile extends AbstractRule
{

    /**
     * {@inheritDoc}
     */
    public function validate($input): bool
    {
        if (!is_scalar($input)) {
            return false;
        }

        try {
            // 此处使用简单的正则表达式检查中国大陆的手机号码格式
            return preg_match('/^1[3456789]\d{9}$/', (string) $input) === 1;
        } catch (NumberParseException $e) {
            return false;
        }
    }
}

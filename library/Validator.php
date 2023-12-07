<?php

/*
 * Copyright (c) Alexandre Gomes Gaigalas <alganet@gmail.com>
 * SPDX-License-Identifier: MIT
 */

declare(strict_types=1);

namespace Respect\Validation;

use Respect\Validation\Exceptions\ComponentException;
use Respect\Validation\Exceptions\ValidationException;
use Respect\Validation\Rules\AllOf;

use function count;

/**
 * @mixin StaticValidator
 *
 * @author Alexandre Gomes Gaigalas <alganet@gmail.com>
 * @author Henrique Moody <henriquemoody@gmail.com>
 */
final class Validator extends AllOf
{
    /**
     * Create instance validator.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * {@inheritDoc}
     */
    public function check($input): void
    {
        try {
            parent::check($input);
        } catch (ValidationException $exception) {
            if (count($this->getRules()) == 1 && $this->template) {
                $exception->updateTemplate($this->template);
            }

            throw $exception;
        }
    }

    /**
     * Creates a new Validator instance with a rule that was called on the static method.
     *
     * @param mixed[] $arguments
     *
     * @throws ComponentException
     */
    public static function __callStatic(string $ruleName, array $arguments): self
    {
        return self::create()->__call($ruleName, $arguments);
    }

    /**
     * Create a new rule by the name of the method and adds the rule to the chain.
     *
     * @param mixed[] $arguments
     *
     * @throws ComponentException
     */
    public function __call(string $ruleName, array $arguments): self
    {
        $this->addRule(Factory::getDefaultInstance()->rule($ruleName, $arguments));

        return $this;
    }


    /**
     * 按照规则检查输入，如果不符合规则则抛出异常
     *
     * @param array $input
     * @param array $rules
     * @return array
     */
    public static function input(array $input, array $rules)
    {
        $values = [];
        foreach ($rules as $field => $rule) {
            if(is_array($rule) || !($rule instanceof \Respect\Validation\Validator)){
                $values[$field] = $rule;
            }else{
                $value = $rule->defaultType?$rule->default:($input[$field] ?? $rule->default);
                $rule->check($value);
                $values[$field] = $value;
            }
        }
        return $values;
    }

}

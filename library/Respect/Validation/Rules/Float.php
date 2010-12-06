<?php

namespace Respect\Validation\Rules;

use Respect\Validation\Rules\AbstractRule;
use Respect\Validation\Exceptions\FloatException;

class Float extends AbstractRule
{

    public function validate($input)
    {
        return filter_var($input, FILTER_VALIDATE_FLOAT);
    }

}
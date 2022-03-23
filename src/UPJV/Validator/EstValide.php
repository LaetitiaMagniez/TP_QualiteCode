<?php

namespace UPJV\Validator;

class EstValide implements ValidatorInterface
{
    public function build(array $param): object
    {
        return $this;
    }

    public function check($input): bool
    {
        return true;
    }
}

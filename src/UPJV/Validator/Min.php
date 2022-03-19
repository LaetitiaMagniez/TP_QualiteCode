<?php

namespace UPJV\Validator;

class Min implements ValidatorInterface
{
    protected int $size;

    public function build(array $param): object
    {
        $this->size = $param[0];
        return $this;
    }

    public function check($input): bool
    {
        return ( strlen($input) >= $this->size );
    }
}

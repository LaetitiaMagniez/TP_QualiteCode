<?php

namespace UPJV\Validator;

interface ValidatorInterface
{
    public function build( array $param ) :object;
    public function check( $input ) :bool;
}

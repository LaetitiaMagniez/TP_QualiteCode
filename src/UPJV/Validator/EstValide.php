<?php

/**
 * Implementation de la contrainte vérifiant que le formulaire est valide
 *
 * @license GNU Public Licence V3
 */

namespace UPJV\Validator;

/**
*
* classe EstValide
*/
class EstValide implements ValidatorInterface
{
/**
* function build
*/
    public function build(array $param): object
    {
        return $this;
    }

/**
*
* function check
*/
    public function check($input): bool
    {
        return true;
    }
}

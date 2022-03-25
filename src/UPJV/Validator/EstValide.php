<?php
/**
 * Implementation de la contrainte vérifiant que le formulaire est valide
 *
 * @license GNU Public Licence V3
 */

namespace UPJV\Validator;
/**
 * Class estValide
 */
class EstValide implements ValidatorInterface
{
/**
 * Function build
 *
 * @param array $param
 *
 * @return object
 */
    public function build(array $param): object // build
    {
        return $this;
    }

/**
 * Function check
 *
 * @param $input
 *
 * @return bool
 */
    public function check($input): bool //check
    {
        return true;
    }
}

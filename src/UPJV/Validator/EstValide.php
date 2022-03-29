<?php

/**
 * Implementation de la contrainte vérifiant que le formulaire est valide
 *
 * @license GNU Public Licence V3
 */

namespace UPJV\Validator;

/**
 * EstValide retourne toujours vrai
 */
class EstValide implements ValidatorInterface
{
    /**
     * Ne fait rien
     *
     * @param array $param
     *
     * @return object
     */
    public function build(array $param): object
    {
        return $this;
    }

    /**
     * Renvoie toujours true c'est pour la balise hidden contrainte
     *
     * @param mixed $input
     *
     * @return object
     */
    public function check($input): bool
    {
        return true;
    }
}

<?php

/**
 * Vérifie que la taille de la chaine comporte au maximum 50 caractères
 */

namespace UPJV\Validator;

/**
 * Class LongueurMax implémente les méthode build & check
 */
class LongueurMax implements ValidatorInterface
{
    protected int $size;

    /**
     * Récupère la taille maximum spécifié dans la conf
     *
     * @param array $param
     *
     * @return object
     */
    public function build(array $param): object
    {
        $this->size = $param[0];

        return $this;
    }

    /**
     * Test la longueur de la chaine de caractères
     *
     * @param $input
     *
     * @return bool
     */
    public function check($input): bool
    {
        return (strlen($input) <= $this->size);
    }
}

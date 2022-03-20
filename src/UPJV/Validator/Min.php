<?php

/**
 * Vérifie que la taille de la chaine comporte au moins 2 caractères
 */

namespace UPJV\Validator;

/**
 * Class Min implémente les méthode build & check
 */
class Min implements ValidatorInterface
{
    protected int $size;

    /**
     * Récupère la taille minimum spécifier dans la conf
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
        return (strlen($input) >= $this->size);
    }
}

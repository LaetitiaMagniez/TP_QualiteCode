<?php

/**
 * Vérifie que la valeur saisie est bien supérieur au minimum spécifié
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
     * Test la valeur
     *
     * @param $input
     *
     * @return bool
     */
    public function check($input): bool
    {
        return ($input >= $this->size);
    }
}

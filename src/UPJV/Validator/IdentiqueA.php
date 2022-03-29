<?php

/**
 * Vérifie que la chaine de caractère est égale à celle définie
 */

namespace UPJV\Validator;

/**
 * Class Value implémente les méthode build & check
 */
class IdentiqueA implements ValidatorInterface
{
    protected string $valeur;

    /**
     * Récupère la valeur définie dans le .json
     *
     * @param array $param
     *
     * @return object
     */
    public function build(array $param): object
    {
        $this->valeur = $param[0];

        return $this;
    }

    /**
     * Test la chaine de caractère définie
     *
     * @param $input
     *
     * @return bool
     */
    public function check($input): bool
    {
        return ($input === $this->valeur);
    }
}

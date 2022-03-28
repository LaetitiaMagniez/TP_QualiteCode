<?php

/**
 * Implementation de la contrainte vérifiant que le fichier attaché est une image
 *
 * @license GNU Public Licence V3
 */

namespace UPJV\Validator;

/**
 * EstUneImage vérifie si l'objet est une image
 */
class EstUneImage implements ValidatorInterface
{
/**
 * Function build récupère l'objet
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
 * Function check vérifie qu'il s'agit d'une image sinon renvoie false
 *
 * @param $input
 *
 * @return bool
 */
    public function check($input): bool //check
    {
        if ($SESSION[pièce_jointe] == img)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

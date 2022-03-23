<?php

/**
 * Moteur de chargement des validateurs.
 */

namespace UPJV\Validator;

/**
 * Gére une liste de validateurs.
 * Un objet ValidatorEngine est capable de vérifier une donnée
 * à partir de sa liste. La validation est déclenchée par l'envoi
 * du message run( data ) et return si la donnée est valide ou non.
 */
class ValidatorEngine
{
    protected array $setOfValidator;

    /**
     * Charge les validateurs décrit dans le fichier JSON passé en argument.
     *
     * @param $json
     */
    public function __construct($json)
    {
        $json = json_decode($json, true);
        foreach ($json as $name => $contraintes) {
            foreach ($contraintes as $class => $param) {
                include_once __DIR__ . "/ValidatorInterface.php";
                include_once __DIR__ . "/$class.php";
                $className = '\UPJV\Validator\\' . $class;
                /**
                 * Pour l'autocompletion dans PHPStorm
                 *
                 * @var ValidatorInterface $validator
                 */
                $validator = new $className();
                $this->setOfValidator[$name][] = $validator->build($param);
            }
        }
    }

    /**
     * Déclanche la validation d'un ensemble de donnée $inputs
     * Exemple $engine->run($_POST); vérifie toutes les données du formulaire
     *
     * @param array $inputs
     *
     * @return bool
     */
    public function run(array $inputs): bool
    {
        foreach ($inputs as $name => $val) {
            if (!array_key_exists($name, $this->setOfValidator)) {
                return false;
            }
            foreach ($this->setOfValidator[$name] as $validator) {
                if (!$validator->check($val)) {
                    return false;
                }
            }
        }

        return true;
    }
}

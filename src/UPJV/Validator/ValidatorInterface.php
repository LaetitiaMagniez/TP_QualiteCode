<?php

/**
 * PHP version 8.0.1
 * Déclaration des savoirs faire pour chaque validator.
 *
 * @category Bibliotheque
 *
 * @package Validator
 *
 * @author Harold <harold.trannois@u-picardie.fr>
 *
 * @license gnu https://www.gnu.org/licenses/gpl-3.0.html
 *
 * @link https://pedag.u-picardie.fr/moodle/upjv/course/view.php?id=308#section-0
 */

namespace UPJV\Validator;

/**
 * Tous validateurs doient être capable de construire sa contrainte
 * à partir des paramêtres qui lui sont passés et doient être
 * capable d'effectuer la vérification de la contrainte.
 */
interface ValidatorInterface
{
    /**
     * Cette methode est appelée lors de la lecture du fichier json de contraintes.
     *
     * @param array $param // Liste des contraintes
     *
     * @return object
     */
    public function build(array $param): object;

    /**
     * Le processus de validation appel tour à tour cette méthode
     * pour effectuer la validation des données.
     *
     * @param $input // La donnée à valider
     *
     * @return bool
     */
    public function check($input): bool;
}

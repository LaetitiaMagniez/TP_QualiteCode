<?php

/**
 * On n'utilise pas les autoloads car pas vu en cours,
 * la défintion des classes est chargée à l'ancienne
 * avec un require.
 */

require_once __DIR__ . '/../src/UPJV/Validator/ValidatorEngine.php';

/**
 * Le nom du fichier de contraintes à utiliser pour valider
 * le formulaire est dans le formulaire surtout ne fait pas
 * ça en production, ce n'est pas à l'utilisateur de dire
 * comment valider ses données c'est juste pour avoir un fichier
 * d'exemple de traitement générique
 */
$pathConf = __DIR__ . '/../conf/' . $_POST['contrainte'] . '.json';
$json = file_get_contents($pathConf);

$validEngine = new \UPJV\Validator\ValidatorEngine($json);
$result = $validEngine->run($_POST);

echo 'Formulaire ' . ($result ? 'Valide' : 'Invalide');

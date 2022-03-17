<?php
require_once __DIR__.'/../src/UPJV/Validator/ValidatorEngine.php';

$path_conf = __DIR__.'/../src/conf/prenom.json';
$json = file_get_contents( $path_conf );
$validEngine = new \UPJV\Validator\ValidatorEngine( $json );
$result = $validEngine->run( $_POST );

echo 'Formulaire '. ( $result ? 'Valide' : 'Invalide');


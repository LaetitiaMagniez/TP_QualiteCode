## Validateur de formulaire
*Ceci est un exercice ne pas utiliser en production !*  

Pour la contrainte que vous dévez implémenter vous devez rendre 3 fichiers : 
{ la classe, le formulaire d'exemple, le fichier de contrainte 
allant avec l'exemple }.  

    |
    |_ conf
    |   |_ conf-exemple.json
    |_ public
    |   |_ exemple
    |   |   |_ form_exemple.html
    |   |_ ...
    |_src
    |   |_ UPJV
    |   |   |_ Validator
    |   |   |   |_ votre-contrainte.php
    
Votre code doit passer le test qc.yml pour pouvoir être pusher

Pour tester, publier le repertoire public avec un serveur web. Exemple avec 
le serveur interne à php

    php -S 0.0.0.0:8000 -t public
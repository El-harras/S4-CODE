<?php
$options = [
    [
        'choise' => 'Budget',
        'icon' => 'cash-outline',
        'type' => 'Budget' ,
        'travail' => 'Revenu, dépenses du mois et abonnements. Le reste à dépenser se met à jour à chaque saisie.'
    ],

    [
        'choise' => 'Maison',
        'icon' => 'home-outline',
        'type' => 'Maison' ,
        'travail' => 'Courses, objets à acheter et réparations, avec une archive pour ce qui est terminé.'
    ],

    [
        'choise' => 'Vehicule',
        'icon' => 'car-sport-outline',
        'type' => 'Vehicule' ,
        'travail' => 'Kilométrage, entretiens à venir, assurance et vignette, avec une alerte avant l échéance.'
    ],

    [
        'choise' => 'Sante',
        'icon' => 'fitness-outlinee',
        'type' => 'Sante' ,
        'travail' => 'Médicaments et rappels, maladies suivies, médecins et hôpitaux à portée de main.'
    ],

    [
        'choise' => 'Taches',
        'icon' => 'checkbox-outline',
        'type' => 'Taches' ,
        'travail' => 'Rendez-vous, Taches, routine quotidienne et notes rapides dans une seule page.'
    ]
];

$etapes = [
    [
        'option' => 'Créez votre compte',
        'action' => 'Prénom, e-mail et mot de passe. Un code reçu par e-mail confirme ladresse.'
    ],

    [
        'option' => 'Choisissez vos modules',
        'action' => 'Budget, maison, Vehicule, Sante. Vous pouvez en changer quand vous voulez.'
    ],

    [
        'option' => 'Ouvrez votre journée',
        'action' => 'L accueil rassemble les priorités et un résumé de chaque module actif.'
    ],
];

require 'page-presentation.php';
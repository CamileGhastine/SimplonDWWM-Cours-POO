<?php

/**
 * Exercice 5
 */

// Créer l'objet $rectangle en entrant en paramètre les données du formulaire.

$rectangle = new Rectangle($_POST['length'], $_POST['width']);

// $Shakespeare doit pouvoir prendre 2 valeurs : "est" ou "n'est pas"
$Shakespeare = $rectangle->is_square() ? 'est' : 'n\'est pas';

// $area représente l'air du carré.
$area= $rectangle->area();

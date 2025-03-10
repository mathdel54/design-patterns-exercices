<?php

use App\litteralBuilder;
use App\MySQLQueryBuilder;
require('../vendor/autoload.php');


# TODO: Creer un QueryBuilder
# Ecrire une requête en chainant des methodes
# Afficher la requête

$build = (new MySQLQueryBuilder())
            ->select('gouda')
            ->select('chevre')
            ->select('bleu')
            ->from('fromages')
            ->where('type', '=', 'puants')
            ->where('prix', '<=', '4.99')
            ->build();
echo $build . "<br>";

$build = (new litteralBuilder())
    ->select('gouda')
    ->select('chevre')
    ->select('bleu')
    ->from('fromages')
    ->where('type', '=', 'puants')
    ->where('prix', '<=', '4.99')
    ->build();
echo $build;
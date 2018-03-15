<?php

require "Personnage.php";

$merlin = new Personnage("Merlin");

var_dump($merlin->crier());

$merlin->regenerer(5);

$harry = new Personnage("Harry");


$merlin->attaque($harry);

var_dump($merlin->getNom());
var_dump($merlin->getAtk());
var_dump ($harry);

if($harry->mort())
{
    echo 'Harry est mort :(';
}
else
{
    echo 'Harry a survécu :)' . $harry->vie;
}



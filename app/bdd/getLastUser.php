<?php
/**
 * Created by PhpStorm.
 * User: lgregoire
 * Date: 19/04/18
 * Time: 22:34
 */
function getLastUser($bdd) {
    $reponse = $bdd->query("SELECT * FROM usr");

    while ($donnees = $reponse->fetch())
    {
        $username = $donnees['Login'];
    }
    return $username;
}
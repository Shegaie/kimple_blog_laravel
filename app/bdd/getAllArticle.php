<?php
/**
 * Created by PhpStorm.
 * User: lgregoire
 * Date: 20/04/18
 * Time: 03:10
 */

function getAllArticle($bdd)
{
    return ($reponse = $bdd->query("SELECT * FROM article"));
}
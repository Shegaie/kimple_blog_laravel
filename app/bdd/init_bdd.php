<?php

function init_bdd_f()
{
    try {
        if (!isset($bdd)) {
            $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'lgregoire', '');
            $bdd->exec('CREATE TABLE `test`.`usr` ( `ID` INT(10) NOT NULL AUTO_INCREMENT , `Login` VARCHAR(255) NOT NULL , `Password` VARCHAR(255) NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;');
            $bdd->exec('CREATE TABLE `test`.`article` ( `autor` VARCHAR(255) NOT NULL , `subject` VARCHAR(255) NOT NULL , `content` VARCHAR(1000) NOT NULL ) ENGINE = InnoDB;');
        }
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    return $bdd;
}
<?php
/**
 * Created by PhpStorm.
 * User: lgregoire
 * Date: 20/04/18
 * Time: 04:09
 */
include ("/opt/lampp/htdocs/kimple_blog/app/bdd/init_bdd.php");
$bdd = init_bdd_f() ;

$bdd->exec("INSERT INTO article(`autor`, `subject`, `content`) VALUES('".$_POST['autor']."','".$_POST['subject']."','".$_POST['content']."')");
header('Location: ../../public/profil');

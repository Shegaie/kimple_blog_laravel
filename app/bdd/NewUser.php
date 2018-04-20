<?php
/**
 * Created by PhpStorm.
 * User: lgregoire
 * Date: 19/04/18
 * Time: 21:37
 */
include ("/opt/lampp/htdocs/kimple_blog/app/bdd/init_bdd.php");

$bdd = init_bdd_f();
$bdd->exec("INSERT INTO usr(ID, Login, Password) VALUES(null , '".$_POST['login']."','".$_POST['pass']."')");
header('Location: ../../public/accountCreated');
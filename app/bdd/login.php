<?php
/**
 * Created by PhpStorm.
 * User: lgregoire
 * Date: 20/04/18
 * Time: 00:08
 */

include ("/opt/lampp/htdocs/kimple_blog/app/bdd/init_bdd.php");

$bdd = init_bdd_f();
$reponse = $bdd->query("SELECT * FROM usr");
$is_co = 0;

while ($donnees = $reponse->fetch())
{
    $actualUser = $donnees['Login'];
    if (strcmp($actualUser, $_POST['login']) == 0 and strcmp($donnees['Password'], $_POST['pass']) == 0) {
        $is_co = 1;
        header('Location: ../../public/profil');
    }
}
if ($is_co == 0) {
    header('Location: ../../public/failedLogin');
}

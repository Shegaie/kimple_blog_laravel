<?php

namespace App\Http\Controllers;

class pages_controller extends Controller {
    public function getIndex() {
        include ("/opt/lampp/htdocs/kimple_blog/app/bdd/init_bdd.php");
        return view('Pages/menu');
    }
    public function getAccount() {
        include ("/opt/lampp/htdocs/kimple_blog/app/bdd/init_bdd.php");
        include ("/opt/lampp/htdocs/kimple_blog/app/bdd/getLastUser.php");
        $bdd = init_bdd_f();
        $username = getLastUser($bdd);
        return view('Pages/account')->with("username", $username);
    }
    public function createAccount() {
        return view('Pages/createAccount');
    }
    public function getLogin() {
        return view('Pages/login');
    }
    public function failedLogin() {
        return view('Pages/failedLogin');
    }
    public function profil() {
        return view('Pages/profil');
    }
    public function writeArticle() {
        return view('Pages/writeArticle');
    }
}
<?php

class User {
    public function index() {
        echo 'User/index';
    }

    public function profile($nama='Linux', $pekerjaan='Devs' ) {
        echo " Salam kenal saya '$nama', saya seorang '$pekerjaan' ";
    }
}
<?php

class Conexion {

    static public function conectar() {

        $link = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_d373a1dd2fd28b5', 'b7664dadb812fe', 'a7ff62e3');
        $link -> exec('set names utf8');

        return $link;
    }

}

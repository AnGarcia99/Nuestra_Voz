<?php

class Conexion {

    static public function conectar() {

        $link = new PDO('mysql:host=bldppo0ujxpfsb4eobju-mysql.services.clever-cloud.com;dbname=bldppo0ujxpfsb4eobju', 'ujynbvhqif25hyig', 'ujynbvhqif25hyig');
        $link -> exec('set names utf8');

        return $link;
    }

}
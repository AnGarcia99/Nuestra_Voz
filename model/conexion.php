<?php

class Conexion {

    static public function conectar() {

        $link = new PDO('mysql://ujynbvhqif25hyig:WLZXQeBlksFBrHPUghXD@bldppo0ujxpfsb4eobju-mysql.services.clever-cloud.com:3306/bldppo0ujxpfsb4eobju');
        $link -> exec('set names utf8');

        return $link;
    }

}

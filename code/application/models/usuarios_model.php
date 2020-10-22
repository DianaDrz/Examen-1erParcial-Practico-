<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuarios_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
    public function verificar ($ci,$clave){
        $array1 = array("74347", "1234");
        $array2 = array("74347", "Gabriela Martinez Sanchez","1999-05-18","01");
        $array3 = array("84348", "4321");
        $array4 = array("84348", "Andrea Ortiz Perez","1995-07-30","02");
        $array5 = array("94449", "1122");
        $array6 = array("94449", "Juan Jose Rojas Pinto","1997-10-23","03");
        if (($array1[0]==$ci) && ($array1[1]==$clave)){
            return $array2;
        }elseif(($array3[0]==$ci) && ($array3[1]==$clave)){
            return $array4;
        }elseif(($array5[0]==$ci) && ($array5[1]==$clave)){
            return $array6;
        }   
    }
}
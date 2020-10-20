<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class usuarios extends CI_Model {
    
    public function obtener($ci,$clave){
        $array = array("12", "1234");
        $array2 = array("12", "Anita Perez","12/03/1987","01");
        $array3 = array("123", "4321");
        $array4 = array("123", "Jose Perez","1/0/0","02");
        if (($array[0]==$ci) && ($array[1]==$clave))
        {
            return $array2;
        }else{
            return false;
        }  
    }

}
<?php

Class Teste Extends CI_Model {

        public function teste2($data = null) 
	{
        $teste= 4;
        $teste2=5;
        $teste=$teste + $teste2;
        //print_r ('something');
        //print_r ($data);
        //echo 'again';
        return $teste;
	}
}
?>
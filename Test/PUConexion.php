<?php

include_once "Conexion.php";


class conxionTest extends PHPUnit_Framework_TestCase{
	
    public function testHost() {
		
        $data = new DataDB();
        
		$expect	ed = "localhost";
        $actual = $data->getHost();
        $this->assertEquals($expected, $actual);
    }
	
}
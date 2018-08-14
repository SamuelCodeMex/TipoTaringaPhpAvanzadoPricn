<?php
class Conexion extends mysqli{
	public function __construct(){
    parent::__construct('localhost','root','','intralibros');
    $this->query("SET NAMES 'utf8';");
    $this->connect_errno ? die('Error con la conexion'): $x = '';
    unset($x);
    } 

    public function recorrer($s){
    	return mysqli_fetch_array($s);
    }

    public function rows($s){
    	return mysqli_num_rows($s);
    }

    public function liberar($s){
        return mysqli_free_result($s);
    }
}
?>
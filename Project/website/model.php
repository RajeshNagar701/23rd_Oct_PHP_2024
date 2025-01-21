

<?php

// MVC    MODEL     VIEW PAGES    CONTROL 

// logic page that include db connection & all crud function 

class model{
	
	public $conn="";
	
	function __construct(){
							//hostname  // username // pass // db name
		//$this->conn=new mysqli('localhost','root','','glasses');
	}
	
	function select($tbl){
		$sel="select * from $tbl";
	}
	
	function insert(){
		
	}
	function update(){
		
	}
	function datete(){
		
	}
}
$obj=new model;

?>


<?php

// MVC    MODEL     VIEW PAGES    CONTROL 

// logic page that include db connection & all crud function 

class model{
	
	public $conn="";
	
	function __construct(){
							//hostname  // username // pass // db name
		$this->conn=new mysqli('localhost','root','','glasses');
	}
	
	function select($tbl){
		
		$sel="select * from $tbl"; // query
		$run=$this->conn->query($sel);  // query run by conn variable
		while($fetch=$run->fetch_object())
		{
			$arr[]=$fetch;
		}
		return $arr;
	}
	
	function insert($tbl,$arr){
		
		$col_arr=array_keys($arr); // array("0"=>"name","1"=>"email","2"=>"comment") // get column in arr
		$col=implode(",",$col_arr); // conver arr to string // name,email,comment
		
		$values_arr=array_values($arr);  //array("0"=>"raj","1"=>"raj@gmail.com","2"=>"address")
		$values=implode("','",$values_arr);   // 'raj','raj@gmail.com','ssaddreess'
		
		$ins="insert into $tbl ($col) values ('$values')"; // query
		$run=$this->conn->query($ins);  // query run by conn variable
		return $run;
		
	}
	
	function update(){
		
	}
	function datete(){
		
	}
}
$obj=new model;

?>
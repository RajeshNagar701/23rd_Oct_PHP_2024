

<?php
// MVC        m(logic) ===> C(fist page run) <==== V(design pages) 


include_once('model.php'); // step 1 model load in control for call function


class control extends model{   // step 2 control class extends model class for access function
	
	function __construct(){ 
		
		model::__construct();  // stepm 3  call model __construct for db connection
		
		$path=$_SERVER['PATH_INFO']; // GET PATH OF OWN PAGE
		
		switch($path){
			
			case '/':
			include_once('index.php');
			break;
			
			case '/about':
			include_once('about.php');
			break;
			
			case '/glasses':
			$categories_arr=$this->select('categories');
			include_once('glasses.php');
			break;
			
			case '/shop':
			include_once('shop.php');
			break;
			
			case '/contact':
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$email=$_REQUEST['email'];
				$comment=$_REQUEST['comment'];
				
				$data=array("name"=>$name,"email"=>$email,"comment"=>$comment);	
				
				$res=$this->insert('contacts',$data);
				echo "<script> alert('Contact Successfull') </script>";
			}
			include_once('contact.php');
			break;
			
			case '/login':
			include_once('login.php');
			break;
			
			case '/signup':
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$email=$_REQUEST['email'];
				$comment=$_REQUEST['comment'];
				
				$data=array("name"=>$name,"email"=>$email,"comment"=>$comment);	
				
				$res=$this->insert('customers',$data);
				echo "<script> alert('customers signup Successfull') </script>";
			}
			include_once('signup.php');
			break;
			
			default:
				echo "<h1 style='color:red;text-align:center;margin-top:300px'>Page Not Found</h1>";
			break;
		}
		
	}
}
$obj=new control;

?>
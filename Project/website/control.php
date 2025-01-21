

<?php
// MVC        m(logic) ===> C(fist page run) <==== V(design pages) 


include_once('model.php');


class control extends model{
	
	function __construct(){
		
		model::__construct();  // call model __construct for db connection
		
		$path=$_SERVER['PATH_INFO']; // GET PATH OF OWN PAGE
		
		switch($path){
			
			case '/':
			include_once('index.php');
			break;
			
			case '/about':
			include_once('about.php');
			break;
			
			case '/glasses':
			include_once('glasses.php');
			break;
			
			case '/shop':
			include_once('shop.php');
			break;
			
			case '/contact':
			
			include_once('contact.php');
			break;
			
			case '/login':
			include_once('login.php');
			break;
			
			case '/signup':
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
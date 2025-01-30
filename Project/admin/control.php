

<?php
// MVC        m(logic) ===> C(fist page run) <==== V(design pages) 


include_once('../website/model.php');


class control extends model{
	
	function __construct(){
		
		model::__construct();  // call model __construct for db connection
		
		$path=$_SERVER['PATH_INFO']; // GET PATH OF OWN PAGE
		
		switch($path){
			
			case '/admin-login':
			include_once('index.php');
			break;
			
			case '/dashboard':
			include_once('dashboard.php');
			break;
			
			case '/add_categories':
			include_once('add_categories.php');
			break;
			
			case '/manage_categories':
			$categories_arr=$this->select('categories');
			include_once('manage_categories.php');
			break;
			
			case '/add_product':
			
			include_once('add_product.php');
			break;
			
			case '/manage_product':
			$products_arr=$this->select('products');
			include_once('manage_product.php');
			break;
			
			case '/manage_contact':
			$contact_arr=$this->select('contacts');
			include_once('manage_contact.php');
			break;
			
			case '/manage_customer':
			$customers_arr=$this->select('customers');
			include_once('manage_customer.php');
			break;
			
			case '/manage_cart':
			include_once('manage_cart.php');
			break;
			
			case '/manage_order':
			include_once('manage_order.php');
			break;
			
			case '/manage_feedback':
			include_once('manage_feedback.php');
			break;
			
			case '/add_employee':
			include_once('add_employee.php');
			break;
			
			case '/manage_employee':
			include_once('manage_employee.php');
			break;
			
			default:
				echo "<h1 style='color:red;text-align:center;margin-top:300px'>Page Not Found</h1>";
			break;
		}
		
	}
}
$obj=new control;

?>
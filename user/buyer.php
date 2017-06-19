<?php
	//session_start();
	include("../User.php");
	
	class buyer extends User
	{		
		public $confirmation;	
		function __construct()
		{
			$dbServer = 'localhost'; 	//Define database server host
			$dbUsername = ''; 		//Define database username
			$dbPassword = ''; 		//Define database password
			$dbName = ''; 		//Define database name
			
			$con = new mysqli($dbServer,$dbUsername,$dbPassword,$dbName);
			if(mysqli_connect_errno()){
				die("Failed to connect with MySQL: ".mysqli_connect_error());
			}else{
				$this->connect = $con;
			}
		}
		
		public function uploadItem()
		{				
			
		}
	
    public function viewItem($email)
    {        
	} 
      		//view function sends here -----


	 //show upload form 	    
}

$obj=new Seller();
$obj->uploadItem();	

?>
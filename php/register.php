<?php
include "php/config.php"; 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $uusername = trim($_POST['UserUsername']);
	$ppassword = trim($_POST['UserPassword']);
	$cpassword = trim($_POST['pswrepeat']);
	$realname = trim($_POST['UserName']);
	$email = trim($_POST['UserEmail']);
    $bool = true;
    $ppassword1="";
    if ($ppassword == $cpassword)
    {
	    //$ppassword= password_hash ('UserPassword',PASSWORD_DEFAULT);
    //	mysqli_select_db($conn,"id7503734_clientsdatabase") or die("Cannot connect to database"); 
    	$query = mysqli_query($conn,"Select * from ClientsTable"); //Query the users table
    	while($row = mysqli_fetch_array($query)) //display all rows from query
    	{
    		$table_users = $row['UserUsername']; 
    		$table_emails = $row['UserEmail'];
    		if($uusername == $table_users || $email == $table_emails) 
    		{
    			$bool = false; 
    			echo "<script type='text/javascript'>
    			alert('Username or email has been taken!');</script>" ; 
    			
    		}
    	}
    	if($bool) 
    	{
    	    $ppassword1 = password_hash($ppassword, PASSWORD_DEFAULT);
    		
        
    		mysqli_query($conn,"INSERT INTO ClientsTable (UserUsername, UserPassword, UserName, UserEmail) VALUES ('$uusername','$ppassword1', '$realname', '$email')") or die(mysqli_error("Nu s-au putut adauga datele"));
    	//	echo "<script>window.location.assign('about.html');</script>";	
	    }
	}
	else echo "<script> alert('The passwords do not match!');</script>";
}
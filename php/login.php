<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==true ){
    header("location: ../content.php");
    exit;
}
 require_once "config.php";
 
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // Check if username is empty
    if (isset($_POST['UserUsernameL']))
        //$username = trim($_POST["UserUsernameL"]);
        
        $username=mysqli_real_escape_string($conn,$_POST["UserUsernameL"]);
        
        else 
            $username_err = "Please enter username.";
        
    if (isset($_POST['UserPasswordL']))
            $password = mysqli_real_escape_string($conn,$_POST["UserPasswordL"]);
            else
                $password_err = "Please enter your password.";
    
    
    if(empty($username_err) && empty($password_err)){// if there are no errors
        
        $sql ="SELECT UserID,UserUsername, UserPassword FROM ClientsTable WHERE UserUsername='$username' ";
        $result= mysqli_query ($conn,$sql);
        if (!$result)
            echo "<script> alert ('Querry error');</script>";
            
      $row_search = mysqli_fetch_array($result,MYSQLI_ASSOC);
       $count = mysqli_num_rows($result);
      if($count == 1 ) 
        if  ( password_verify($password, $row_search['UserPassword'])){
         $_SESSION['userid'] = $row_search["UserID"] or die("atribuire la SESSION");
          $_SESSION['loggedin']=true;
		  $_SESSION['scenario']=0;
		  if ($username == "admin")
			  header('location: ../admin.php');
		  else
			header('location: ../content.php');
  
      }
      else {
          header('location: ../index.php');
      }
      
      else {
           header('location: ../index.php');

      }
   }
    
   
    // Close connection
    mysqli_close($conn);
}
?>
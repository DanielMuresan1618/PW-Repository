<?php

session_start();
 require_once "config.php";
 header('Location: ../../index.php');
// Check user login or not
 if(!isset($_SESSION['loggedin'])){
 header('Location: ../../index.php');
}
else{
 $_SESSION = array();
 /* Remove cookie variables
 $days = 30;
 setcookie ("rememberme","", time() - ($days * 24 * 60 * 60 * 1000));


<?php 
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    
    header ("Location: content.php" );
} 

?>

*/
 header('Location: ../index.php');
}
?>
/*<?php 
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    
    header ("Location: content.php" );
} 

?>*/
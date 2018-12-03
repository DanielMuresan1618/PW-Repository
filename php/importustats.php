<?php 
require_once ("config.php");
session_start();
if (isset($_SESSION['loggedin'])) {
	$sqldata4="";
	if (isset($_GET['history'])&& $_GET['history'] == 1)
	$sqldata4 = mysqli_query($conn, "SELECT * FROM UserStatsTable WHERE UserID= '$_SESSION[userid]'") or die ('error query to $sqldata4');
	else 
	$sqldata4 = mysqli_query($conn, "SELECT * FROM UserStatsTable") or die ('error query to $sqldata4'); 
	$ustats = array();
	while ($row = mysqli_fetch_assoc ($sqldata4)){
			$ustats[]= $row;
	}
	echo json_encode($ustats);
}
?>
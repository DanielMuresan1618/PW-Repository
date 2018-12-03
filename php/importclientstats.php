<?php 
require_once ("config.php");
session_start();
//if (isset($_SESSION['loggedin'])&& $_SESSION['username']=='admin') {

	$sqldata = mysqli_query($conn, "SELECT * FROM Clientstats") or die ('error query to $sqldata');
	$sw = true;
		
		while ($sw && ($row = mysqli_fetch_assoc ($sqldata)))
		if ($row['UserID'] == $_SESSION['userid']){
			$stats=$row;
			$sw= false;
		}
	echo json_encode($stats);
?>
<?php 
require_once ("config.php");
session_start();
//if (isset($_SESSION['loggedin'])&& $_SESSION['username']=='admin') {

	$sqldata = mysqli_query($conn, "SELECT * FROM ClientsTable") or die ('error query to $sqldata'); 
	$users = array(array("client"=>"", "stats"=>""));
	$i = 0;
		while ($row = mysqli_fetch_assoc ($sqldata)){
			$users[$i]["client"]= $row;
			$i= $i+1;
	}

	$sqldata = mysqli_query($conn, "SELECT * FROM Clientstats") or die ('error query to $sqldata'); 
		$i = 0;
	while ($row = mysqli_fetch_assoc ($sqldata)){
	while ($users[$i]["client"]["UserID"]!= $row["UserID"])
			$i= $i+1;
		$users[$i]["stats"] = $row;
		$i=$i+1;
		}
		
	echo json_encode($users);
?>
<?php 
require_once ("config.php");


$sqldata2 = mysqli_query($conn, "SELECT * FROM Stories") or die (mysqli_error('error query to $sqldata2')); 
$sqldata31 = mysqli_query($conn,"SELECT * FROM StatsTable1") or die (mysqli_error('error query to $sqldata31')); 
	$sqldata32 = mysqli_query($conn, "SELECT * FROM StatsTable2") or die (mysqli_error('error query to $sqldata32')); 
$stories = array(array(array(),array(),array()));

$i = 0;
	while ($row = mysqli_fetch_assoc ($sqldata2)){
			$stories[$i][0]= $row;
			$row1 = mysqli_fetch_assoc ($sqldata31);
				$stories[$i][1] = $row1;
			$row1 = mysqli_fetch_assoc ($sqldata32);
				$stories[$i][2] = $row1;
		$i=$i+1;
	}
	echo json_encode($stories);
	?>
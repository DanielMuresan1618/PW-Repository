<?php
session_start();
	
	$rez = $_SESSION['scenario'];
	echo json_encode ($rez);
?>
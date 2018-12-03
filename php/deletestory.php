<?php
	require_once ("config.php");
	$id  = $_GET['del'];
	$sql = "DELETE FROM statstable1 where StoryID = $id";
	if (!mysqli_query($conn, $sql))
		echo "Error delete ffrom statstable 1";
	$sql = "DELETE FROM statstable2 where StoryID = $id";
	if (!mysqli_query($conn, $sql))
		echo "Error delete ffrom statstable 2";
	$sql = "DELETE FROM stories where StoryID = $id";
	if (!mysqli_query($conn, $sql))
		echo "Error delete ffrom stories";	
	$sql = "DELETE FROM userstatstable where StoryID = $id";
	if (!mysqli_query($conn, $sql))
		echo "Error delete ffrom userstatstable";	
		echo "<script>window.location.assign('../admin.php');</script>";
		
?>
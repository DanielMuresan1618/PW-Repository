<?php
	
	require_once ("config.php");
	session_start();
	if (isset($_SESSION['loggedin'])) 
		if (!empty($_POST)){
		$story = $_POST['story_inp'];
		$pop1 = $_POST['pop1_inp'];
		$pop2 = $_POST['pop2_inp'];
		$mood1 = $_POST['Mood1_inp'];
		$mood2 = $_POST['Mood2_inp'];
		$health1 = $_POST['health1_inp'];
		$health2 = $_POST['health2_inp'];
		$know1 = $_POST['Knowledge1_inp'];
		$know2 = $_POST['Knowledge2_inp'];
		
		$sql = "INSERT INTO Stories(Story) VALUES('$story')";
		if(	!mysqli_query($conn,$sql))		
		echo "Error: " . $sql . " stories <br>";
		
		$id = "SELECT StoryID FROM Stories ORDER BY StoryID DESC LIMIT 1";
		
			$result = mysqli_query($conn,$id);
			
			$resultC= mysqli_fetch_assoc ($result);
		
		$sql = "INSERT INTO StatsTable1(StoryID,Popularity,Mood,Health,Knowledge) VALUES('$resultC[StoryID]','$pop1','$mood1','$health1','$know1')";
		
		if(	!mysqli_query($conn,$sql))		
		echo "Error: " . $sql . " stats1 <br>" . mysqli_error($conn);
		
		$sql = "INSERT INTO StatsTable2(StoryID,Popularity,Mood,Health,Knowledge) VALUES('$resultC[StoryID]','$pop2','$mood2','$health2','$know2')";
		if(	!mysqli_query($conn,$sql))		
		echo "Error: " . $sql . " stats2 <br>" . mysqli_error($conn);

		echo "<script>window.location.assign('../admin.php');</script>";
		
			}
		else header ("location : ../admin.php");
	else header("location : ../index.php"); 
?>
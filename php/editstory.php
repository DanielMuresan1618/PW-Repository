<?php
	
	require_once ("config.php");
	session_start(); 
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
		
		
			$idstory = $_GET['sty'];
		echo "<script>alert ($idstory);</script>";
		$sql = "UPDATE Stories SET Story = '$story' WHERE StoryID = $idstory"; /*update poveste*/
		if(	!mysqli_query($conn,$sql))		
		echo "Error UPDATE: " . $sql . " stories <br>";
		
		
		$sql = "UPDATE StatsTable1 SET Popularity = '$pop1' ,Mood= '$mood1',Health = '$health1',Knowledge = '$know1' WHERE StoryID = $idstory";
		
		if(	!mysqli_query($conn,$sql))		
		echo "Error: " . $sql . " stats1 <br>" . mysqli_error($conn);
		
		$sql = "UPDATE StatsTable2 SET Popularity = '$pop2' ,Mood= '$mood2',Health = '$health2',Knowledge = '$know2' WHERE StoryID = $idstory";
		if(	!mysqli_query($conn,$sql))		
		echo "Error: " . $sql . " stats2 <br>" . mysqli_error($conn);
		

		echo "<script>window.location.replace('../admin.php');</script>";
		
			}
		else 
		echo "<script>window.location.replace('../admin.php');</script>";
	 
?>
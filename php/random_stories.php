
<?php
require_once "config.php";
$sql = "SELECT * FROM stories ORDER BY RAND() LIMIT 1" or die ("error select stories");
$r = mysqli_query($conn,$sql) or die ("error querry stories");
$f = array(array(),array(),array());
$f[0] = mysqli_fetch_assoc ($r) or die ("error fetch stories");
$id = $f[0]['StoryID'];
$sql = "SELECT * FROM statstable1 WHERE StoryID = $id" or die ("error select stats1");
$r = mysqli_query($conn,$sql) or die ("error querry stats1");
$f[1] = mysqli_fetch_assoc ($r) or die ("error fetch stats1");
$sql = "SELECT * FROM statstable2 WHERE StoryID = $id" or die ("error select stats2");
$r = mysqli_query($conn,$sql) or die ("error querry stats2");
$f[2] = mysqli_fetch_assoc ($r) or die ("error fetch stats2");

echo json_encode($f);

?>
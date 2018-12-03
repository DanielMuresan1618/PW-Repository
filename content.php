<?php 
session_start();

if (!isset($_SESSION['loggedin']) ) {
    
    header ("Location: index.php" );
} 
if ( $_SESSION['userid']==17)
	header ("Location: admin.php" );


?>

<html>
    <head>
         <link rel="stylesheet" href="css/content.css">
		 <link rel="stylesheet" href="css/admin.css">
        <title>The story of</title>
		<meta charset="UTF-8">
    </head>
    <body>
        <div class = "top_bar">
            <a href="about.html" class="button">
                About
            </a>
            <form action="php/logout.php" >
                <button type="submit" class="logout">Logout</button>
            </form>
        </div>
        <div class="blank" id="container_stats">
            <div class="profile_pic">
					<button id="profile_pic_btn" name="profile_pic_btn">
						<input id="fileid" type="file" onchange="previewFile()" hidden><br/>
                            <img  src="img/unknown_user.png" width=165px height=180px/>
                        </input>
					</button>
				</div>
				<div class="stats_container">
					<div class="stats_label">
						<label class="stats_label">Popularity</label>
					</div>
					<div class="stats" id="popularity">
					<output class="userstats"></output>
					</div>
					<div class="stats_label">
						<label class="stats_label">Mood</label>
					</div>
					<div class="stats" id="health">
					<output class="userstats"></output>
					</div>
					<div class="stats_label">
						<label class="stats_label">Health</label>
					</div>
					<div class="stats" id="mood">
					<output class="userstats"></output>
					</div>
					<div class="stats_label">
						<label class="stats_label">Knowledge</label>
					</div>
					<div class="stats" id="knowledge">
					<output class="userstats"></output>
					</div>
				</div>
        </div>
        <div class = "container_story" id="container_story_whole">
            <div class = "container_story" id="container_story_text">
            </div>
            <div class = "container_story" id="container_story_decisions">
                <div class = "container_story" id="container_story_decisions_b1">
                    <button type="submit">Alege</button>
				</div>
                <div class = "container_story" id="container_story_decisions_b2">
					<button type="submit">Alege</button>
				</div>
				
			</div>

        </div>    
    </div>
	
                <div class="blank" id="lower_div">
				
				</div>
				<?php
				if (isset ($_SESSION['rezultat']))
	echo "<script>
	document.getElementById('lower_div').innerHTML= '$_SESSION[rezultat]';
			</script>";
			?>
        <div class="blank" id="container_history"></div>
        <script src="js/upload_pic.js"></script>
		<script src="js/history.js"></script>
		<script src="js/outclientstats.js"></script>
		<script src="js/random_stories.js"></script>
		<script src="js/counter.js"></script>
    </body>
</html>
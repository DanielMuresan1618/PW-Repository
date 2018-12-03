<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['userid']!=17)
	header ("location: index.php");

?>
<html>
	<head>
		<title>Admin Panel</title>
		<link rel="stylesheet" href="css/admin.css">
		<link rel="stylesheet" href="css/tabele.css">
		<link rel="stylesheet" href="css/content.css">
	</head>
	<body>
		<div class = "top_bar">
			<form action="php/logout.php" >
                <button type="submit" class="logout">Logout</button>
            </form>
		</div>
		<div id ="smth">
			<div id="menu">
				<div class="opt" align="center">
					<button class="button_opt" id="btn_users" onclick = "pressedUsers()">
					Users
					</button>
				</div>
				<div class="opt" align="center">
					<button class="button_opt" id="btn_stories" onclick ="pressedStory()">
					Stories
					</button>
				</div>
				<div class="opt" align="center">
					<button class="button_opt" id="btn_status" onclick = "pressedStatus()">
					Current Status
					</button>
				</div>
			</div>
			<div id="content">
			</div>
			<div id="modal_story" class="modal">
				<div class="modal_story_content">
					<form action="php/addstory.php" method="post" name = "story_form" id= "story_form">
						<span class="close">&times;</span>
						<fieldset>
							<legend>Story:</legend>
							<textarea cols="50" rows="10" name="story_inp">Insert story.</textarea><br /> 
						</fieldset>
						<fieldset>
							<legend>Popularity:</legend>
									<label for="pop_1">1st Scenario  -5</label>
									<input type="range" name="pop1_inp" id="pop_1" min="-5" max="5" oninput="pop1_o.value = pop_1.value" value="0">+5->
									<output name="pop1_points" id="pop1_o"></output>
									<br/>
									<label for="pop_2">2nd Scenario -5</label>
									<input type="range" name="pop2_inp" id="pop_2" min="-5" max="5" oninput="pop2_o.value = pop_2.value" value="0">+5->
									<output name="pop2_points" id="pop2_o"></output>
						</fieldset>
						<fieldset>
						<legend>Mood:</legend>
									<label for="Mood_1">1st Scenario  -5</label>
									<input type="range" name="Mood1_inp" id="Mood_1" min="-5" max="5" oninput="Mood1_o.value = Mood_1.value" value="0">+5->
									<output name="Mood1_points" id="Mood1_o"></output>
									<br/>
									<label for="Mood_2">2nd Scenario -5</label>
									<input type="range" name="Mood2_inp" id="Mood_2" min="-5" max="5" oninput="Mood2_o.value = Mood_2.value" value="0">+5->
									<output name="Mood2_points" id="Mood2_o"></output>
						</fieldset>
						<fieldset>
						<legend>Health:</legend>
									<label for="health_1">1st Scenario  -5</label>
									<input type="range" name="health1_inp" id="health_1" min="-5" max="5" oninput="health1_o.value = health_1.value" value="0">+5->
									<output name="health1_points" id="health1_o"></output>
									<br/>
									<label for="health_2">2nd Scenario -5</label>
									<input type="range" name="health2_inp" id="health_2" min="-5" max="5" oninput="health2_o.value = health_2.value" value="0">+5->
									<output name="health2_points" id="health2_o"></output>
						</fieldset>
						<fieldset>
						<legend>Knowledge:</legend>
									<label for="Knowledge_1">1st Scenario  -5</label>
									<input type="range" name="Knowledge1_inp" id="Knowledge_1" min="-5" max="5" oninput="Knowledge1_o.value = Knowledge_1.value" value="0">+5->
									<output name="Knowledge1_points" id="Knowledge1_o"></output>
									<br/>
									<label for="Knowledge_2">2nd Scenario -5</label>
									<input type="range" name="Knowledge2_inp" id="Knowledge_2" min="-5" max="5" oninput="Knowledge2_o.value = Knowledge_2.value" value="0">+5->
									<output name="Knowledge2_points" id="Knowledge2_o"></output>
						</fieldset>
						<div  id="hidden">
							<button type="submit" id="btn_add_story1" >
								ADD Story
							</button>
						</div>
					</form>	
				</div>
			</div>
		</div>
		<script src='https://code.jquery.com/jquery-3.3.1.min.js'></script> 
		<script src="js/importusers.js"></script>
		<script src="js/importstatus.js"></script>
		<script src="js/importstories.js"></script>
		<script src="js/deletestory.js"></script>
		<script src="js/editstory.js"></script>
	</body>
</html>
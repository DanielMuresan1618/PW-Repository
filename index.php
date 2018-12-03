<?php 
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    
    header ("Location: content.php" );
} 

?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ACuest</title>
		<link rel="stylesheet" href="css/Style1.css">
		<link rel="stylesheet" href="css/taburi.css">
		<link rel="stylesheet" href="css/movingimg.css">
	    <link rel="stylesheet" href="css/registerValidator.css">
	    
	</head>
	<body>
		<section class="mvb">
			<div class="topnav">
			  <a class="active" href="index.html">Home</a>
			  <a href="about.html">About</a>
			</div>
			
			<div  class="formcont">
				<form action="php/login.php" method="post">

					<div class="imgcontainer">
						<img src="img/Logo.JPG" alt="Logo" class="logo">
					</div>
					<div class="container">
						<label for="uname"><b>Username</b></label>
						<input type="text" id="userlogin" placeholder="Enter Username" name="UserUsernameL" class="logininp" required >
						
						<p>
						<label for="psw"><b>Password</b></label>
						<input type="password" id="passlogin" class="logininp" name="UserPasswordL" placeholder="Enter Password" >
						</p>
						<button type="button" id="loginbtn">Login</button>
						<button id="signup" type = "button" onclick="document.getElementById('id01').style.display='block'"  style="width:auto;">Sign Up</button><br/>
						<input type="checkbox" name="remember" value="1">Remember Me</input>
				</form>
						<div id="user_error_div" style="font-size: 10px">
						    <br id="user_error" >Please insert your <b>username</b>.</br>
						</div>
						<div id="psw_error_div" style="font-size: 10px">
						    <br id="psw_error" >Please insert your <b>password</b>.</br>
						</div>

                        <div id="id01" class="modal">
                            
                              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                            
                             <form class="modal-content" method="post" action="register.php">
                                <div class="container">
                                  <h1>Sign Up</h1>
                                  <br>Please fill in this form to create an account.</br>
                                  <div class="linie">
                                        <div class="regtxt">
                                            <label for="UserUsername"><b>Username</b></label>
                                        </div>
                                        <div class="reginp">
                                            <input class="registerinp" type="text" placeholder="Enter your Username" name="UserUsername" required>
                                        </div>
                                   </div>
                                   <div class="linie">
                                        <div class="regtxt">
                                            <label for="UserName"><b>Name</b></label>
                                        </div>
                                        <div class="reginp">
                                            <input class="registerinp" type="text" placeholder="Enter your Name" name="UserName" required>
                                        </div>
                                    </div>
                                    <div class="linie">
                                        <div class="regtxt">
                                            <label for="UserEmail"><b>Email</b></label>
                                        </div>
                                        <div class="reginp">
                                            <input class="registerinp" type="text" placeholder="Enter Email" name="UserEmail" required>
                                        </div>  
                                    </div>
                                    <div class="linie">
                                        <div class="regtxt">
                                            <label for="UserPassword"><b>Password</b></label>
                                        </div>
                                        <div class="reginp">
                                            <input id="UserPassword" class="registerinp" type="password" placeholder="Enter Password" name="UserPassword" required>
                                        </div>
                                    </div>
                                    <div class="linie">
                                        <div class="regtxt">
                                            <label for="pswrepeat"><b>Repeat Password</b></label>
                                        </div>
                                        <div class="reginp">
                                            <input id="pswrepeat" class="registerinp" type="password" placeholder="Repeat Password" name="pswrepeat" required>
                                        </div>
                                    </div>
                                    <div id="message">
                                      <h4>Password must contain the following:</h4>
                                      <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                                      <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                                      <p id="number" class="invalid">A <b>number</b></p>
                                      <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                                      <p id="matchP" class="invalid">Match with the one from Repeat password field</p>
                                   </div>
                                  <label>
                                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                                  </label>
                            
                            
                                  <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                            
                                  <div class="clearfix">
                                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                                    <button type="submit" class="signupbtn">Sign Up</button>
                                  </div>
                                  
                            </form>
                        </div
                        
			</div>	
			
			
		</section>
		<script src='https://code.jquery.com/jquery-3.3.1.min.js'></script> 
		<script>
// Get the modal
var modal = document.getElementById('id01');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none"; 
    }
}
</script>
        <script src="js/session.js"></script>
       <script src="js/session.js"></script>
		<script src="js/mvb.js"></script>
		<script src="js/correct_psw.js"></script>
		<script src="js/correct_login.js"></script>
	</body>
</html>


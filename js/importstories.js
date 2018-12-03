function pressedStory(){
	var html= ""; 
	var ajax = new XMLHttpRequest();
	var method = "GET";
	var url = "../php/importstories.php";
	
	var asynchronous = true;
	ajax.open(method,url,asynchronous);
	ajax.send();
	ajax.onreadystatechange = function(){
	if (this.readyState == 4)
		if (this.status == 200){
		var data = JSON.parse (this.responseText);
		console.log(data);
		
		
		html += "<div class='divTable d'>";
		html += "<div class='divTableHeading'>";
		html += "<div class='divTableRow'>"
		html += "<div class='divTableHead'>StoryID</div>";
		html += "<div class='divTableHead'>Story</div>";
		html += "<div class='divTableHead'>Popularity1</div>";
		html += "<div class='divTableHead'>Popularity2</div>";
		html += "<div class='divTableHead'>Mood1</div>";
		html += "<div class='divTableHead'>Mood2</div>";
		html += "<div class='divTableHead'>Health1</div>";
		html += "<div class='divTableHead'>Health2</div>";
		html += "<div class='divTableHead'>Knowledge1</div>";
		html += "<div class='divTableHead'>Knowledge2</div>";
		html +="</div>";
		html +="</div>";
		
		for (var a=0; a < data.length; a++){
			
			var column = data[a][0].StoryID;
			html += "<div class='divTableRow'>";
			html += "<div class='divTableCell' >" + column + "</div>";
			
			 column = data[a][0].Story;
			html += "<div class='divTableCell' >" + column + "</div>";
			
			 column = data[a][1].Popularity;
			html += "<div class='divTableCell'>" + column + "</div>";
			
			 column = data[a][2].Popularity;
			html += "<div class='divTableCell'>" + column + "</div>";
			
			 column = data[a][1].Mood;
			html += "<div class='divTableCell' >" + column + "</div>";
			
			 column = data[a][2].Mood;
			html += "<div class='divTableCell' >" + column + "</div>";
			
			 column = data[a][1].Health;
			html += "<div class='divTableCell' >" + column + "</div>";
			
			 column = data[a][2].Health;
			html += "<div class='divTableCell' >" + column + "</div>";
			
			 column = data[a][1].Knowledge;
			html += "<div class='divTableCell' >" + column + "</div>";
			
			column = data[a][2].Knowledge;
			html += "<div class='divTableCell' >" + column + "</div>";
			html += "<div class='divTableCell' ><button id='edit" + a + "' onclick = 'editst("+a+")'>Edit</button></div>"; 
			
			html += "<div class='divTableCell' ><button onclick = 'delstory(" + a + ")'>Delete</button></div>";
			html +="</div>";
			
		}
		html +="</div>";
		
	html +="<div class='bottom' id='unhidden'>";
		html +=	"<button id='btn_add_story' >ADD Story</button></div>";
		document.getElementById("content").innerHTML=html;
		// addstorymodal.js
	
		var clicked = true; //ADD STORY
			var modal = document.getElementById('modal_story');
		// Get the button that opens the modal
		var btn = document.getElementById("btn_add_story");
		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks the button, open the modal 
		btn.onclick = function() {
			
			modal.style.display = "block";
			clicked = close;
		}
	
		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
			modal.style.display = "none";
				
			if (clicked){
			document.story_form.action = 'php/addstory.php';			
			document.getElementById('hidden').innerHTML =  "<button type = 'submit' id = 'btn_add_story1' >ADD Story</button>";
			clicked = false;
				}
			}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
				
			if (clicked){
			document.story_form.action = 'php/addstory.php';			
			document.getElementById('hidden').innerHTML =  "<button type = 'submit' id = 'btn_add_story1' >ADD Story</button>";
			clicked = false;
			}
		}


	
	}}
	
		
	
	
}

	
	

	var modal = document.getElementById('modal_story');
	var span = document.getElementsByClassName("close")[0];
	
function	editst(a) {
		modal.style.display = "block";		
	
	var storyid = document.getElementsByClassName("divTableRow")[a+1].getElementsByClassName("divTableCell")[0].innerHTML;
		 document.getElementById('hidden').innerHTML = "<button type = 'submit' id = 'save_edit' >Save</button>";
	document.story_form.action = "php/editstory.php?sty=" + storyid ;

	clicked = true;	
	

}

	
	/* astea trebuie puse undeva separat 
	
		document.getElementById("hidden") = "<button id='btn_add_story'>Add Story</button>"; //Add story in loc de Save
		
		
		 
		document.getElementById("hidden") = "<button id='save_edit'>Save</button>"; //Save in loc de Add story*/
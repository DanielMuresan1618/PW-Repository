var ajax = new XMLHttpRequest();
	var method = "GET";
	var url = "../php/importustats.php?history=1";
	
	var asynchronous = true;
	ajax.open(method,url,asynchronous);
	console.log();
	ajax.send();
	ajax.onreadystatechange = function(){
	if (this.readyState == 4)
		if (this.status == 200){
		var data = JSON.parse (this.responseText);
		var html="";
		html+= "<div class='divTable d'>";
		html += "<div class='divTableHeading'>";
		html += "<div class='divTableRow'>"
		html += "<div class='divTableHead'>Story</div>";
		html += "<div class='divTableHead'>Choice</div>";
		html += "<div class='divTableHead'>Popularity</div>";
		html += "<div class='divTableHead'>Mood</div>";
		html += "<div class='divTableHead'>Health</div>";
		html += "<div class='divTableHead'>Knowledge</div>";
		html +="</div>";
		html +="</div>";
		for (var a=0; a < data.length; a++){
			var column = data[a].Story;
			html += "<div class='divTableRow'>";
			html += "<div class='divTableCell' >" + column + "</div>";
			
			 column = data[a].Choice;
			html += "<div class='divTableCell' >" + column + "</div>";
			
			 column = data[a].Popularity;
			html += "<div class='divTableCell'>" + column + "</div>";
			
			 column = data[a].Mood;
			html += "<div class='divTableCell'>" + column + "</div>";
			
			 column = data[a].Health;
			html += "<div class='divTableCell' >" + column + "</div>";
			
			 column = data[a].Knowledge;
			html += "<div class='divTableCell' >" + column + "</div>";
			
			html +="</div>";
		}
		html +="</div>";
		document.getElementById("container_history").innerHTML=html;
		}
	}

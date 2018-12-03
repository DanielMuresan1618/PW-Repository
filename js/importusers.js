function pressedUsers(){

	var ajax = new XMLHttpRequest();
	var method = "GET";
	var url = '../php/importclients.php';
	var asynchronous = true;
	ajax.open(method,url,asynchronous);
	ajax.send();
	ajax.onreadystatechange = function(){
	
		if (this.readyState == 4 )
		    if (this.status == 200) {
			
			var data = JSON.parse (this.responseText);
			console.log(data);
			var html= "";
			
			html += "<div class='divTable d'>";
			html += "<div class='divTableHeading'>";
			html += "<div class='divTableRow'>";
			html += "<div class='divTableHead'> UserID</div>";
			html += "<div class='divTableHead'>Username</div>";
			html += "<div class='divTableHead'>Password</div>";
			html += "<div class='divTableHead'>Name</div>";
			html += "<div class='divTableHead'>Mail</div>";
			html += "<div class='divTableHead'>Popularity</div>";
			html += "<div class='divTableHead'>Mood</div>";
			html += "<div class='divTableHead'>Health</div>";
			html += "<div class='divTableHead'>Knowledge</div>";
			html +="</div>";
			html +="</div>";
			
			for (var a=0; a < data.length; a++){
				var userid = data[a]["client"].UserID;
				var username = data[a]["client"].UserUsername;
				var name = data[a]["client"].UserName;
				var mail = data[a]["client"].UserEmail;
				var pasw = data[a]["client"].UserPassword;
				
				html += "<div class='divTableRow'>";
				html += "<div class='divTableCell'>" + userid + "</div>";
				html += "<div class='divTableCell'>" + username + "</div>";
				html += "<div class='divTableCell'>" + pasw + "</div>";
				html += "<div class='divTableCell'>" + name + "</div>";
				html += "<div class='divTableCell'>" + mail + "</div>";
				if(typeof data[a]["stats"] !== "undefined"){
					var pop=data[a]["stats"]. Popularity;
					var mood= data[a]["stats"].Mood;
					var heal= data[a]["stats"].Health;
					var know = data[a]["stats"].Knowledge;
				html += "<div class='divTableCell'>" + pop + "</div>";
				html += "<div class='divTableCell'>" + mood + "</div>";
				html += "<div class='divTableCell'>" + heal + "</div>";
				html += "<div class='divTableCell'>" + know+ "</div>";}
				else{
					html += "<div class='divTableCell'></div>";
				html += "<div class='divTableCell'></div>";
				html += "<div class='divTableCell'></div>";
				html += "<div class='divTableCell'></div>";
				}
				html += "</div>";	
			
			}
			html +="</div>";
			
			document.getElementById("content").innerHTML=html;
			
		}
		
	};
}
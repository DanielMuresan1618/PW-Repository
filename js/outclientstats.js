var ajax = new XMLHttpRequest();
var method = "GET";

var url = "../php/importclientstats.php";
var asynchronous = true;
ajax.open(method,url,asynchronous);
ajax.send();
	ajax.onreadystatechange = function(){
	if (this.readyState == 4)
		if (this.status == 200){
			var data = JSON.parse(this.responseText);
			
			document.getElementsByClassName("userstats")[0].innerHTML = data.Popularity;
			document.getElementsByClassName("userstats")[1].innerHTML = data.Mood;
			document.getElementsByClassName("userstats")[2].innerHTML = data.Health;
			document.getElementsByClassName("userstats")[3].innerHTML = data.Knowledge;
			
	}}
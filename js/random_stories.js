var ajax = new XMLHttpRequest();
var method = "GET";
var url = "../php/random_stories.php";
var asynchronous = true;
var data;
ajax.open(method,url,asynchronous);
ajax.send();
ajax.onreadystatechange = function(){
if (this.readyState == 4)
	if (this.status == 200){
	data = JSON.parse (this.responseText);
	document.getElementById('container_story_text').innerHTML = data[0].Story;
	var html ="<div class = 'container_story' id='container_story_decisions_b1'>";
	html +="<button onclick='f1()'>Alege Varianta1</button></div>";
	html +="<div class = 'container_story' id='container_story_decisions_b2'>";
	html +="<button onclick = 'f2()'>Alege Varianta2</button></div>";
	html +="<div id='container_story_counter'></div>";
	document.getElementById('container_story_decisions').innerHTML = html;
	}
}

function f1(){
	window.location.assign ("../php/action.php?c="+1+"&id="+data[0].StoryID);
}

 function f2(){
	window.location.assign ("../php/action.php?c="+2+"&id="+data[0].StoryID);
}
 
 window.onload = function(){
	 //setTimeout(function(){
   var ajax = new XMLHttpRequest();
		ajax.open("GET","php/givesession.php",true);
		ajax.send();
		ajax.onreadystatechange = function(){
		if (this.readyState == 4 )
			if(this.status == 200){
				var data1 = JSON.parse (this.responseText);
			    document.getElementById("container_story_counter").innerHTML= data1 + "/10";
			}
		}
	//}, 2000);
		
	 
}
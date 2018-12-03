function delstory(a){
	var storyid = document.getElementsByClassName("divTableRow")[a+1].getElementsByClassName("divTableCell")[0].innerHTML;
	 window.location = 'php/deletestory.php?del='+storyid;
}
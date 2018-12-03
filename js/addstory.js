var mysql = require('mysql');

var con1 = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "stories"
});
var con2 = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "statstable1"
});
var con3 = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "statstable2"
});
var sql;
function addStoryF(){
	con1.connect(function(err) {
	  if (err) throw err;
	  console.log("Connected!");
	  var story = document.getElementById("story_inp").value;
	  
	   sql = "INSERT INTO stories (Story) VALUES (story)";
	  con1.query(sql, function (err, result) {
		if (err) throw err;
		console.log("1 record inserted");
	  });
	});
	
	con2.connect(function(err) {
	  if (err) throw err;
	  console.log("Connected!");
	  var pop1 = document.getElementById("pop1_o").value;
	  var hlt1 = document.getElementById("health1_o").value;
	  var mod1= document.getElementById("Mood1_o").value;
	  var kno1= document.getElementById("Knowledge1_o").value;
	  var sql = "INSERT INTO statstable1 (Popularity,Mood, Health, Knowledge) VALUES (pop1, hlt1, mod1, kno1)";
	  con2.query(sql, function (err, result) {
		if (err) throw err;
		console.log("1 record inserted");
	  });
	});
	con3.connect(function(err) {
	  if (err) throw err;
	  console.log("Connected!");
	  
	  var pop2 = document.getElementById("pop2_o").value;
	  var hlt2 = document.getElementById("health2_o").value;
	  var mod2= document.getElementById("Mood2_o").value;
	  var kno2= document.getElementById("Knowledge2_o").value;
	  var sql = "INSERT INTO statstable2 (Popularity,Mood, Health, Knowledge) VALUES (pop2, hlt2, mod2, kno2)";
	  
	  con3.query(sql, function (err, result) {
		if (err) throw err;
		console.log("1 record inserted");
	  });
	});
}// asta este conexiune - insertul};
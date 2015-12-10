//Light Schedule form validator
function ValidateRelays(){
var x = document.getElementById("schedule1Yes").checked == false;
var y = document.getElementById("schedule1No").checked == false; 
if (x && y) {
	alert("Please check Off or On for relay 1");
	return false;
}
x = document.getElementById("schedule2Yes").checked == false;
y = document.getElementById("schedule2No").checked == false; 
if (x && y) {
	alert("Please check Off or On for relay 2");
	return false;
}
x = document.getElementById("schedule3Yes").checked == false;
y = document.getElementById("schedule3No").checked == false; 
if (x && y) {
	alert("Please check Off or On for relay 3");
	return false;
}
x = document.getElementById("schedule4Yes").checked == false;
y = document.getElementById("schedule4No").checked == false; 
if (x && y) {
	alert("Please check Off or On for relay 4");
	return false;
}
x = document.getElementById("schedule5Yes").checked == false;
y = document.getElementById("schedule5No").checked == false; 
if (x && y) {
	alert("Please check Off or On for relay 5");
	return false;
}
x = document.getElementById("schedule6Yes").checked == false;
y = document.getElementById("schedule6No").checked == false; 
if (x && y) {
	alert("Please check Off or On for relay 6");
	return false;
}
x = document.getElementById("schedule7Yes").checked == false;
y = document.getElementById("schedule7No").checked == false; 
if (x && y) {
	alert("Please check Off or On for relay 7");
	return false;
}
x = document.getElementById("schedule8Yes").checked == false;
y = document.getElementById("schedule8No").checked == false; 
if (x && y) {
	alert("Please check Off or On for relay 8");
	return false;
}
alert("Successful submission!");
}
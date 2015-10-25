function validateTemp() {
    var x = document.forms["temp"]["temp"].value;
    if (x == null || x == "") {
        alert("Temeperature must be filled out");
        return false;
    }
	else if (isNaN(x)) {
		alert("Please enter a number");
		return false;
	}
}
function validateColor() {
	var x = document.forms["lightColor"]["lights"].value;
    if (x == null || x == "") {
        alert("Color must be selected");
        return false;
    }
} 
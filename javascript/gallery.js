function crosshair() {
    document.getElementById("myP1").style.cursor = "crosshair";
	document.getElementById("myP2").style.cursor = "crosshair";
	document.getElementById("myP3").style.cursor = "crosshair";
	document.getElementById("myP4").style.cursor = "crosshair";
	document.getElementById("myP5").style.cursor = "crosshair";
	document.getElementById("myP6").style.cursor = "crosshair";
}
function loadGallery() {
    alert("Enjoy the Gallery!!!");
}

function changeImage1() {
    var image = document.getElementById('myP1');
    if (image.src.match("relaywiring")) {
        image.src = "Gallery/aqua.jpg";
    } else {
        image.src = "Gallery/relaywiring.jpg";
    }
}
	
	function changeImage2() {
    var image = document.getElementById('myP2');
    if (image.src.match("Box")) {
        image.src = "Gallery/greenhouse.jpg";
    } else {
        image.src = "Gallery/Box.jpg";
    }
}
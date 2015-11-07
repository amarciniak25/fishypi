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

function changeImage3() {
    var image = document.getElementById('myP3');
    if (image.src.match("Outlets")) {
        image.src = "Gallery/home.jpg";
    } else {
        image.src = "Gallery/Outlets.jpg";
    }
}
function changeImage4() {
    var image = document.getElementById('myP4');
    if (image.src.match("relayboard")) {
        image.src = "Gallery/systems.jpg";
    } else {
        image.src = "Gallery/relayboard.jpg";
    }
}
function changeImage5() {
    var image = document.getElementById('myP5');
    if (image.src.match("systeminaction")) {
        image.src = "Gallery/fish.jpg";
    } else {
        image.src = "Gallery/systeminaction.jpg";
    }
}
function changeImage6() {
    var image = document.getElementById('myP6');
    if (image.src.match("aquarium")) {
        image.src = "Gallery/fish2.jpg";
    } else {
        image.src = "Gallery/aquarium.jpg";
    }
}

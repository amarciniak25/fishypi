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
	var image2 = document.getElementById('imgBig');
    if (image.src.match("relaywiring")) {
        image.src = "Gallery/aqua.jpg";
		image2.src = "Gallery/aqua.jpg"
    } else {
        image.src = "Gallery/relaywiring.jpg";
		image2.src = "Gallery/relaywiring.jpg";
    }
}
	
	function changeImage2() {
    var image = document.getElementById('myP2');
	 var image2 = document.getElementById('imgBig');
    if (image.src.match("Box")) {
        image.src = "Gallery/greenhouse.jpg";
		image2.src = "Gallery/greenhouse.jpg"
    } else {
        image.src = "Gallery/Box.jpg";
		image2.src = "Gallery/Box.jpg";
    }
}

function changeImage3() {
    var image = document.getElementById('myP3');
	var image2 = document.getElementById('imgBig');
    if (image.src.match("Outlets")) {
        image.src = "Gallery/home.jpg";
		image2.src = "Gallery/home.jpg";
		
    } else {
        image.src = "Gallery/Outlets.jpg";
		image2.src = "Gallery/Outlets.jpg";
    }
}
function changeImage4() {
    var image = document.getElementById('myP4');
	var image2 = document.getElementById('imgBig');
    if (image.src.match("relayboard")) {
        image.src = "Gallery/systems.jpg";
		image2.src = "Gallery/systems.jpg";
		
    } else {
        image.src = "Gallery/relayboard.jpg";
		image2.src = "Gallery/relayboard.jpg";
    }
}
function changeImage5() {
    var image = document.getElementById('myP5');
	var image2 = document.getElementById('imgBig');
    if (image.src.match("systeminaction")) {
        image.src = "Gallery/fish.jpg";
		image2.src = "Gallery/fish.jpg";
    } else {
        image.src = "Gallery/systeminaction.jpg";
		image2.src = "Gallery/systeminaction.jpg";
    }
}
function changeImage6() {
    var image = document.getElementById('myP6');
	var image2 = document.getElementById('imgBig');
    if (image.src.match("aquarium")) {
        image.src = "Gallery/fish2.jpg";
		image2.src = "Gallery/fish2.jpg";
    } else {
        image.src = "Gallery/aquarium.jpg";
		image2.src = "Gallery/aquarium.jpg";
    }
}

//function showImage2(){
//	var image = document.getElementById('imgBig');
//	image.src = "Gallery/relayboard.jpg";
//}
$(document).ready(function(){
$("#myP2").hover(function(){
		if (document.getElementById('myP2').src.match("Box")) {
			$("#imgBig").attr ("src","Gallery/Box.jpg" );
		} else {
			$("#imgBig").attr ("src","Gallery/greenhouse.jpg" );
		}
	},function(){
		$("#imgBig").attr("src", "Gallery/Instructions.jpg" );
	});
	});
$(document).ready(function(){
	$("#myP1").hover(function(){
		if (document.getElementById('myP1').src.match("relaywiring")) {
			$("#imgBig").attr ("src","Gallery/relaywiring.jpg" );
		} else {
			$("#imgBig").attr ("src","Gallery/aqua.jpg" );
		}
	},function(){
		$("#imgBig").attr("src", "Gallery/Instructions.jpg" );
	});
});

$(document).ready(function(){
$("#myP3").hover(function(){
		if (document.getElementById('myP3').src.match("Outlets")) {
			$("#imgBig").attr ("src","Gallery/Outlets.jpg" );
		} else {
			$("#imgBig").attr ("src","Gallery/home.jpg" );
		}
	},function(){
		$("#imgBig").attr("src", "Gallery/Instructions.jpg" );
	});
	});
	
$(document).ready(function(){
$("#myP4").hover(function(){
		if (document.getElementById('myP4').src.match("relayboard")) {
			$("#imgBig").attr ("src","Gallery/relayboard.jpg" );
		} else {
			$("#imgBig").attr ("src","Gallery/systems.jpg" );
		}
	},function(){
		$("#imgBig").attr("src", "Gallery/Instructions.jpg" );
	});
	});
	
$(document).ready(function(){
$("#myP5").hover(function(){
		if (document.getElementById('myP5').src.match("systeminaction")) {
			$("#imgBig").attr ("src","Gallery/systeminaction.jpg" );
		} else {
			$("#imgBig").attr ("src","Gallery/fish.jpg" );
		}
	},function(){
		$("#imgBig").attr("src", "Gallery/Instructions.jpg" );
	});
	});
	
	$(document).ready(function(){
$("#myP6").hover(function(){
		if (document.getElementById('myP6').src.match("aquarium")) {
			$("#imgBig").attr ("src","Gallery/aquarium.jpg" );
		} else {
			$("#imgBig").attr ("src","Gallery/fish2.jpg" );
		}
	},function(){
		$("#imgBig").attr("src", "Gallery/Instructions.jpg" );
	});
	});
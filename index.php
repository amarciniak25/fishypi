<!DOCTYPE html>
<html>

<head>
  <title>Fishy Pi</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css"/>
</head>

<body>

	<div id = "header">
		<h1>Fishy Pi</h1>
		</div>
		<div id = "developer">
		<p>Developer: Yuliya Atrasevich</p>
		</div>
	<?php $currentPage=basename($_SERVER['PHP_SELF']);?>
	
	<?php include("menu.php"); ?>
	
	<div id ="main">
	<h3>What is Aquaponics?</h3>
	<p>The web application is for remote management of aquaponics system.</p> 
	<p>Aquaponics is a method of agriculture that is more space and water efficient than traditional agriculture methods. 
	It is used to raise food fish while growing vegetables or fruits.</p>
	<img src="fish.jpg" alt="Fish">
	<p>Aquaponics is a system for farming fish and plants together in a mutually beneficial cycle. Fish produce wastes that turn 
	into nitrates and ammonia. These aren't good for the fish if they build up too much, but they're great fertilizer for plants.
	As the plants suck up these nutrients, they purify the water, which is good for the fish. Many cultures have made use of this 
	cycle to grow better crops and nurture the fish as an additional food source. Rice paddies in the China and Thailand have used 
	aquaponic techniques for years. The Aztecs developed a system of building floating islands for food-plants such as maize and squash. 
	Fish propagated around the islands, leaving their waste on the lake bottom, where it could be collected to fertilize the plants.</p>
	<p>Modern aquaponics is slightly more high-tech, but it's still an efficient and environmentally friendly way to produce food. 
	Fish are kept in large tanks and the plants are grown hydroponically; that is, without soil. They are planted in beds with a little gravel or clay and their roots hang down into the water.
	The water is cycled through the system, so that it collects the "waste" from the fish; then it’s pumped to the plant beds, where it is filtered naturally by the plants and can then be returned to the fish tanks. 
	Unlike traditional farming methods, no chemical fertilizers are needed for the plants: they all come from the fish-waste. It also tends to be organic, because the use of pesticides would be damaging to the fish.</p>
    <p>Once the system is set up, only a little extra water is needed to make up for evaporation, because the same water is constantly recycled. This is a great improvement on traditional plant-growing, which consumes a lot of water.
	Many types of plants can be grown in aquaponic farms (whether commercial- or home-sized), especially leafy plants and herbs. The most commonly used fish is tilapia, although many others are also suitable.</p>
	<span class = "source">Source:
	<a href = "http://home.howstuffworks.com/lawn-garden/professional-landscaping/alternative-methods/what-is-aquaponics.html" target="_blank"> How stuff works, Home and Garden.What is aquaponics?</a>
	</span>
	
	</div>
	
	<div id ="footer">
	
		<a href="http://validator.w3.org/check?uri=referer">Validate HTML</a> 
		<a href="http://jigsaw.w3.org/css-validator/check/referer">Validate CSS</a>
	
	</div>
</body>


</html>
<!DOCTYPE html>
<html>
	
<?php
include('header.html');
?>

<body>
		<!-- Below is the menubar, note: menubar is different for each page (class = selected)-->
	<?php
	include('mainmenu.html');
	?>
		<!-- End of the menubar-->

		<!-- div for image banner or image gallery (insert background image)-->
		<div id="banneryogurt">
		  <h1>Frozen Yogurt</h1>
		</div>
		<!-- End of div-->
        
	
	<!-- section for yogurt flavors-->
	<div id = 'yogurtflavors'>
	<div id = 'yogurtprice'>
		<h4>49 cents per ounce</h4>
	</div>	
		<h2>Flavors:</h2>
    <img src="../image/flavors-assets/Layer1.png" alt="greentea"/>
    <img src="../image/flavors-assets/Layer2.png" alt="pumpkin"/>
    <img src="../image/flavors-assets/Layer3.png" alt="blueberry"/>
    <img src="../image/flavors-assets/Layer4.png" alt="camramel"/>
    <img src="../image/flavors-assets/Layer5.png" alt="strawberry"/>
    <img src="../image/flavors-assets/Layer6.png" alt="cheesecake"/>
    <img src="../image/flavors-assets/Layer7.png" alt="taro"/>
    <img src="../image/flavors-assets/Layer8.png" alt="coconut"/>
    <img src="../image/flavors-assets/Layer9.png" alt="mango"/>
    <img src="../image/flavors-assets/Layer10.png" alt="cookiecream"/>
    <img src="../image/flavors-assets/Layer11.png" alt="vanila"/>
    <img src="../image/flavors-assets/Layer12.png" alt="plain"/>
    <img src="../image/flavors-assets/Layer13.png" alt="pinaple"/>
    <img src="../image/flavors-assets/Layer14.png" alt="chocolate"/>
    <img src="../image/flavors-assets/Layer15.png" alt="banana"/> </div>
		
		<!-- section for yogurt toppings-->
	<div id = 'yogurttopping'>
		<h2>Toppings:</h2>
	  <img src="../image/candies.png" alt="candies"/>
		<p>Chocolate chips, white chocolate chips, Reese’s Pieces, Sunflower, Plain M&amp;M’s
		   Peanuts, Chocolate Sprinkles, Nutella, Rainbow sprinkles</p>
	  <img src="../image/cookie.png" alt="cookies"/>
		<p>Oreo, Gummy worms, Skittles, Jelly beans, Granola, Cookie dough,  Strawberries
		 Mangos, Cherries, Peaches, Kiwi</P>
		<img src="../image/fruits.png" alt="fruits"/>
		<p>Chocolate syrup, Caramel, Whipped Cream, Strawberry Syrup</p>
	</div>


	<!-- below section for special dietary info-->
<?php
include('dietary.html');
?>

<?php
include('footer.html');
?>

</body>

</html>
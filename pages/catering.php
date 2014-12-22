<!DOCTYPE html>
<html>

<?php
include('header.html');
?>

<body>
	<!-- Below is the menubar, note: menubar is different for each page (class selected)-->
	<?php
	include('mainmenu.html');
	?>
	<!-- End of the menubar-->

	<!-- div for image banner or image gallery (insert background image)-->
	<div id="cateringbanner">
		<h1>Catering</h1>
	</div>
	<!-- End of div-->
	
	<p class="cateringinfo">
		Let TeaTime cater your next event! <br>
		To make a catering request, please fill out the form below.
	</p>

<!-- Catering Contact Form-->
<!-- need to make the form functional -->

<form action="cateringecho.php" method="GET" id="form"> 
	<div id="clientcontainer">
		<h2>Client Information</h2>
		<div>
			<label for="name" class="formgroup">Name<u class="req">*</u></label><br>
			<input name="name" id="name" type="text" size="40" placeholder="First and Last Name" required />
		</div>
		
		<div>
			<label for="organization" class="formgroup">Business/Organization</label><br>
			<input name="organization" id="organization" type="text" size="40" placeholder="Optional"/>
		</div>
		
		<div>
			<label for ="email" class= "formgroup">Email<u class="req">*</u></label><br>
			<input name="email" type="email" required="required" id="email" size="40" placeholder="user@mydomain.com" maxlength="254">
		</div>
		
		<div>
			<label for ="phone" class= "formgroup">Phone Number<u class="req">*</u></label><br>
			<input name="phone" type="text" required="required" id="phone" size="40" maxlength="15" placeholder="555-555-5555">
		</div>
		<div>
			<label for="howcontact" class="formgroup">How would you like us to contact you?</label><br>
			<input type="radio" name="howcontact" id="howcontact" value="byphone" >By phone <br>
			<input type="radio" name="howcontact" value="byemail">By email
		</div>
		<div>
			<label for="how" class="formgroup">How did you hear about TeaTime?</label><br>
			<input name="how" type="text" id="how" size="40" maxlength="70" placeholder="Optional">
		</div>
	</div>
	
	<div id="eventcontainer">
		<h2>Event Information</h2>
		<div>
			<label for="month" class="formgroup">Event Date<u class="req">*</u></label><br>
			<select name="month" id="month">
				<option value="month">Month</option>
				<option value="Jan">Jan</option>
				<option value="Feb">Feb</option>
				<option value="Mar">Mar</option>
				<option value="Apr">Apr</option>
				<option value="May">May</option>
				<option value="Jun">Jun</option>
				<option value="Jul">Jul</option>
				<option value="Aug">Aug</option>
				<option value="Sep">Sep</option>
				<option value="Oct">Oct</option>
				<option value="Nov">Nov</option>
				<option value="Dec">Dec</option>
			</select>
			
			<select name="day" id="day">
				<option value="day">Day</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
			</select>
			<select name="year" id="year">
				<option value="year">Year</option>
				<option value="2014">2014</option>
				<option value="2015">2015</option>
				<option value="2016">2016</option>
			</select>
		</div>
		
		<div>
			<label for="guest" class="formgroup">Approximate Guest Count<u class="req">*</u></label><br>
			<input type="number" id="guest" name="guest" placeholder="Enter a number" required>
			
		</div>
		<div>
			<label for="optioniced" class="formgroup">What kind of food are you interested in serving?<u class="req">*</u><br>(Check all that apply)</label><br>
			<input type="checkbox" id="optioniced" name="optioniced" value="optioniced">Iced Tea<br>
			<input type="checkbox" id="optionhot" name="optionhot" value="optionhot">Hot Tea<br>
			<input type="checkbox" id="optionflavored" name="optionflavored" value="optionflavored">Flavored Tea<br>
			<input type="checkbox" id="optionyogurt" name="optionyogurt" value="optionyogurt">Frozen Yogurt<br>
		</div>
		<div>
			<label for="address" class="formgroup">Event Address<u class="req">*</u></label><br>
			<textarea name="address" cols="42" maxlength="50" id="address" placeholder="Street Address, City, State, Zip" required></textarea><br>
		</div>
	
		<div>
			<label for="message" class="formgroup">Additional information about the event<u class="req">*</u></label><br>
			<textarea name="message" id="message" cols="42" rows="6"
				placeholder="Please provide more details about your catering order here." required></textarea>
		</div>
	</div>

	<div class="submit">
	<input type="submit" name="submit" id="submit" value="Send My Request" />
	</div>

</form>

	<?php
	include('footer.html');
	?>




</body>

</html>
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
	

<?php
    $success = FALSE;
    $nameerror = "";
    $organizationerror = "";
    $emailerror = "";
    $phoneerror = "";
    $howcontacterror = "";
    $howerror = "";
    $montherror = "";
    $dayerror = "";
    $yearerror = "";
    $guestnumerror = "";
    $optionerror = "";
    $addresserror = "";
    $messageerror = "";
    
    function get_if_set($fieldname) {
        if ( isset($_GET[$fieldname]) ) {
            return $_GET[$fieldname];
        } 
        return "";
    }
    $name = htmlspecialchars(trim(get_if_set("name")));
    $organization = htmlspecialchars(trim(get_if_set("organization")));
    $email = htmlspecialchars(trim(get_if_set("email")));
    $phone = htmlspecialchars(get_if_set("phone"));
    $howcontact = get_if_set("howcontact");
    $how = htmlspecialchars(get_if_set("how"));
    $month = get_if_set("month");
    $day = get_if_set("day");
    $year = get_if_set("year");
    $guestnum = htmlspecialchars(get_if_set("guest"));   
    $optioniced = get_if_set("optioniced");
    $optionhot = get_if_set("optionhot");
    $optionflavored = get_if_set("optionflavored");
    $optionyogurt = get_if_set("optionyogurt");  
    $address = htmlspecialchars(trim(get_if_set("address")));
    $message = htmlspecialchars(trim(get_if_set("message")));

    
    if ( isset($_GET["submit"]) ) {
        if ($name==""){
            $nameerror = "<div class='error' id='nameerror'>Please enter your name</div>";
        }
        if (strlen($name) > 70) {
            $nameerror = "<div class='error' id='nameerror'>Your input is too long!</div>";
        }
        if ($organization!="" && (strlen($organization) > 200)){
            $organizationerror = "<div class='error' id='organizationerror'>Your input is too long!</div>";
        }
        if ( ! filter_var($email, FILTER_VALIDATE_EMAIL)  ) {
            $emailerror = "<div class='error' id='emailerror'>Please enter a valid email address</div>";
        }
        if (strlen($email) > 254) {
            $emailerror = "<div class='error' id='emailerror'>Enter a shorter email address</div>";
        }
        function validate_phone_number( $phone ) {
            if (preg_match( '/^[+]?([\d]{0,3})?[\(\.\-\s]?([\d]{3})[\)\.\-\s]*([\d]{3})[\.\-\s]?([\d]{4})$/', $phone ) ) {
                return TRUE;
            } else {
                return FALSE;
            }
        }
        if (!validate_phone_number($phone)){
            $phoneerror = "<div class='error' id='numbererror'>Enter a valid 10-11 digit phone number</div>";
        }
        if (strlen($phone) > 15) {
            $phoneerror = "<div class='error' id='numbererror'>Enter a valid 10-11 digit phone number</div>";
        }
        if ($how!="" && (strlen($how) > 500)){
            $organizationerror = "<div class='error' id='organizationerror'>Your input is too long!</div>";
        }
        if ($month=="month"){
            $montherror = "<div class='error' id='montherror'>Please indicate the month of your event</div>";
        }
        if ($day=="day"){
            $dayerror = "<div class='error' id='dayerror'>Please indicate the day of your event</div>";
        }
        if ($year=="year"){
            $yearerror = "<div class='error' id='yearerror'>Please indicate the year of your event</div>";
        }
        if ($guestnum==""){
            $guestnumerror = "<div class='error' id='guestnumerror'>Please an approximate number of guests</div>";
        }
        if (!is_numeric($guestnum)){
            $guestnumerror = "<div class='error' id='guestnumerror'>Please a enter a number</div>";
        }
	if (($guestnum < 0)){
            $guestnumerror = "<div class='error' id='guestnumerror'>Please a enter a number greater than 0</div>";
        }
        if ($optioniced=="" && $optionhot=="" && $optionflavored=="" && $optionyogurt==""){
            $optionerror = "<div class='error' id='optionrror'>Please enter what you would like catered</div>";
        }
        if ($address==""){
            $addresserror = "<div class='error' id='addresserror'>Please enter an address</div>";
        }
        if (strlen($address) > 2000) {
            $addresserror = "<div class='error' id='addresserror'>Please enter an address shorter than 2000 characters</div>";
        }
        if ($message==""){
            $messageerror = "<div class='error' id='messageerror'>Please enter a message</div>";
        }
        if (strlen($message) > 2000) {
            $messageerror = "<div class='error' id='messageerror'>Please enter a message shorter than 2000 characters</div>";
        }
    }
    
    
    if (empty($nameerror) && empty($organizationerror) && empty($emailerror) && empty($phoneerror)
        && empty($howcontacterror) && empty($howerror) && empty($montherror) && empty($dayerror)
        && empty($yearerror) && empty($guestnumerror) && empty($optionerror) && empty($addresserror)
        && empty($messageerror)){
        $success = TRUE;
    }
    
    if ($success) {
        echo "<p class='cateringinfo'>Thank you for your request, $name! We will be in contact with you soon about catering your next event!</p>";
    }
    
    if (! $success){
        echo "<p class='cateringinfo'>There were problems with the submission.<br>Please fix the problems and try again.</p>";
        
        $byphoneselected = "";
        $byemailselected = "";
        if ($howcontact == "byphone"){
            $byphoneselected = "checked";
        }
        else if ($howcontact == "byemail"){
            $byemailselected = "checked";
        }
        
        
        $iced_checked = "";
        $hot_checked = "";
        $flavored_checked = "";
        $yogurt_checked = "";
        if ($optioniced != "") {
            $iced_checked = "checked";
        }  
        if ($optionhot != "") {
            $hot_checked = "checked";
        }
        if ($optionflavored != "") {
            $flavored_checked = "checked";
        }
        if ($optionyogurt != "") {
            $yogurt_checked = "checked";
        }
        
        echo <<< END_OF_FORM

<form action="cateringecho.php" method="GET" id="form"> 
	<div id="clientcontainer">
		<h2>Client Information</h2>
		<div>
			<label for="name" class="formgroup">Name<u class="req">*</u></label><br>
			<input name="name" id="name" type="text" size="40" value="$name" placeholder="First and Last Name" required />
                        $nameerror
		</div>
		
		<div>
			<label for="organization" class="formgroup">Business/Organization</label><br>
			<input name="organization" id="organization" type="text" size="40" value="$organization" placeholder="Optional"/>
                        $organizationerror
		</div>
		
		<div>
			<label for ="email" class= "formgroup">Email<u class="req">*</u></label><br>
			<input name="email" type="email" required="required" id="email" size="40" value="$email" placeholder="user@mydomain.com" maxlength="254">
                        $emailerror
                </div>
		
		<div>
			<label for ="phone" class= "formgroup">Phone Number<u class="req">*</u></label><br>
			<input name="phone" type="text" required="required" id="phone" size="40" maxlength="15" value="$phone" placeholder="555-555-5555">
                        $phoneerror
                </div>
		<div>
			<label for="howcontact" class="formgroup">How would you like us to contact you?</label><br>
			<input type="radio" name="howcontact" id="howcontact" value="byphone" $byphoneselected>By phone <br>
			<input type="radio" name="howcontact" value="byemail" $byemailselected>By email
		</div>
		<div>
			<label for="how" class="formgroup">How did you hear about TeaTime?</label><br>
			<input name="how" type="text" id="how" size="40" maxlength="70"  value="$how" placeholder="Optional">
                        $howerror
                </div>
	</div>
	
	<div id="eventcontainer">
		<h2>Event Information</h2>
		<div>
			<label for="month" class="formgroup">Event Date<u class="req">*</u></label><br>
			<select name="month" id="month">
				<option value=$month>$month</option>
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
				<option value=$day>$day</option>
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
				<option value=$year>$year</option>
				<option value="2014">2014</option>
				<option value="2015">2015</option>
				<option value="2016">2016</option>
			</select>
                        $montherror
                        $dayerror
                        $yearerror
		</div>
		
		<div>
			<label for="guest" class="formgroup">Approximate Guest Count<u class="req">*</u></label><br>
			<input type="number" id="guest" name="guest" value="$guestnum" required>
			$guestnumerror
		</div>
		<div>
			<label for="optioniced" class="formgroup">What kind of food are you interested in serving?<u class="req">*</u><br>(Check all that apply)</label><br>
			$optionerror<br>
			<input type="checkbox" id="optioniced" name="optioniced" value="optioniced" $iced_checked>Iced Tea<br>
			<input type="checkbox" id="optionhot" name="optionhot" value="optionhot" $hot_checked>Hot Tea<br>
			<input type="checkbox" id="optionflavored" name="optionflavored" value="optionflavored" $flavored_checked>Flavored Tea<br>
			<input type="checkbox" id="optionyogurt" name="optionyogurt" value="optionyogurt" $yogurt_checked>Frozen Yogurt<br>
		</div>
		<div>
			<label for="address" class="formgroup">Event Address<u class="req">*</u></label><br>
			<textarea name="address" cols="42" maxlength="50" id="address" value="$address" placeholder="Street Address, City, State, Zip" required>$address</textarea><br>
                        $addresserror
                </div>
	
		<div>
			<label for="message" class="formgroup">Additional information about the event<u class="req">*</u></label><br>
			<textarea name="message" id="message" cols="42" rows="6" value="$message"
				placeholder="Please provide more details about your catering order here." required>$message</textarea>
                    $messageerror
                </div>
	</div>

	<div class="submit">
	<input type="submit" name="submit" id="submit" value="Send My Request" />
	</div>

</form>
END_OF_FORM;
    }
?>

	<?php
	include('footer.html');
	?>




</body>

</html>
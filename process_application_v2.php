<?php
  // get the data from the form
    $firstName = $_POST['firstName'];
	$firstNameMatch = preg_match('/^[a-zA-Z\']+$/', $firstName);
	$lastName = $_POST['lastName'];
	$lastNameMatch = preg_match('/^[a-zA-Z\']+$/', $lastName);
    $email = $_POST['email'];
	$emailMatch = preg_match('/^[a-zA-Z0-9\.-\_]+@[a-zA-Z0-9\.-\_]+\.[a-z]{2,4}$/', $email);
    $studentID = $_POST['studentID'];
	$studentIDMatch = preg_match('/^((P|p)[0-9]{8}$|[0-9]{8}$)/', $studentID);
	$studentIDnoPMatch = preg_match('/^[0-9]{8}$/', $studentID);
	$address = $_POST['address'];
	$addressMatch = preg_match('/^[a-zA-Z0-9\. ]+$/', $address);
	$city = $_POST['city'];
	$cityMatch = preg_match('/^[a-zA-Z ]+$/', $city);
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$zipMatch = preg_match('/^([0-9]{5})\-?([0-9]{4})?$/', $zip);
	$phoneType = $_POST['phoneType'];
	$phone = $_POST['phone'];
	$phoneMatch = preg_match('/^\(?[0-9]{3}[\)\- ]*[0-9]{3}[\-]?[0-9]{4}$/', $phone);
	$phone2Type = $_POST['phone2Type'];
	$phone2 = $_POST['phone2'];
	$phone2Match = preg_match('/^\(?[0-9]{3}[\)\- ]*[0-9]{3}[\-]?[0-9]{4}$/', $phone2);
	$phone3Type = $_POST['phone3Type'];
	$phone3 = $_POST['phone3'];
	$phone3Match = preg_match('/^\(?[0-9]{3}[\)\- ]*[0-9]{3}[\-]?[0-9]{4}$/', $phone3);
	$majorDecision = $_POST['majorDecision'];
	$semDecision = $_POST['semDecision'];
	$year = $_POST['year'];
	$availDecision = $_POST['availDecision'];
	$days = isset($_POST['days']);
	$nights = isset($_POST['nights']);
	$weekEnds = isset($_POST['weekEnds']);
	$weekDays = isset($_POST['weekDays']);
	$mon1 = $_POST['mon1'];
	$mon2 = $_POST['mon2'];
	$tue1 = $_POST['tue1'];
	$tue2 = $_POST['tue2'];
	$wed1 = $_POST['wed1'];
	$wed2 = $_POST['wed2'];
	$thu1 = $_POST['thu1'];
	$thu2 = $_POST['thu2'];
	$fri1 = $_POST['fri1'];
	$fri2 = $_POST['fri2'];
	$sat1 = $_POST['fri1'];
	$sat2 = $_POST['fri2'];
	$sun1 = $_POST['fri1'];
	$sun2 = $_POST['fri2'];
	$oGPA = $_POST['oGPA'];
	$mGPA = $_POST['mGPA'];
	$gDate = $_POST['gDate'];
	$radioEmp = $_POST['radioEmp'];
	$employer = $_POST['employer'];
	$employerMatch = preg_match('/^[a-zA-Z\.\- ]+$/', $employer);
	$supervisor = $_POST['supervisor'];
	$supervisorMatch = preg_match('/^[a-zA-Z\' ]+$/', $supervisor);
	$conDecision = $_POST['conDecision'];
	$supContact = $_POST['supContact'];
	$supContactMatch = preg_match('/^(\(?[0-9]{3}[\)\- ]*[0-9]{3}[\-]?[0-9]{4}|[a-zA-Z0-9\.-\_]+@[a-zA-Z0-9\.-\_]+\.[a-z]{2,4})$/', $supContact);
	$wStatDecision = $_POST['wStatDecision'];

    // Set the timezone in which are running this application
    date_default_timezone_set('America/New_York');


    // validate inputs
    //first name
	if ( empty($firstName) ) {
        $error_message = 'First name is a required field.'; }
    else if ( $firstNameMatch != 1 )  {
        $error_message = 'Invalid first name.'; }
	//last name
	else if ( empty($lastName) ) {
		$error_message = 'Last name is a required field.'; }
	else if ( $lastNameMatch != 1 )  {
        $error_message = 'Invalid last name.'; }
    //email
	else if ( empty($email) ) {
        $error_message = 'Email is a required field.'; }
	else if ( $emailMatch != 1 )  {
        $error_message = 'Invalid email address.'; }
    //studentID
	else if ( empty($studentID) )  {
        $error_message = 'StudentID is a required field.'; }
    else if ( $studentIDMatch != 1 ) {
		$error_message = 'Invalid StudentID.'; }
	//address
	else if ( empty($address) )  {
        $error_message = 'Address is a required field.'; }
	else if ( $addressMatch != 1 ) {
		$error_message = 'Invalid address.'; }
	//city
	else if ( $cityMatch != 1) {
		$error_message = 'Invalid city.'; }
	//zip
	else if ( empty($zip) ) {
		$error_message = 'Zip code is a required field.'; }
	else if ( $zipMatch != 1 ) {
		$error_message = 'Invalid zip.'; }
	//phone
	else if ( empty($phone) ) {
		$error_message = 'Your phone number is a required field.'; }
	else if ( $phoneMatch != 1 ) {
		$error_message = 'Invalid phone.'; }
	//majorDecision
	else if ( empty($majorDecision) ) {
		$error_message = 'You must select a major.'; }
	//semDecision
	else if ( empty($semDecision) ) {
		$error_message = 'You must select a semester for the internship.' ; }
	//year
	else if ( empty($year)  ) {
        $error_message = 'You must select a year for the internship.'; }
	//oGPA
	else if ( empty($oGPA) ) {
		$error_message = 'You must provide an overall GPA.'; }
	else if ( !is_numeric($oGPA)  ) {
        $error_message = 'Your overall GPA must be a valid number.'; }
	else if ( $oGPA < 0.0 || $oGPA > 4.0  ) {
        $error_message = 'Your overall GPA must be greater than 0.0 and less than or equal to 4.0.'; }
	else if ( $oGPA > 0.0 && $oGPA < 2.0 ) {
        $error_message = 'Your overall GPA is too low for the internship program!'; }
	//mGPA
	else if ( empty($mGPA) ) {
		$error_message = 'You must provide a major GPA.'; }
	else if ( !is_numeric($mGPA)  ) {
        $error_message = 'Your major GPA must be a valid number.'; }
	else if ( $mGPA < 0.0 || $mGPA > 4.0  ) {
        $error_message = 'Your major GPA must be greater than 0.0 and less than or equal to 4.0.'; }
	else if ( $mGPA > 0.0 && $mGPA < 2.0 ) {
		$error_message = 'Your major GPA is too low for the internship program!'; }
	//gDate
	else if ( empty($gDate) ) {
		$error_message = 'You must supply an expected graduation date.'; }
	//employer
	//else if ( $employerMatch != 1 ) {
		//$error_message = 'Invalid employer.'; }
	//wStatDecision
	else if ( empty($wStatDecision) ) {
		$error_message = 'You must select a working status.'; }
		
    // set error message to empty string if no invalid entries
    else {
        $error_message = ''; }
		
	//phone2
	if ( !empty($phone2) ) {
		if ( $phone2Match != 1 ) {
			$error_message = 'Invalid phone2.'; }
	}
	//phone3
	if ( !empty($phone3) ) {
		if ( $phone3Match != 1 ) {
			$error_message = 'Invalid phone3.'; }
	}
	
	//employer
	if ( !empty($employer) ) {
		if ( $employerMatch != 1 ) {
			$error_message = 'Invalid employer.'; }
	}
	
	//supervisor
	if ( !empty($supervisor) ) {
		if ( $supervisorMatch != 1 ) {
			$error_message = 'Invalid supervisor name.'; }
	}
	
	//supContact
	if ( !empty($supContact) ) {
		if ( $supContactMatch != 1 ) {
			$error_message = 'Invalid supervisor contact.'; }
	}
	
	//Add a P to the student ID if none was supplied
	if ( $studentIDMatch === 1 ) {
		if ( $studentIDnoPMatch === 1 ) {
			//$tempString = $studentID
			$studentID = preg_replace('/^[0-9]{8}$/', "P" . $studentID, $studentID);
		}
	}

    // if an error message exists, go to the index page
    if ($error_message != '') {
        include('../index.php');
        exit();
    }
?>
<?php
include('../view/header.php');
?>
<body>
    <div id="content">
        <h1>BCT Internship Application Processing</h1>

        <h3>Contact Info</h3> <br/>
		<label>First Name:</label>
        <!--ensure that firstName isset-->
		<!--ensure that firstName is some combination of letters and basic symbols, no numbers and not all symbols-->
		<span><?php echo $firstName; ?></span><br />
		
		<label>Last Name:</label>
		<!--ensure that lastName isset-->
		<!--ensure that lastName is some combination of letters and basic symbols, no numbers and not all symbols-->
        <span><?php echo $lastName; ?></span><br />

        <label>Email:</label>
		<!--ensure that email isset-->
		<!--ensure that email is [a-zA-z0-9\.-\_]+@[a-zA-Z0-9\.-\_]+.[a-z]{1,4}-->
        <span><?php echo $email; ?></span><br />

        <label>Student ID:</label>
		<!--ensure that studentID isset-->
		<!--ensure that studentID is P[0-9]{8}-->
		<!--if studentID is [0-9]{8} with no P, concatenate [0-9]{8} to P-->
        <span><?php echo $studentID; ?></span><br />
		
		<label>Address:</label>
		<!--ensure that address is [a-zA-Z0-9. ]+-->
        <span><?php echo $address; ?></span><br />
		
		<label>City:</label>
		<!--ensure that city only contains letters, no numbers or symbols-->
        <span><?php echo $city; ?></span><br />
		
		<label>State:</label>
        <span><?php echo $state; ?></span><br />
		
		<label>Zip:</label>
		<!--ensure that zip is ([0-9]{5})\-?([0-9]{4})? -->
        <span><?php echo $zip; ?></span><br />
		
		<label>Phone #1 Type:</label>
        <span><?php echo $phoneType; ?></span><br />
		
		<label>Phone:</label>
		<!--ensure that phone is \(?[0-9]{3}[\)\- ]?[0-9]{3}\-[0-9]{4}-->
        <span><?php echo $phone; ?></span><br />
		
		<label>Phone #2 Type:</label>
        <span><?php echo $phone2Type; ?></span><br />
		
		<label>Phone2:</label>
		<!--ensure that phone2 is \(?[0-9]{3}[\)\- ]?[0-9]{3}\-[0-9]{4}-->
        <span><?php echo $phone2; ?></span><br />
		
		<label>Phone #3 Type:</label>
        <span><?php echo $phone3Type; ?></span><br />
		
		<label>Phone3:</label>
		<!--ensure that phone3 is \(?[0-9]{3}[\)\- ]?[0-9]{3}\-[0-9]{4}-->
        <span><?php echo $phone3; ?></span><br />
		
		<h3>Internship Info</h3> <br/>
		
		<label>Major:</label>
		<!--ensure that majorDecision isset-->
        <span><?php echo $majorDecision; ?></span><br />
		
		<label>Semester to Intern:</label>
		<!--ensure that semDecision isset-->
        <span><?php echo $semDecision; ?></span><br />
		
		<label>Proposed Internship Year:</label>
		<!--ensure that year isset-->
        <span><?php echo $year; ?></span><br />
		
		<label>Availability:</label><br />
		<!--ensure that availability isset-->
        <span><?php echo $availDecision; ?></span><br /><br />
		
		<label>Days (1 yes, blank no):</label><br />
		<span><?php echo $days; ?></span><br />
		
		<label>Nights (1 yes, blank no):</label><br />
		<span><?php echo $nights; ?></span><br />
		
		<label>Week-ends (1 yes, blank no):</label><br />
		<span><?php echo $weekEnds; ?></span><br />
		
		<label>Week-days (1 yes, blank no):</label><br />
		<span><?php echo $weekDays; ?></span><br /><br />
		
		<label>Detailed Availability:</label><br />
		<span><?php 
				echo 'Monday: '.$mon1.'-'.$mon2.'<br />';
				echo 'Tuesday: '.$tue1.'-'.$tue2.'<br />';
				echo 'Wednesday: '.$wed1.'-'.$wed2.'<br />';
				echo 'Thursday: '.$thu1.'-'.$thu2.'<br />';
				echo 'Friday: '.$fri1.'-'.$fri2.'<br />';
				echo 'Saturday: '.$sat1.'-'.$sat2.'<br />';
				echo 'Sunday: '.$sun1.'-'.$sun2.'<br />';
			  ?></span><br />
		
		<h3>Educational Info</h3> <br/>
		
		<label>Overall GPA:</label>
		<!--ensure that oGPA isset-->
		<!--ensure that oGPA is between 0.0 & 4.0-->
		<!--if oGPA is below 2.0 issue warning-->
        <span><?php echo $oGPA; ?></span><br />
		
		<label>Major GPA:</label>
		<!--ensure that mGPA isset-->
		<!--ensure that mGPA is between 0.0 & 4.0-->
		<!--if mGPA is below 2.0 issue warning-->
        <span><?php echo $mGPA; ?></span><br />
		
		<label>Expected Graduation Date:</label>
		<!--ensure that gDate isset-->
        <span><?php echo $gDate; ?></span><br />
		
		<h3>Employment Info</h3> <br/>
		
		<label>Use Current Employer:</label>
        <span><?php echo $radioEmp; ?></span><br />
		
		<label>Employer Name:</label>
		<!--ensure that employer is [a-zA-Z.- ]+-->
        <span><?php echo $employer; ?></span><br />
		
		<label>Supervisor Name:</label>
		<!--ensure that supervisor is [a-zA-Z' ]+-->
        <span><?php echo $supervisor; ?></span><br />
		
		<label>Employer Contact Type:</label>
        <span><?php echo $conDecision; ?></span><br />
		
		<label>Employer Contact Info:</label>
		<!--ensure that supContact is (\(?[0-9]{3}[\)\- ]?[0-9]{3}\-[0-9]{4}|[a-zA-z0-9\.-\_]+@[a-zA-Z0-9\.-\_]+.[a-z]{1,4}|[a-zA-Z0-9. ]+)-->
        <span><?php echo $supContact; ?></span><br />
		
		<h3>Citizenship Info</h3> <br/>
		
		<label>Working Status:</label>
		<!--ensure that wStatDecision isset-->
        <span><?php echo $wStatDecision; ?></span><br /><br />
		
		<a href="http://ps11.pstcc.edu/~c2530a06/intern/intern_app_lab5.php"><h3>Return to the application page.</h3></a>
    </div>
	<div id="content">
	<br />
	<span><?php echo 'This application was filed on '.date('m/d/Y').'.'; ?></span><br />
	</div>
<?php
include('../view/footer.php');
?>

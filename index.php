<?php
require('./view/header.php');
?>
<body>
<h1>BCT Internship Application</h1>
<?php if (!empty($error_message)) { ?>
    <p class="error"><?php echo $error_message; ?></p>
<?php } ?>
<!-- html stuff -->
<form method="post" action="http://ps11.pstcc.edu/~c2530a06/lab7/model/process_application_v2.php">
<!-- other stuff -->
<h2>Contact Info</h2>

First Name:
<input type="text" name="firstName" size="25px" value="<?php echo $_POST['firstName'];?>" />&nbsp;&nbsp;&nbsp;&nbsp;

Last Name:&nbsp;&nbsp;<input type="text" name="lastName" size="40px" value="<?php echo $_POST['lastName'];?>" />
<br/><br/>
Email:
<input type="text" name="email" value="<?php echo $_POST['email'];?>"/>&nbsp;&nbsp;&nbsp;&nbsp;
Student ID:&nbsp;&nbsp;
<input type="text" name="studentID" value="<?php echo $_POST['studentID'];?>" />
<br/><br/>
Street Address:&nbsp;&nbsp
<input type="text" name="address" size="100" value="<?php echo $_POST['address'];?>" />
<br/><br/>
City:&nbsp;&nbsp;<input type="text" name="city" value="<?php echo $_POST['city'];?>" />&nbsp;&nbsp;
<?php 
require('./util/state.php'); 
?>
Zip Code:&nbsp;&nbsp;<input type="text" name="zip" size="10" value="<?php echo $_POST['zip'];?>" />
<br/><br/>
Only one phone number is required, but adding more is appreciated for accessibility.
<br/><br/>
Phone #1 Type: 
<select name="phoneType">
<?php 
require('./util/phone.php'); 
?>
Phone #1 number: &nbsp;&nbsp;  
<input type="text" name="phone" value="<?php echo $_POST['phone'];?>" />
<br/><br/>
Phone #2 Type: 
<select name="phone2Type">
<?php 
require('./util/phone.php'); 
?>
Phone #2 number: &nbsp;&nbsp;  
<input type="text" name="phone2" value="<?php echo $_POST['phone2'];?>" />
<br/><br/>
Phone #3 Type: 
<select name="phone3Type">
<?php 
require('./util/phone.php'); 
?>
Phone #3 number: &nbsp;&nbsp;  
<input type="text" name="phone3" value="<?php echo $_POST['phone3'];?>" />
<br/><br/>

<h2>Internship Info</h2>

Please select your major (If you have more than one concentration, select only one for the internship): <br/>
<select name="majorDecision">
<option selected></option>
<option value="ACC">ACC</option>
<option value="CSITD">CSIT-D</option>
<option value="CSITN">CSIT-N</option>
<option value="CSITP">CSIT-P</option>
<option value="HSP">HSP</option>
<option value="MGT">MGT</option>
<option value="MKT">MKT</option>
<option value="APTBUS">APT/BUS</option>
<option value="APTHCOA">APT/HCOA</option>
</select>
<br/><br/>


Please select semester to intern: 
<select name="semDecision">
<option selected>
<option>Spring
<option>Summer
<option>Fall
</select>
&nbsp;&nbsp;&nbsp;&nbsp;

Enter the Year of Internship: &nbsp;&nbsp;
<input type="number" name="year" min="2013" max="2030" value="<?php echo $_POST['year'];?>"/>
<br/><br/>

Enter availability for internship (Select start and end times, leave blank if unknown):  <br/> <br/>

Part-time or Full-time: 
<select name="availDecision">
<option selected>
<option>Part-time
<option>Full-time 
</select>
<br/><br/>

Days, Nights, Week-ends or Week-days <br/>
<input type="checkbox" name="days"> Days &nbsp;&nbsp; <input type="checkbox" name="nights"> Nights &nbsp;&nbsp; <input type="checkbox" name="weekEnds"> Week-ends &nbsp;&nbsp; <input type="checkbox" name="weekDays"> Week-days
<br/><br/>

Detailed Availability (optional) <br/>

<p style="text-align:left;">Monday<br />
<select name="mon1">
<option selected></option>
<?php 
require('./util/avail.php'); 
?>
&nbsp;
<select name="mon2">
<option selected></option>
<?php 
require('./util/avail.php'); 
?>
</p>
<p style="text-align:left;">Tuesday<br />
<select name="tue1">
<option selected></option>
<?php 
require('./util/avail.php'); 
?>
&nbsp;
<select name="tue2">
<option selected></option>
<?php 
require('./util/avail.php'); 
?>
</p>
<p style="text-align:left;">Wednesday<br />
<select name="wed1">
<option selected></option>
<?php 
require('./util/avail.php'); 
?>
&nbsp;
<select name="wed2">
<option selected></option>
<?php 
require('./util/avail.php'); 
?>
</p>
<p style="text-align:left;">Thursday<br />
<select name="thu1">
<option selected></option>
<?php 
require('./util/avail.php'); 
?>
&nbsp;
<select name="thu2">
<option selected></option>
<?php 
require('./util/avail.php'); 
?>
</p>
<p style="text-align:left;">Friday<br />
<select name="fri1">
<option selected></option>
<?php 
require('./util/avail.php'); 
?>
&nbsp;
<select name="fri2">
<option selected></option>
<?php 
require('./util/avail.php'); 
?>
</p>
<p style="text-align:left;">Saturday<br />
<select name="sat1">
<option selected></option>
<?php 
require('./util/avail.php'); 
?>
&nbsp;
<select name="sat2">
<option selected></option>
<?php 
require('./util/avail.php'); 
?>
</p>
<p style="text-align:left;">Sunday<br />
<select name="sun1">
<option selected></option>
<?php 
require('./util/avail.php'); 
?>
&nbsp;
<select name="sun2">
<option selected></option>
<?php 
require('./util/avail.php'); 
?>
</p>
<h2>Educational Info</h2>

Enter your overall GPA:  
<input type="text" name="oGPA" value="<?php echo $_POST['oGPA'];?>" />
&nbsp;&nbsp;&nbsp;&nbsp;
Enter your major GPA: &nbsp;&nbsp; 
<input type="text" name="mGPA" value="<?php echo $_POST['mGPA'];?>" />
<br/><br/>
Enter your expected graduation date: <br/>
<input type="date" name="gDate" value="<?php echo $_POST['gDate'];?>"/>
<br/><br/>

<h2>Employment Info</h2>

(If not currently employed please leave the following section blank) <br/>

Use current employer for internship? <br/>
<input type="radio" name="radioEmp"/ value="yes">Yes &nbsp;&nbsp; <input type="radio" name="radioEmp" value="no" checked="checked"/>No
<br/><br/>

Employer Name: 
<input type="text" name="employer" value="<?php echo $_POST['employer'];?>" />
&nbsp;&nbsp;&nbsp;&nbsp;

Supervisor Name: &nbsp;&nbsp; 
<input type="text" name="supervisor" size="25px" value="<?php echo $_POST['supervisor'];?>" />
<br/><br/>

Contact type: 
<select name="conDecision">
<option selected>
<option>Phone
<option>Email
<option>IM
</select>
&nbsp;&nbsp;&nbsp;&nbsp;
Supervisor Contact Info: &nbsp;&nbsp;  
<input type="text" name="supContact" size="40px" value="<?php echo $_POST['supContact'];?>" />
<br/><br/>

(The employer/supervisor will be contacted to determine if your current employer is eligible to provide
a proper internship experience for you. You will be contacted when a decision has been reached.)

<h2>Citizenship Info</h2>
Working Status: <br/>
<select name="wStatDecision">
<option selected>US Citizen
<option>Permanent Resident/Green Card
<option>Student Visa
<option>Employment Authorization
</select>
<br/><br/>

<input type="submit" value="Submit Form">&nbsp;&nbsp;<input type="reset" value="Clear Form">
</form>
<br/><br/>

<a href=./view/intern_list.php><h3>View Intern List.</h3></a>
<?php
require('./view/footer.php');
?>

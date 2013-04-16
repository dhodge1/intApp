<?php
  require('../model/process_intern_list.php');
	include('header.php');
?>
<body>
<h1>Intern List</h1>
<table>
	<tr>
		<th>pID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Major</th>
		<th>Semester</th>
	</tr>
	<?php foreach ($intern_list as $intern) : ?>
	<tr>
		<td><?php echo $intern['pID']; ?></td>
		<td><?php echo $intern['firstName']; ?></td>
		<td><?php echo $intern['lastName']; ?></td>
		<td><?php echo $intern['email']; ?></td>
		<td><?php echo $intern['major']; ?></td>
		<td><?php echo $intern['semester']; ?></td>
	</tr>
	<?php endforeach; ?>
</table>
<br /> <br />
<a href="http://ps11.pstcc.edu/~c2530a06/intern/intern_app_lab5.php"><h3>Return to the application page.</h3></a>
<?php
	include('footer.php');
?>

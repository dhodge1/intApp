<?php
  require('../model/process_temp_list.php');
	include('header.php');
?>
<body>
<h1>IC User Approval List</h1>
<table>
	<tr>
		<th>Username</th>
		<th>Role</th>
		<th>&nbsp;</th>
	</tr>
	<?php foreach ($temp_list as $temp) : ?>
	<tr>
		<td><?php echo $temp['iUsername']; ?></td>
		<td><?php echo $temp['role']; ?></td>
		<td><form action="../model/approve_temp.php" method="post"
                              id="approve_temp_form">
                        <input type="hidden" name="username"
                               value="<?php echo $temp['iUsername']; ?>" />
                        <input type="hidden" name="password"
                               value="<?php echo $temp['iPassword']; ?>" />
					    <input type="hidden" name="role"
                               value="<?php echo $temp['role']; ?>" />
                        <input type="submit" value="Approve" />
        </form></td>
	</tr>
	<?php endforeach; ?>
</table>
<br /> <br />
<?php
	include('footer.php');
?>

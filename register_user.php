<?php
  require('header.php');
?>
<body>
        <div id="page">
            <div id="header">
                <h1>BCT Internship Registration</h1>
            </div>
            <div id="main">

            <h3>Register</h3>
			
			<?php if (!empty($error_message)) { ?>
				<p class="error"><?php echo $error_message; ?></p>
			<?php } ?>
            
            <form action="../model/process_register.php" method="post">
                <input type="hidden" name="action" value="login"/>

                <label>Username:</label>
                <input type="text" class="text" name="username" />
                <br /><br />

                <label>Password:</label>
                <input type="password" class="text" name="password" />
                <br /><br />
				
				<label>Role:</label>
                <input type="text" class="text" name="role" />
                <br /><br />

                <label>&nbsp;</label>
                <input type="submit" value="Login"/>
            </form>
            
            <p><?php echo $login_message; ?></p>
            
            </div><!-- end main -->
        </div><!-- end page -->
<?php
	require('footer.php');
?>

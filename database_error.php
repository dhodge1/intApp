<?php
  require('header.php');
?>

<!-- the body section -->
<body>
    <div id="page">
        <div id="header">
            <h1>BCTInternship Application</h1>
        </div>

        <div id="main">
            <h1>Database Error</h1>
            <p>There was an error connecting to the database.</p>
            <p>The database must be installed as described in the appendix.</p>
            <p>MySQL must be running as described in chapter 1.</p>
            <p>Error message: <?php echo $error_message; ?></p>
            <p>&nbsp;</p>
        </div><!-- end main -->

        <div id="footer">
            <p class="copyright">
                &copy; <?php echo date("Y"); ?> BCT Internship Application
            </p>
        </div>

    </div><!-- end page -->
<?php
	require('footer.php');
?>

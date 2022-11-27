<?php
	session_start();
?>
<!DOCTYPE html>
<html  xmlns="http://www.w3.org/1999/xhtml">

<!-- 
   using session attributes to control a multi-state
    application
   by:dao
   Latest modified: 10.21.2017 12:06AM
   adapted by:
   latest modified: 11/8/2017
-->

<head>  
    <title> Find Translator</title>
    <meta charset="utf-8" />

    <?php
        /* these are bringing in PHP functions I am calling below */

        require_once("hsu_conn.php");
	require_once("trans_func.php");
    ?>
	<script type="text/javascript" src="table.js"></script>
	<link href="tablejs.css" type="text/css" rel="stylesheet" />
	<link href="translator.css" type="text/css" rel="stylesheet" />

	<link href="find.css" type="text/css" rel="stylesheet" />

	<link href="http://users.humboldt.edu/smtuttle/styles/normalize.css" 
          type="text/css" rel="stylesheet" />
</head> 

<body>
    <h1 style="color:red;"> VERTAAL </h1>

	<ul>
			<li class="dropdown">
				<a href="user_account.php" class="dropbtn">My Account</a>
				<div class="dropdown-content">
					<a href="signout.php">Signout</a>
				</div>
				</li>
			<li><a href="find.php">Find Translator</a></li>
			<li><a href="user_contact.php">Contact</a></li>
			<li><a href="user_about.php">About</a></li>
	</ul>
<?php

	if (empty($_SESSION['LoggedIn']))
	{
		?>
		
		 <form action="login.php">		
		 
			 <p> You aren't logged into nrs-projects. </p>

		 <input type="submit" value="Back to login page">
         </form>
		

		<?php
		
	}
	else
	{
		if (! array_key_exists('new_page', $_SESSION))
		{
			select();
		
			?> 
	
			<?php
			$_SESSION['new_page'] = "display";
		}
		elseif ($_SESSION['new_page'] == "select")
		{

			select();
		
		?> 
	
		
		<?php
		
			$_SESSION['new_page'] = "display";
		
		
		
		}
		elseif (($_SESSION['new_page'] == "display") && (array_key_exists("exist", $_POST)))
		{
		
			display();
		?>
	
		

		<?php	
			$_SESSION['new_page'] = "select";		
		
		}
		else
		{
        ?>
			<p> No selection </p>
			<form method="post" action="<?= htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES) ?>">
				<input type="submit" name="restart" value="Go Back" />
			</form>  
        <?php
		unset($_SESSION['new_page']);
		}
		
	}	
		
 ?>        
		
		
	 
</body>
</html>

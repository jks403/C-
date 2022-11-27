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
		
    adapted by: Kevin
    Last Modified: 10/19/2017
---->
<head>  
    <title>Admin Login</title>
    <meta charset="utf-8" />

    <?php
        /* these are bringing in PHP functions I am calling below */

        require_once("hsu_conn.php");
    ?>
	
	<link href="http://users.humboldt.edu/smtuttle/styles/normalize.css" 
          type="text/css" rel="stylesheet" />
	  <link href="translator.css" type="text/css" rel="stylesheet" />

</head> 

<body>
    <h1 style="color:red;"> VERTAAL </h1>

	
<!------
Creating function call login in php. 
This function will be use to login for the first time to gain 
access to the database. Username and password will not be destroyed unless the browser is close.
-->
	
	<?php
	function login()   // this is a function that is empty. No INPUT paramaters but the HTML file calls itself
    {
        ?> 

        <form method="post"
		action="<?= htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES) ?>">        // this page is calling itself here and the user enters in his username & password below
        <fieldset id="box">
            <legend> Login </legend>

	<label for="username"> Username: </label></br>
        <input type="text" name="username" id="username" required="required" /></br>

        <label for="password"> Password: </label></br>
        <input type="password" name="password" required="required"       // user eners in username and password and hits submit and sendd the data to itself
                  id="password" /></br>
        <div class="submit">

        <input type="submit"  name="submit" value="Log in" />

            </div>
        </fieldset>
        </form>             
        <?php
    }
/*-------------
End of login function.
*/

/*-----------------
Using if-statement to pass in username and password into session
*/
	
    if (! array_key_exists('next_page', $_SESSION)) // if next_page doesn't exist do the following
    {
		?>
		
		<?php

		login();// we need to call the home function because it let's the user's input his name and password

        $_SESSION['next_page'] = "Home";    
    }
    elseif (($_SESSION['next_page'] == "Home") &&  //if nex_page = home and stop coming in if user is already set
	        (!(isset($_SESSION['username']))))   
    {
		$username = trim(strip_tags($_POST['username'])); 
        $password = $_POST['password'];
		
		
     	$_SESSION["username"] = $username; //Storing username and password into session to be use with hsu_conn
        $_SESSION["password"] = $password; // and to connect to database for each function that do query. 
		?>
		
		<p> <a href="index.php">Start Presentation</a> </p>
		
		<?php
	$_SESSION['next_page'] = "Home";

	}
	else
	{
		unset($_SESSION['next_page']);
		unset($_SESSION['username']);
		unset($_SESSION['password']);
		?>
		
		<h2> Login to access your database<h2>
		<?php

		login();// we need to call the home function because it let's the user's input his name and password

        $_SESSION['next_page'] = "Home";
		
		
		
		
	}
	?>

</body>
</html>

<?php
	function logintome()
	{
		?>
		<h2 class="title"> Please login to purchase your book: </h2>
        <form method="post" 
              action="<?= htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES) ?>">
        <fieldset>
            <legend class="legend"> Please enter mysql username/password: </legend>
			<div id="login_username">
				<label for="username"> Username: </label>
				<input type="text" name="username" id="username" class="select"/> 
			</div>
			<div id="login_password">
				<label for="password"> Password: </label>
				<input type="password" name="password" 
                       id="password" class="select"/>
			</div>

            <div class="buttons">
				<input type="submit" value="Log in" />
            </div>
        </fieldset>
        </form>
		
		<?php
	}
?>


<div>
<h2><?php echo WORDING_FORGOT_MY_PASSWORD; ?></h2>
	<form method="post" action="?password_reset">
		<label for="user_name"><?php echo WORDING_REQUEST_PASSWORD_RESET; ?></label>
		<input id="user_name" type="text" name="user_name" required autofocus/>
		<input type="submit" name="request_password_reset" value="<?php echo WORDING_RESET_PASSWORD; ?>" />
	</form>

<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>"><?php echo WORDING_BACK_TO_LOGIN; ?></a>
</div>

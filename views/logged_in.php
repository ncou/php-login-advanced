
<?php
// if you need the user's information, just put them into the $_SESSION variable and output them here
echo WORDING_YOU_ARE_LOGGED_IN_AS . $_SESSION['user_name'] . "<br />";
echo WORDING_PROFILE_PICTURE . '<br/><img src="' . $login->getGravatarImageUrl() . '" />';
?>

<div>
	<a href="?logout"><?php echo WORDING_LOGOUT; ?></a>
	<a href="?edit"><?php echo WORDING_EDIT_USER_DATA; ?></a>
</div>

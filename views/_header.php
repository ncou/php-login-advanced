<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>php-login-advanced</title>
	<style type="text/css">
	/* just for the demo */
	body {
		font-family: Arial, sans-serif;
		font-size: 12px;
		margin: 10px;
	}
	label {
		position: relative;
		vertical-align: middle;
		bottom: 1px;
	}
	input[type=text],
	input[type=password],
	input[type=submit],
	input[type=email] {
		display: block;
		margin-bottom: 15px;
	}
	input[type=checkbox] {
		margin-bottom: 15px;
	}
	.login_error {
		background: #f36971;
		padding: 2px;
	}
	.login_message {
		background: #99daea;
		padding: 2px;
	}
	</style>
</head>
<body>

<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo "<div class=\"login_error\">$error</div>\n";
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo "<div class=\"login_message\">$message</div>\n";
        }
    }
}
?>

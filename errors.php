<?php
$status = $_SERVER['REDIRECT_STATUS'];
$codes = array(
    400 => array('400 Bad Request', 'The request cannot be fulfilled due to bad syntax.'),
    403 => array('403 Forbidden', 'The server has refused to fulfil your request.'),
    404 => array('404 Not Found', 'The page you requested was not found on this server.'),
    405 => array('405 Method Not Allowed', 'The method specified in the request is not allowed for the specified resource.'),
    408 => array('408 Request Timeout', 'Your browser failed to send a request in the time allowed by the server.'),
    500 => array('500 Internal Server Error', 'The request was unsuccessful due to an unexpected condition encountered by the server.'),
    502 => array('502 Bad Gateway', 'The server received an invalid response while trying to carry out the request.'),
    504 => array('504 Gateway Timeout', 'The upstream server failed to send a request in the time allowed by the server.')
);
 
$title = $codes[$status][0];
$message = $codes[$status][1];
if ($title == false || strlen($status) != 3) {
    $title = 'Error';
    $message = 'Please supply a valid HTTP status code.';
}
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Services</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/stylesheets/base.css">
	<link rel="stylesheet" href="/stylesheets/skeleton.css">
	<link rel="stylesheet" href="/stylesheets/layout.css">
</head>
<body>
	<div class="container">
		<h1 style="margin-top: 40px"><?php echo $title ?></h1>
		<hr />
		<p><?php echo $message ?></p>
	</div><!-- container -->
</body>
</html>
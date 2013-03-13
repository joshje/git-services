<?php
$ip = getenv(REMOTE_ADDR);
$whitelist = array('54.235.183.49', '54.235.183.23', '54.235.118.251', '54.235.120.57', '54.235.120.61', '54.235.120.62', '63.246.22.222');
if (in_array($ip, $whitelist)) {
    $path = $_GET['path'];
    exec("cd ~/$path && git pull origin master");
}

<?php 
$ip = getenv(REMOTE_ADDR);
if ($ip == '63.246.22.222') {
    $path = $_GET['path'];
    exec("cd ~/$path && git pull");
    error_log("Repo at ~/$path updated.",0);
}

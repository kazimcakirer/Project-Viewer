<?php
session_start();
## conifg
require 'config.php';
## helper
require 'helpers/database.php';
require 'helpers/function.php';
require 'helpers/validation.php';
require 'helpers/autoloader.php';

//$menu = require 'config/menus.php';

/*
if (session('user')) {
    $user = session('user')[0];
    foreach ($menu as $k => $m) {
        if (!in_array(session("user")[0]['rank'], $m['rank'])) {
            unset($menu[$k]);
        }
    }
}
*/

$title = 'togril';

function getIP()
{
    if (getenv("HTTP_CLIENT_IP")) {
        $ip = getenv("HTTP_CLIENT_IP");
    } else if (getenv("HTTP_X_FORWARDED_FOR")) {
        $ip = getenv("HTTP_X_FORWARDED_FOR");
        if (strstr($ip, ",")) {
            $tmp = explode(",", $ip);
            $ip = trim($tmp[0]);
        }
    } else {
        $ip = getenv("REMOTE_ADDR");
    }
    return $ip;
}

function createDuration($duration = 0)
{
    return date("Y-m-d H:i:s", (strtotime(date("Y-m-d H:i:s")) + ($duration * 86400)));
}

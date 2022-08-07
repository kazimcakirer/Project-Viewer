<?php
spl_autoload_register(function ($class) {
    $params = explode("\\", $class);
    if (count($params) >= 2)
        include "apps/" . mb_strtolower($params[0]) . "/" . mb_strtolower($params[0]) . "." . mb_strtolower($params[1]) . ".php";
});

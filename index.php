<?php
require 'apps/init.php';


if (isset($_COOKIE["rememberMe"]) || isset($_SESSION["login"])) {

    $loginToken = ((isset($_COOKIE["rememberMe"])) ? $_COOKIE["rememberMe"] : ((isset($_SESSION["login"])) ? $_SESSION["login"] : null));

    $accountSearch = $db->prepare("SELECT A.*, ASe.loginToken FROM personel A INNER JOIN oturum ASe ON A.id = ASe.accountID WHERE ASe.loginToken = ? AND ASe.creationIP = ? AND ASe.expiryDate > ?");
    $accountSearch->execute([$loginToken, getIP(), date("Y-m-d H:i:s")]);
    $readAccount = $accountSearch->fetch();

    if ($accountSearch->rowCount() > 0) {
        $_SESSION["login"] = $readAccount["loginToken"];
        if (!isset($_COOKIE["rememberMe"])) {
            $updateAccountsSessions = $db->prepare("UPDATE oturum SET expiryDate = ? WHERE accountID = ? AND loginToken = ?");
            $updateAccountsSessions->execute([createDuration(0.01666666666), 1, $loginToken]);
        }
    } else {
        if (isset($_COOKIE["rememberMe"])) {
            setcookie("rememberMe", "", time() - 86400 * 365, '/');
        }
        session_destroy();
    }
    if (route(0) != "giris" && route(0) != "kayit") {
        require controller(route(0));
    } else {
        require controller("index");
    }
} else {
    require controller("giris");
}

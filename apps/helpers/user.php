<?php

function createDuration($duration = 0)
{
    return date("Y-m-d H:i:s", (strtotime(date("Y-m-d H:i:s")) + ($duration * 86400)));
}

/*

$accountID = $db->lastInsertId();
$loginToken = md5(uniqid(mt_rand(), true));
$insertSessions = $db->prepare("INSERT INTO Sessions (accountID, loginToken, creationIP, expiryDate, creationDate) VALUES (?, ?, ?, ?, ?)");
$insertSessions->execute(array($accountID, $loginToken, getIP(), createDuration(0.01666666666), date("Y-m-d H:i:s")));

 */
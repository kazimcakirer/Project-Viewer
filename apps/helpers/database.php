<?php
$db = null;

try {
    $db = new PDO("mysql:host=" . host . ";dbname=" . dbname . ";charset=utf8;", user, pwrd);
} catch (PDOException $e) {
    echo $e->getMessage();
}

function query($sql)
{
    global $db;
    $result = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function prepare($sql, $arr)
{
    global $db;
    $result = $db->prepare($sql);
    return $result->execute($arr);
}

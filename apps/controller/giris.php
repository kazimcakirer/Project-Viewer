<?php

$title = "Togril Yazılım | Giriş";
$state = '';
if (isset($_POST['loginBtn'])) {

    $email = post('email');
    $passwrd = post('passwrd');
    if ($email && $passwrd) {
        if (emailValidation($email)) {
            $user = query("SELECT * FROM `personel` WHERE `email` = '" . $email . "'") [0];
            if ($email == $user['email']) {
                if (md5($passwrd) == $user['sifre']) {
                    isRemember($user['id'], $user['ad_soyad']);
                    header("Location:".url);
                } else {
                    $state = "Yanlış Şifre Girdiniz! 5 Hakkınız kaldı";
                }
            } else {
                $state = "Böyle Bir Email Adresi Kayıtlı Değil!";
            }
        } else {
            $state = "Lütfen Email Adresi Giriniz!";
        }
    } else {
        $state = "Lütfen Boş Alan Bırakmayınız!";
    }
}

function isRemember($accountId, $name)
{
    $loginToken = md5(uniqid(mt_rand(), true));
    $sql = "INSERT INTO oturum (accountId, loginToken, creationIP, expiryDate, creationDate) VALUES (?,?,?,?,?)";
    $arr = [
        $accountId,
        $loginToken,
        getIP(),
        createDuration(post("rememberMe") ? 365 : 0.01666666666),
        date("Y-m-d H:i:s")
    ];
    if (prepare($sql, $arr)) {
        if (post("rememberMe")) {
            setcookie("rememberMe", $loginToken, time() + 86400 * 365, "/");
        }
        session(["login" => $loginToken, 'name' => $name]);
    }
}


require view('login');

<?php


$users = query('SELECT * FROM personel');

d($_POST);
if(post('new-person')) {
}

require view('user-list');
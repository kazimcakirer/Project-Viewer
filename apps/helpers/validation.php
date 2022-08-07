<?php

function emailValidation($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL))
        return true;
    return false;
}

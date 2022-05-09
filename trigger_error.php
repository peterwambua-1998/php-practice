<?php

declare(strict_types=1);

ini_set('SMTP', 'mail.zultenglobal.com');
ini_set('smtp_port', 465);

function errorreportmail($arr)
{
    
    if (!is_array($arr)) {
        error_log('something is wrong', 1, 'pwambua25@gmail.com');
    }
}


$str = 'peter';

errorreportmail($str);




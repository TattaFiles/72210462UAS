<?php
date_default_timezone_set("Asia/Bangkok");
$sekarang = date('H:i:s');

if(date('H:i:s') >= '19:00:00' AND date('H:i:s') <= '02:59:00')
    echo 'Selamat Malam';
else if(date('H:i:s') >= '03:00:00' AND date('H:i:s') <= '09:59:00')
    echo 'Selamat Pagi';
else if(date('H:i:s') >= '10:00:00' AND date('H:i:s') <= '14:59:00')
    echo 'Selamat Siang';
else if(date('H:i:s') >= '15:00:00' AND date('H:i:s') <= '17:59:00')
    echo 'Selamat Sore';
else
    echo 'Selamat Petang';
<?php
//Duong dan toi he thong
define('PATH_SYSTEM',__DIR__.'/system');
define('PATH_APPLICATION',__DIR__.'/admin');

//Lay thong so cau hinh
require (PATH_APPLICATION.'/config/config.php');

//Mo file FT_Common.php
include_once (PATH_SYSTEM.'/core/FT_Common.php');

FT_Load();

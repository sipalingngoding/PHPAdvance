<?php

date_default_timezone_set("Asia/Jakarta");

session_start();

require_once __DIR__.'/../config/database.php';
require_once __DIR__."/libs/connection.php";
require_once __DIR__ . "/../src/user/user.php";
require_once __DIR__."/../src/todo/todo.php";
require_once __DIR__."/libs/filter.php";
require_once __DIR__."/libs/flash.php";
require_once __DIR__."/libs/helper.php";
require_once __DIR__."/libs/sanitize.php";
require_once __DIR__."/libs/validate.php";
require_once __DIR__."/libs/upload.php";

<?php
session_start();

use App\Services\App;

require_once __DIR__."/vendor/autoload.php";
App::start();
require_once __DIR__."/routes/routes.php";


<?php
require "vendor/autoload.php";


use App\Controller\HomeController;
use App\Controller\UserController;
use App\Model\User;

$homeCL = new HomeController();
$userCL = new UserController();
$user = new User();
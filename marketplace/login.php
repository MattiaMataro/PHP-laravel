<?php

require_once 'vendor/autoload.php';

use Andrea\Marketplace\Services\UserService;

if (!$_POST['email'] || !$_POST['password']) {
    exit;
}

$userService = new UserService();
$user = $userService->login($_POST['email'], $_POST['password']);

var_dump($user);
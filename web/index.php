<?php
/**
 * Created by PhpStorm.
 * User: pw
 * Date: 10.01.16
 * Time: 19:37
 */

require "../vendor/autoload.php";

$container = require __DIR__ . '/../app/config.php';
$response = $container->get('UserManager\Controller\UserController')->indexAction();
print $response;

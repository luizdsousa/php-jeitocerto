<?php
echo "<h2>#AUTOLOAD SPL PSR-4</h2>";

//require __DIR__ . "/source/Loading/User.php";
//require __DIR__ . "/source/Loading/Address.php";
//require __DIR__ . "/source/Loading/Company.php";

require __DIR__ . "/source/autoload.php";

$user = new \Source\Loading\User();
$address = new \Source\Loading\Address();
$company = new \Source\Loading\Company();

echo "<pre>", var_dump(
    $user,
    $address,
    $company
), "</pre>";

echo "<h2>#AUTOLOAD COMPOSER PSR-4</h2>";

require __DIR__ . "/vendor/autoload.php";

$email = new \PHPMailer\PHPMailer\PHPMailer();
echo "<pre>", var_dump($email), "</pre>";



?> 
<?php

echo "<h2>#NAMESPACE</h2>";

require __DIR__ . "/classes/App/Template.php";
require __DIR__ . "/classes/Web/Template.php";

$appTemplate = new App\Template();
$webTemplate = new Web\Template();

echo "<pre>", var_dump(
    $appTemplate,
    $webTemplate
), "</pre>";

use App\Template;
use Web\Template AS webTemplate;

$appUseTemplate = new Template();
$webUseTemplate = new webTemplate();

echo "<pre>", var_dump(
    $appUseTemplate,
    $webUseTemplate
), "</pre>";

echo "<h2>#VISIBILIDADE</h2>";

require __DIR__ . "/source/Qualifield/User.php";

$user = new \Source\Qualifield\User();

$user->firstName = "Davi";
$user->lastName = "Andrade";

echo "<pre>", var_dump($user), "</pre>";



echo "<h2>#MANIPULAÇÃO</h2>";


?>
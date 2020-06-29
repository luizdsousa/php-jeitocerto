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

//Os parametros abaixo não podem ser acessado, pois estão como privados na classe User.
//$user->firstName = "Davi";
//$user->lastName = "Andrade";

//$user->setFirstName("Luiz");
//$user->setLastName("Sousa");

$luiz = $user->setUser(
    "Davi",
    "Andrade",
    "luizdavi2013@gmail.com"
);

echo "<pre>", var_dump(
    $user,
    get_class_methods($user)    
), "</pre>";

echo "<p>O e-mail de {$user->getFirstName()} é {$user->getEmail()}!</p>";



echo "<h2>#MANIPULAÇÃO</h2>";

$luiz = $user->setUser(
    "Luiz",
    "Sousa",
    "luizdsousa@outlook.com.br"
);

if (!$luiz){
    echo "<p>{$user->getError()}</p>";
}

$denise = new \Source\Qualifield\User();
$denise->setUser(
    "Denise",
    "Andrade",
    "deniseandradehair@gmail.com"
);

echo "<pre>", var_dump(
    $user,
    $denise    
), "</pre>";
?>
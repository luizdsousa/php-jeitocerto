<?php
require __DIR__ . "/classes/User.php";

echo "<h2>#CLASSES E OBJETOS</h2>";
$user = new User();
echo "<pre>", var_dump($user), "</pre>";

echo "<h2>#PROPRIEDADES</h2>";
$user->firstName = "Luiz";
$user->lastName = "Sousa";
$user->email = "luizdsousa";

echo "<pre>", var_dump($user), "</pre>";

echo "<p>O e-mail de {$user->firstName} é {$user->email}!</P>";

echo "<h2>#MÉTODOS</h2>";
$user->setFirstName("Antonio");
$user->setLastName("Andrade");

if(!$user->setEmail("luizdsousa@gmail.com")){
    echo "<p>O e-mail {$user->getEmail()} não é válido!</p>";
}

echo "<pre>", var_dump($user), "</pre>";

?>
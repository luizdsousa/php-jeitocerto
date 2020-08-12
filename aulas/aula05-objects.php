<?php
echo "<h2>#MANIPULAÇÃO</h2>";
$arrProfile = [
    "name" => "Luiz Sousa",
    "company" => "CBMPA",
    "mail" => "luizdsousa@gmail.com"
];
$objProfile = (object)$arrProfile;

echo "<pre>", var_dump($arrProfile, $objProfile), "</pre>";

echo "<p>{$arrProfile['name']} trabalha na corporação {$arrProfile['company']}.</p>";
echo "<p>{$objProfile->name} trabalha na corporação {$objProfile->company}.</p>";

$ceo = $objProfile;
unset($ceo->company);
echo "<pre>", var_dump($ceo), "</pre>";

$company = new stdClass();
$company->company = "Corpo de Bombeiros";
$company->ceo = $ceo;
$company->manager = new stdClass();
$company->manager->name = "Davi Luiz";
$company->manager->mail = "daviluiz@gmail.com";
echo "<pre>", var_dump($company), "</pre>";


echo "<h2>#ANÁLISE</h2>";
$date = new DateTime();
echo "<pre>", var_dump([
    "class" => get_class($date),
    "methods" => get_class_methods($date),
    "vars" => get_object_vars($date),
    "parent" => get_parent_class($date),
    "subclass" => is_subclass_of($date, "DateTime")
]), "</pre>";

$exception = new PDOException();
echo "<pre>", var_dump([
    "class" => get_class($exception),
    "methods" => get_class_methods($exception),
    "vars" => get_object_vars($exception),
    "parent" => get_parent_class($exception),
    "subclass" => is_subclass_of($exception, "Exception")
]), "</pre>";

?>
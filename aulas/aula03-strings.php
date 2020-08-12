<?php
echo "<h2>#STRING E MULTIBYTE</h2>";
$string = "O último show do AC/DC foi incrível!";
echo "<pre>", var_dump([
    "string" => $string,
    "strlen" => strlen($string),
    "mb_strlen" => mb_strlen($string),
    "substr" => substr($string, "9"),
    "mb_substr" => mb_substr($string, "9"),
    "strtoupper" => strtoupper($string),
    "mb_strtoupper" => mb_strtoupper($string)
]), "</pre>";

echo "<h2>#CONVERSÃO DE CAIXA</h2>";
$mbString = $string;
echo "<pre>", var_dump([
    "mb_strtoupper" => mb_strtoupper($mbString),
    "mb_strtolower" => mb_strtolower($mbString),
    "mb_convert_case UPPER" => mb_convert_case($mbString, MB_CASE_UPPER),
    "mb_convert_case LOWER" => mb_convert_case($mbString, MB_CASE_LOWER),
    "mb_convert_case TITLE" => mb_convert_case($mbString, MB_CASE_TITLE)
]), "</pre>";

echo "<h2>#SUBSTITUIÇÃO</h2>";
$mbReplace = $mbString . " Fui, iria novamente, e foi épico!";
echo "<pre>", var_dump([
    "mb_strlen" => mb_strlen($mbReplace),
    "mb_strpos" => mb_strpos($mbReplace, ", "),
    "mb_strrpos" => mb_strrpos($mbReplace, ", "),
    "mb_substr" => mb_substr($mbReplace, 40 + 2, 14),
    "mb_strstr" => mb_strstr($mbReplace, ", ", true),
    "mb_strrchr" => mb_strrchr($mbReplace, ", ", true)
]), "</pre>";

$mbStrResplace = $string;
echo "<p>", $mbStrResplace, "</p>";
echo "<p>", str_replace("AC/DC", "Nirvana", $mbStrResplace), "</p>";
echo "<p>", str_replace(["AC/DC", "eu fui", "último"], "Nirvana", $mbStrResplace), "</p>";
echo "<p>", str_replace(["AC/DC", "incrível"], ["Nirvana", "ÉPICOOO!!"], $mbStrResplace), "</p>";

$article = <<<ROCK
    <article>
        <h3>event</h3>
        <p>desc</p>    
    </article>
ROCK;
$articleData = [
    "event" => "Rock in Rio.",
    "desc" => $mbReplace
];
echo str_replace(array_keys($articleData), array_values($articleData), $article);

echo "<h2>#PARSE STRING</h2>";
$endPoint = "name=Luiz Sousa&email=luizdsousa@gmail.com";
mb_parse_str($endPoint, $parseEndPoint);
echo "<pre>", var_dump([
    $endPoint,
    $parseEndPoint,
    (object)$parseEndPoint
]), "</pre>";

?>
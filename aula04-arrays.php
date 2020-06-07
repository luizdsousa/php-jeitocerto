<?php
echo "<h2>#MANIPULAÇÃO</h2>";
//ARRAY INDEXADO
$index = [
    "Luiz",
    "Denise",
    "Davi"
];
//ARRAY ASSOCIATIVO
$assoc = [
    "user01" => "Luiz",
    "user02" => "Denise",
    "user03" => "Davi"
];
//ADICIONAR UM NOVO INDEX NO INÍCIO DO ARRAY
array_unshift($index, "Lorena", "Lucas");
$assoc = ["user04" => "Lorena", "user05" => "Lucas"] + $assoc;

//ADICIONAR UM NOVO INDEX NO FINAL DO ARRAY
array_push($index, "Diná");
$assoc = $assoc + ["user06" => "Diná"];

//REMOVE INDEX DO INÍCIO DO ARRAY
array_shift($index);
array_shift($assoc);

//REMOVE INDEX DO FINAL DO ARRAY
array_pop($index);
array_pop($assoc);

array_unshift($index, "");
$assoc = ["user04" => ""] + $assoc;
//REMOVE VALOR NÃO PREENCHIDOS
$index = array_filter($index);
$assoc = array_filter($assoc);

echo "<pre>", var_dump([
    $index,
    $assoc
]), "</pre>";

echo "<h2>#ORDENAÇÃO</h2>";
//INVERTE A ORDEM DO ARRAY
$index = array_reverse($index);
$assoc = array_reverse($assoc);

//ORDENA O ARRAY POR VALOR
asort($index);
asort($assoc);

//ORDENAR POR INDEX OU KEY
ksort($index);
krsort($index);

//ORDENA POR VALO E REINDEXA O ARRAY
sort($index);
rsort($index);

echo "<pre>", var_dump([
    $index,
    $assoc
]), "</pre>";

echo "<h2>#VERIFICAÇÃO</h2>";
//RELACIONA CHAVES E VALORES DO ARRAY
echo "<pre>", var_dump([
    array_keys($assoc),
    array_values($assoc)
]), "</pre>";

//VERIFICA EXISTENCIA DE VALOR
if (in_array("Diná", $assoc)) {
    echo "<p>SELVA!</p>";
} else{
    echo "Not Found!";
}

//IMPLODE O ARRAY EM UMA STRING
$arrToString = implode(", ",$assoc);
echo "<p>{$arrToString} são da minha família.</p>";

//EXPLODE UMA STRING EM UM ARRAY
echo "<pre>", var_dump(explode(", ",$arrToString)), "</pre>";

echo "<h2>#EXEMPLO PRÁTICO</h2>";
$profile = [
    "name" => "Luiz Sousa",
    "company" => "CBMPA",
    "email" => "luizdsousa@gmail.com"
];

$template = <<<TPL
    <article>
        <h1>{{name}}</h1>
        <p>{{company}}</br>
        <a href="mailto:{{email}}" title="Enviar e-mail para {{name}}">Enviar e-mail</a></p>
    </article>
TPL;

echo $template;

echo str_replace(array_keys($profile), array_values($profile), $template);

$replaces = "{{".implode("}}&{{", array_keys($profile)). "}}";

echo "<pre>", var_dump(explode("&",$replaces)), "</pre>";

echo str_replace(
    explode("&", $replaces),
    array_values($profile),
    $template
);

?>
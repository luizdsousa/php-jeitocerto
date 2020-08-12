<?php
    echo "<h1>COMANDOS DE SAÍDA</h1>";
    echo "<h2>#Comando 'echo'</h2>";
    $hello="Olá Mundo!";
    $code="Bora Programar!";
        
    echo "{$hello} {$code}";

    echo "<h2>#Comando 'print'</h2>";
    print $hello;
    print $code;
    print "<h4>{$hello}</br> {$code}</h4>";

    echo "<h2>#Comando 'print-r'</h2>";
    $array = [
        "orgao" => "CBMPA",
        "setor" => "DTE",
        "subsetor" => "MANUTENÇÂO"
    ];
    print_r($array);
    echo "<pre>", print_r($array, true), "</pre>";

    echo "<h2>#Comando 'printf'</h2>";
    $article = "<article><h3>%s</h3><p>%s</p></article>";
    $title = "{$hello} {$code}";
    $subtitle = "Seja bem-vindo(a) a WEBSERIE PHP DO JEITO CERTO Luiz Antonio Andrade de Sousa! 
    São 7 episódios incríveis, cada um com aulas exclusivas e materiais pra ti baixar e ter acesso 
    completo ao conteúdo tudo 100% GRATUITO! Meu objetivo aqui é te mostrar como programar do jeito 
    certo com PHP, seguindo recomendações de codificação (PSRs), utilizando 100% de tecnologia moderna 
    e os melhores padrões de projeto.";

    printf($article, $title, $subtitle);
    echo sprintf($article, $title, $subtitle);

    echo "<h2>#Comando 'vprintf'</h2>";
    $orgao = "<article><h3>Orgão: %s</h3><p>Setor: %s, Subsetor: %s</p></article>";
    vprintf($orgao, $array);
    echo vsprintf($orgao, $array);

    echo "<h2>#Comando 'var_dump'</h2>";
    var_dump($array);
    echo "<pre>",var_dump($array),"</pre>";

    echo "<h1>VARIÁVEIS E TIPOS DE DADOS</h1>";
    echo "<h2>#Variáveis</h2>";
    $userFirstName = "Luiz";
    $userLastName = "Sousa";
    echo "<h3>{$userFirstName} {$userLastName}</h3>";
    $userAge = "33";
    echo "<h3>{$userFirstName} {$userLastName} tem {$userAge} anos.</h3>";
    $email = "luizdsousa@gmail.com";
    echo "<p>Seu email é {$email}</p>";

    //Variável Variável
    $cbmpa = "Bombeiro";
    $$cbmpa = "Militar";
    echo "<h4>{$cbmpa} {$Bombeiro}</h4>";

    $calcA = 10;
    $calcB = 20;

    //$calcB = $calcA;
    $calcB = &$calcA;
    $calcB = 50;

    var_dump([
        "a" => $calcA,
        "b" => $calcB
    ]);

    echo "<h2>#Tipo Boleano</h2>";
    $true = true;
    $false = false;
    var_dump($true, $false);

    $bestAge = ($userAge > 50);
    var_dump($bestAge);

    $a = 0;
    $b = 1.0;
    $c = "";
    $d = [];
    $e = null;

    var_dump($a, $b, $c, $d, $e);
    if ($a || $b || $c || $d || $e){
        var_dump(true);
    }else{
        var_dump(false);
    }

    echo "<h2>#Tipo callback</h2>";
    $code  = "<article><h3>Um call user function!</h3></article>";
    $codeClear = call_user_func("strip_tags", $code);
    var_dump($code, $codeClear);

    $codeMore = function($code){
        var_dump($code);
    };
    $codeMore("Bora Programar!");

    echo "<h2>#Outros Tipo</h2>";
    $string = "Olá Mundo!";
    $array  = [$string];
    $object = new stdClass();
    $object->hello = $string;
    $null = null;
    $int = 12345;
    $float = 1.23456;
    var_dump([
        $string,
        $array,
        $object,
        $null,
        $int,
        $float
    ])

?>

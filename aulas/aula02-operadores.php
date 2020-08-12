<?php
    echo "<h2>#ATRIBUIÇÃO</h2>";
    $operatorA = 5;
    $operators = [
        "a += 5" => ($operatorA += 5),
        "a -= 5" => ($operatorA -= 5),
        "a *= 5" => ($operatorA *= 5),
        "a /= 5" => ($operatorA /= 5)
    ];
    echo "<pre>", print_r($operators, true), "</pre>";

    $incrementA = 5;
    $incrementB = 5;
    $increment = [
        "pós-incremento" => $incrementA++,
        "res-incremento" => $incrementA,
        "pré-incremento" => ++$incrementA,
        "pós-decremento" => $incrementB--,
        "res-decremento" => $incrementB,
        "pré-decremento" => --$incrementB
    ];
    echo "<pre>", print_r($increment, true), "</pre>";

    echo "<h2>#COMPARAÇÃO</h2>";
    $relatedA = 5;
    $relatedB = "5";
    $relatedC = 10;
    $related = [
        "a == b" => ($relatedA == $relatedB),
        "a === b" => ($relatedA === $relatedB),
        "a != b" => ($relatedA != $relatedB),
        "a !== b" => ($relatedA !== $relatedB),
        "a > c" => ($relatedA > $relatedC),
        "a < b" => ($relatedA < $relatedC),
        "a >= b" => ($relatedA >= $relatedB),
        "a >= c" => ($relatedA >= $relatedC),
        "a <= c" => ($relatedA <= $relatedC)
    ];
    echo "<pre>", var_dump($related), "</pre>";

    echo "<h2>#LÓGICOS</h2>";
    $logicA = true;
    $logicB = false;
    $logic = [
        "a && b" => ($logicA && $logicB),
        "a || b" => ($logicA || $logicB),
        "a" => ($logicA),
        "! a" => (!$logicA),
        "! b" => (!$logicB)
    ];
    echo "<pre>", var_dump($logic), "</pre>";

    echo "<h2>#ARITMÉTICOS</h2>";
    $calcA = 5;
    $calcB = 10;
    $calc = [
        "a + b" => ($calcA + $calcB),
        "a - b" => ($calcA - $calcB),
        "a * b" => ($calcA * $calcB),
        "a / b" => ($calcA / $calcB),
        "a % b" => ($calcA % $calcB)
    ];
    echo "<pre>", print_r($calc, true), "</pre>";

?>
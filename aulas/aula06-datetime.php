<?php
    echo "<h1>CLASSE DATETIME</h1>";

    //Define e manipula datas
    echo "<h3>A Classe DateTime</h3>";

    define("DATE_BR", "d/m/Y H:i:s");

    $dateNow = new DateTime();
    $dateBirth = new DateTime("1986-06-22");
    $dateStatic = DateTime::createFromFormat(DATE_BR, "06/06/2020 18:00:00");

    echo "<pre>", var_dump(
        //get_class_methods($dateNow),
        $dateNow,
        $dateBirth,
        $dateStatic
    ), "</pre>";

    echo "<pre>", var_dump([
        $dateNow->format(DATE_BR),
        $dateNow->format("d")
    ]), "</pre>";
    
    echo "<p>Hoje é dia {$dateNow->format("d")} do {$dateNow->format("m")} de {$dateNow->format("Y")}</p>";
    
    $newTimeZone = new DateTimeZone("Pacific/Apia");
    $newDateTime = new DateTime("now", $newTimeZone);

    echo "<pre>", var_dump([
        $newTimeZone,
        $newDateTime,
        $dateNow
    ]), "</pre>";

    //Trabalha com intervalo de datas
    echo "<h3>A Classe DateInterval</h3>";

    $dateInterval = new DateInterval("P10Y2MT10M");
    echo "<pre>", var_dump($dateInterval), "</pre>";

    $dateTime = new DateTime("now");
    //$dateTime->add($dateInterval);
    $dateTime->sub($dateInterval);

    echo "<pre>", var_dump($dateTime), "</pre>";

    $birth = new DateTime(date("Y")."-06-22");
    $dateNow = new DateTime("now");

    $diff = $dateNow->diff($birth);

    echo "<pre>", var_dump($birth, $diff), "</pre>";

    if ($diff->invert) {
        echo "<p>Seu aniversário foi a {$diff->days} dias.</p>";
    } else {
        echo "<p>Faltam {$diff->days} dias para seu aniversário.</p>";
    }

    $dateResources = new DateTime("now");
    echo "<pre>", var_dump([
        $dateResources->format(DATE_BR),
        $dateResources->sub(DateInterval::createFromDateString("10days"))->format(DATE_BR),
        $dateResources->add(DateInterval::createFromDateString("15days"))->format(DATE_BR)
    ]), "</pre>";

    //Trabalha com períodos de datas
    echo "<h3>A Classe DatePeriod</h3>";

    $start = new DateTime("now");
    $interval = new DateInterval("P1M");
    $end = new DateTime("2021-01-01");

    $period = new DatePeriod($start, $interval, $end);

    echo "<pre>", var_dump([
        $start->format(DATE_BR),
        $interval,
        $end->format(DATE_BR)
    ], $period, get_class_methods($period)), "</pre>";

    echo "<h2>Sua Assinatura:</h2>";
    foreach ($period as $recurrences) {
        echo "<p>Proxímo vencimento: {$recurrences->format(DATE_BR)}</p>";
    }


?>
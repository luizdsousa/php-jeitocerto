<?php

require __DIR__ . "/source/autoload.php";

echo "<h2>#CLASSE PAI</h2>";
$event = new \Source\Inheritance\Event\Event(
    "SBRC2020",
    new DateTime("2020-05-22 16:00"),
    2500,
    "4"
);

echo "<pre>", var_dump($event), "</pre>";

$event->register("Luiz Antonio", "luizdsousa@gmail.com");
$event->register("Luiz Davi", "luizdavi2013@gmail.com");
$event->register("Antonio Sousa", "luizdsousa@outlook.com.br");
$event->register("Denise Andrade", "deniseandrade@gmail.com");
$event->register("Davi Luiz", "luizsousa@gmail.com");

echo "<h2>#CLASSE FILHA</h2>";
$address = new \Source\Inheritance\Address("Rua Dezesseis", "30");
$event = new \Source\Inheritance\Event\EventLive(
    "SBRC2021",
    new DateTime("2020-05-22 17:00"),
    500,
    "3",
    $address
);

echo "<pre>", var_dump($event), "</pre>";

$event->register("Antonio Sousa", "luizdsousa@outlook.com.br");
$event->register("Denise Andrade", "deniseandrade@gmail.com");
$event->register("Davi Luiz", "luizsousa@gmail.com");
$event->register("Luiz Antonio", "luizdsousa@gmail.com");
$event->register("Luiz Davi", "luizdavi2013@gmail.com");

echo "<h2>#POLIMORFISMO</h2>";

$event = new \Source\Inheritance\Event\EventOnline(
    "SBRC2021",
    new DateTime("2020-05-22 18:00"),
    200,
    "http://andradesoft.com.br"
);

echo "<pre>", var_dump($event), "</pre>";

$event->register("Denise Andrade", "deniseandrade@gmail.com");
$event->register("Davi Luiz", "luizsousa@gmail.com");
$event->register("Luiz Antonio", "luizdsousa@gmail.com");
$event->register("Antonio Sousa", "luizdsousa@outlook.com.br");
$event->register("Luiz Davi", "luizdavi2013@gmail.com");

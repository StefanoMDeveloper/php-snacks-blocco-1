<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa
 e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite 
 con questo schema. Olimpia Milano - Cantù | 55-60 -->

<?php

$partite = [
    [
        "squadraCasa" => "Frosinone",
        "squadraOspite" => "Catanzaro",
        "puntiCasa" => rand(10,40),
        "puntiOspite" => rand(10,40),
    ],
    [
        "squadraCasa" => "Milano",
        "squadraOspite" => "Cagliari",
        "puntiCasa" => rand(10,40),
        "puntiOspite" => rand(10,40),
    ],
    [
        "squadraCasa" => "Trapani",
        "squadraOspite" => "Roma",
        "puntiCasa" => rand(10,40),
        "puntiOspite" => rand(10,40),
    ],
    [
        "squadraCasa" => "Turbigo",
        "squadraOspite" => "Magenta",
        "puntiCasa" => rand(10,40),
        "puntiOspite" => rand(10,40),
    ],
];
for ($i=0; $i < sizeof($partite); $i++) { 
    echo "<p>".$partite[$i]["squadraCasa"]." - ".$partite[$i]["squadraOspite"]." | ".$partite[$i]["puntiCasa"]." - ".$partite[$i]["puntiOspite"]."</p>";
}


?>
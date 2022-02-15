<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente 
i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$alunni = [
    [
        "nome" => "Gianfilippoberti",
        "cognome" => "Andreinide",
        "voti" => [
            "italiano" => rand(1, 10),
            "storia" => rand(1, 10),
            "geografia" => rand(1, 10),
            "educazioneFisica" => rand(1, 10),
        ]
    ],
    [
        "nome" => "Silvio",
        "cognome" => "Castellani",
        "voti" => [
            "italiano" => rand(1, 10),
            "storia" => rand(1, 10),
            "geografia" => rand(1, 10),
            "educazioneFisica" => rand(1, 10),
        ]
    ],
    [
        "nome" => "Mariachiara",
        "cognome" => "delle Langhe",
        "voti" => [
            "italiano" => rand(1, 10),
            "storia" => rand(1, 10),
            "geografia" => rand(1, 10),
            "educazioneFisica" => rand(1, 10),
        ]
    ],
    [
        "nome" => "Noninordine",
        "cognome" => "Alfabetico",
        "voti" => [
            "italiano" => rand(1, 10),
            "storia" => rand(1, 10),
            "geografia" => rand(1, 10),
            "educazioneFisica" => rand(1, 10),
        ]
    ],
    [
        "nome" => "Tommaso",
        "cognome" => "Masiatico",
        "voti" => [
            "italiano" => rand(1, 10),
            "storia" => rand(1, 10),
            "geografia" => rand(1, 10),
            "educazioneFisica" => rand(1, 10),
        ]
    ],
    [
        "nome" => "Iride",
        "cognome" => "Orlanda",
        "voti" => [
            "italiano" => rand(1, 10),
            "storia" => rand(1, 10),
            "geografia" => rand(1, 10),
            "educazioneFisica" => rand(1, 10),
        ]
    ],
    [
        "nome" => "Ultima",
        "cognome" => "dell'Elenco",
        "voti" => [
            "italiano" => rand(1, 10),
            "storia" => rand(1, 10),
            "geografia" => rand(1, 10),
            "educazioneFisica" => rand(1, 10),
        ]
    ],
];

for ($i = 0; $i < sizeof($alunni); $i++) {
    $media = ($alunni[$i]["voti"]["italiano"] + $alunni[$i]["voti"]["storia"] + $alunni[$i]["voti"]["geografia"] + $alunni[$i]["voti"]["educazioneFisica"]) / 4;

    echo "Nome: " . $alunni[$i]["nome"] . "<br>Cognome: " . $alunni[$i]["cognome"] . "<br> Media Voti: " . $media . "<br><br>";
}

?>
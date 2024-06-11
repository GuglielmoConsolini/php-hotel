<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Hotel array PHP</title>
</head>
<body>
    <h1>Hotel Array PHP</h1>

    <h2>Stampo tutto l'array con var_dump</h2>
    <!-- CODICE PHP VAR_DUMP-->
     <pre>
     <?= var_dump($hotels) ?>
     </pre>
    <h2>Stampo l'array con il ciclo for each in una tabella</h2>
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descrizione</th>
            <th>Parcheggio</th>
            <th>Voto</th>
            <th>Distanza dal Centro</th>
        </tr>
    </thead>
    <tbody>
        <?php
        //    CICLO FOR EACH CON ELEMENTI TABELLA
           foreach ($hotels as $hotel) {
            echo "<tr>";
            echo "<td>" . $hotel['name'] . "</td>";
            echo "<td>" . $hotel['description'] . "</td>";
            echo "<td>" .$hotel['parking'] . "</td>";
            echo "<td>" . $hotel['vote'] . "</td>";
            echo "<td>" . $hotel['distance_to_center'] . "</td>";
            echo "</tr>";
           }
         ?>
    </tbody>
</table>
    
    
</body>
</html>
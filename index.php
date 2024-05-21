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

    <!-- Style -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<title>PHP Hotel </title>
</head>

<body>

<!-- stampa senza bootstrap -->
    <!-- <?php foreach ($hotels as $cur_hotels) { ?>
        <div>
            <h4><?php echo $cur_hotels["name"]; ?></h4>
            <p>Descrizione: <?php echo $cur_hotels["description"]; ?></p>
            <p>Voto: <?php echo $cur_hotels["vote"]; ?></p>

            <p>Parcheggio: <?php if ($cur_hotels["parking"] === true) {
                                echo "presente";
                            } else {
                                echo "non presente";
                            ?> <?php echo $cur_hotels["parking"]; ?></p> <?php  } ?>

        <p>Distanza dal centro: <?php echo $cur_hotels["distance_to_center"]; ?> km</p>
        </div>
    <?php } ?> -->
    <!-- /stampa senza bootstrap -->

    <!-- stampa con bootstrap -->

    <div class="title">
        <h1>Lista di Hotel</h1>
    </div>
    <table class="table table-bordered border-primary">
        <thead>

        <!-- titolo -->
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Parcheggio</th>
                <th scope="col">Distanza dal centro</th>
                <th scope="col">Voto</th>
            </tr>
            <!-- /titolo -->
        </thead>

        <!-- corpo -->
        <tbody>
            <?php foreach ($hotels as $cur_hotels) { ?>
                <tr>
                    <th scope="row"><?php echo $cur_hotels["name"]; ?></th>
                    <td><?php echo $cur_hotels["description"]; ?></td>
                    <td>
                        <?php
                        if ($cur_hotels["parking"] === true) {
                            echo "presente";
                        } else {
                            echo "non presente";
                        }
                        ?>
                    </td>
                    <td><?php echo $cur_hotels["distance_to_center"]; ?> km</td>
                    <td><?php echo $cur_hotels["vote"]; ?></td>
                </tr>
            <?php } ?>
               <!-- /corpo -->
        </tbody>
    </table>

<!-- /stampa con bootstrap -->


    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
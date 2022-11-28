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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Hotel</title>
</head>

<body>
    <header class="d-flex justify-content-around align-items-center">
        <h1>Hotel</h1>

        <div class="formParking">
            <form action="index.php">
                <select name="parking" id="parking">
                    <option value="">Select..</option>
                    <option value="true">Parking</option>
                    <option value="false">Without parking</option>
                </select>

                <input type="number" name="inputStars" id="inputStars">
                <button type="submit">Submit</button>
            </form>
        </div>

        </div>
    </header>

    <main>

        <div class="container">
            <div class="d-flex justify-content-around">

                <div class="nome d-flex flex-column justify-content-between p-2">
                    <h2>Nome Hotel</h2>
                    <?php foreach ($hotels as $hotel) { ?>
                    <div class="p-2">
                        <?php echo $hotel['name'] ?>
                    </div>
                    <?php } ?>
                </div>

                <div class="description d-flex flex-column justify-content-between p-2">
                    <h2>Descrizione</h2>
                    <?php foreach ($hotels as $hotel) { ?>
                    <div class="p-2">
                        <?php echo $hotel['description'] ?>
                    </div>
                    <?php } ?>
                </div>

                <div class="parking d-flex flex-column justify-content-between align-items-center p-2">
                    <h2>Parcheggio</h2>
                    <?php foreach ($hotels as $hotel) { ?>
                    <div class="p-2">
                        <?php echo $voto = $hotel['vote'] = true ? 'Si' : 'No' ?>
                    </div>
                    <?php } ?>
                </div>

                <div class="vote d-flex flex-column justify-content-between align-items-center p-2">
                    <h2>Voto</h2>
                    <?php foreach ($hotels as $hotel) { ?>
                    <div class="p-2">
                        <?php echo $hotel['vote'] ?>
                    </div>
                    <?php } ?>
                </div>

                <div class="distance_to_center d-flex flex-column justify-content-between align-items-center p-2">
                    <h2>Distanza dal centro</h2>
                    <?php foreach ($hotels as $hotel) { ?>
                    <div class="p-2">
                        <?php echo $hotel['distance_to_center'] ?>
                    </div>
                    <?php } ?>
                </div>
            </div>



        </div>
    </main>


</body>

</html>
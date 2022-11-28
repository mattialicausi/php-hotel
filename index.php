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

if (isset($_GET['parking'])) {

    $temp = [];


    foreach ($hotels as $item) {
        if ($item['parking'] == $_GET['parking']) {
            $temp[] = $item;
            // echo $item['parking'];
            // echo $_GET['parking'];
        }
        ;
        $hotels = $temp;
        // var_dump($hotels);
    }
    ;
}
;



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
            <form action="index.php" methods="GET">
                <select name="parking" id="parking">
                    <option value="">Select..</option>
                    <option value="1">Parking</option>
                    <option value="0">Without parking</option>
                </select>

                <!-- <select name="stars" id="stars">
                    <option value="">Select..</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select> -->

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
                        <?php echo $parking = ($hotel['parking'] == true ? 'Si' : 'No') ?>
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
                        <?php echo $hotel['distance_to_center'] . 'km' ?>
                    </div>
                    <?php } ?>
                </div>
            </div>



        </div>
    </main>


</body>

</html>
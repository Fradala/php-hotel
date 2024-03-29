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
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <h1>
        Hotel
    </h1>


    <ul>
        <?php foreach ( $hotels as $hotel ) { ?>
            <li>
                <p>
                    <?php echo $hotel['name'] . ' , ', $hotel['description'] . ' , ',  
                    $hotel['parking'] . ' ,  ',  $hotel['vote'] . ' ,  ',
                    $hotel['distance_to_center']; ?>
                </p>

            </li>
        <?php } ?>
    </ul>

    <hr>

    <table class="table">
        <thead>
            <tr>
                <?php foreach ( $hotels as $hotel ) { ?>
                    <td>
                        <?php echo $hotel['name']; ?>
                    </td>

                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php foreach ( $hotels as $hotel ) { ?>
                    <td>
                        <?php echo $hotel['description']; ?>
                    </td>

                <?php } ?>
            </tr>
            <tr>
                <?php foreach ( $hotels as $hotel ) { ?>
                    <td>
                        <?php echo $hotel['parking']; ?>
                    </td>

                <?php } ?>
            </tr>
            <tr>
                <?php foreach ( $hotels as $hotel ) { ?>
                    <td>
                        <?php echo $hotel['vote']; ?>
                    </td>

                <?php } ?>
            </tr>
            <tr>
                <?php foreach ( $hotels as $hotel ) { ?>
                    <td>
                        <?php echo $hotel['distance_to_center']; ?>
                    </td>

                <?php } ?>
            </tr>
            

            
            
        </tbody>
    </table>

    
</body>
</html>


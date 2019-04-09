<?php

    /*
     * Zachary Lindgren
     * 4/8/19
     * index.php
     * The Cupcakes index page
     */

    $flavors = array();
    $flavors['grasshopper'] = 'The Grasshopper';
    $flavors['maple'] = 'Whiskey Maple Bacon';
    $flavors['carrot'] = 'Carrot Walnut';
    $flavors['caramel'] = 'Salted Caramel';
    $flavors['velvet'] = 'Red Velvet';
    $flavors['lemon'] = 'Lemon Drop';
    $flavors['tiramisu'] = 'Tiramisu';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cupcakes</title>
</head>
<body>

    <h1>Cupcake Fundraiser</h1>

    <form action="index.php" method="post">

        <p>Your name:</p>
        <input type="text" placeholder="Please enter your name.">

        <p>Cupcake Flavors:</p>
        <ul>
            <?php

            ?>
        </ul>

    </form>

</body>
</html>

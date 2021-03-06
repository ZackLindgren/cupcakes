<?php

    /*
     * Zachary Lindgren
     * 4/8/19
     * index.php
     * The Cupcakes index page
     */

    // setting up the flavors array
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

<?php

    // when the form is submitted
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $errors = [];

        if(empty($_POST['name']))
        {
            $errors[] = "You forgot to enter your name";
        }

        // checking if none of the checkboxes were checked
        $chosen = array();
        foreach($flavors as $flavor)
        {
            $key = array_search("$flavor", $flavors);

            if (isset($_POST["$key"]))
            {
                $chosen[] = $flavor;
            }
        }

        if(count($chosen) == 0)
        {
            $errors[] = 'You need to have at least one flavor.';
        }

        // if there are no errors
        if (empty($errors))
        {
            $name = $_POST['name'];
            $price = 3.5;
            $total = count($chosen) * $price;
            $total = number_format("$total",2);

            echo "<h2>Thank you, $name, for your order!</h2>";
            echo "<p>Order Summary:</p><ul>";

            foreach ($chosen as $choice)
            {
                echo "<li>$choice</li>";
            }
            echo '</ul>';

            echo "<p>Order Total: $$total</p>";

            exit();
        }
        // if there are errors
        else
        {
            foreach ($errors as $error)
            {
                echo "<p>$error</p>";
            }
        }
    }

?>

    <h1>Cupcake Fundraiser</h1>

    <form action="index.php" method="post">

        <p>Your name:</p>
        <input type="text" name='name' placeholder="Please enter your name."
               value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>">

        <p>Cupcake Flavors:</p>
        <?php
            foreach ($flavors as $flavor)
            {
                $key = array_search("$flavor", $flavors);
                echo "<input type='checkbox' name='$key' value='$key'> $flavor<br>";
            }
        ?>

        <br>
        <input type="submit">

    </form>

</body>
</html>

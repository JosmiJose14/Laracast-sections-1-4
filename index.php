<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <!-- Variables -->
    <!-- <?php
            $greeting = "Hello";
            // echo $greeting . " " . "Everybody!";
            echo "$greeting Josmi!";
            ?> -->
    <!-- Conditionals and Booleans -->
    <?php
        $name = "Dark Matters";
        $read = true;
        $message = "You have read $name";
    ?>
    <h1>
        <!-- <?php echo $message; ?> -->
        <?=  $message ?>
    </h1>
</body>

</html>
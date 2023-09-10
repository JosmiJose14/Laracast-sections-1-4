<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <style>
        /* Conditionals and Booleans  */
        /* body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        } */
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
    <!-- <?php
            $name = "Dark Matters";
            $read = true;
            $message = "You have read $name";
            ?>
    <h1>
        /*<?php echo $message; ?>*/
        <?= $message ?>
    </h1> -->

    <!-- Arrays -->
    <!-- <h1>Recommended Book</h1>
    <?php
    $books = [
        "Do Androids Dream of Electric Sheep",
        "The Langoliers",
        "Hail Mary"
    ];
    ?> 
    <ul>
        <?php foreach ($books as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach; ?>
    </ul> -->

    <!-- Associated Arrays -->
    <?php
    $books = [
        [
            'name' => 'Do Androids Dream of Electric Sheep',
            'author' => 'author',
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'The Langoliers',
            'author' => 'author',
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'Hail Mary',
            'author' => 'author',
            'purchaseUrl' => 'http://example.com'
        ],
    ];
    ?>
    <ul>
        <?php foreach ($books as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>
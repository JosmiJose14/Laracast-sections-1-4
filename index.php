<?php

require 'functions.php';
// require 'router.php';

//connect to database and execute a class

require 'Database.php';

$db = new Database();
$posts = $db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC);


foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}

<?php

$heading = "Note";
$currentUserId = 1;

$config = require('config.php');
$db = new Database($config);

$note = $db->query(
    'select * from note  where  id =:id',
    ['id' =>  $_GET['id']]
)->findOrfail();

authorize($note['user_id'] <> $currentUserId) ;
require "views/note.view.php";

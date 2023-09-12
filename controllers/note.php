<?php

$heading = "Note";
$config = require('config.php');
$db = new Database($config);
$note =$db->query('select * from note  where id =:id', ['id' =>  $_GET['id']])->fetchAll();
require "views/note.view.php";

<?php

$heading = "Notes";
$config = require('config.php');
$db = new Database($config);

$notes =$db->query('select * from note  where user_id =1')->fetchAll();
require "views/notes.view.php";

<?php

$heading = "Notes";
$config = require('config.php');
$db = new Database($config);

$notes =$db->query('select * from note  where user_id =1')->get();
require "views/notes.view.php";

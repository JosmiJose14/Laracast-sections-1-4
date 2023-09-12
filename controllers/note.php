<?php

$heading = "Note";
$config = require('config.php');
$db = new Database($config);
$note =$db->query('select * from note  where  id =:id',
 [
    'id' =>  $_GET['id']
 ])->fetchAll();
$currentUserId=1;
 if($note['user_id']<> $currentUserId)
 {
    abort(Response::NOT_FOUND);
 }
require "views/note.view.php";
 
<?php

$config = require 'config.php';
$db = new Database($config);

$header = "Notes";

$notes = $db->query("select * from notes where user_id = 1")->fetchAll(PDO::FETCH_ASSOC);



require "views/notes.view.php";

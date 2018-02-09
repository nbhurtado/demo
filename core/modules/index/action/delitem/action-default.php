<?php

$item = ItemData::getById($_GET["id"]);
$book_id = $item->book_id;
$item->del();
Core::redir("./index.php?view=ejemplar&id=$book_id");


?>
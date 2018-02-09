<?php
$user = BookData::getById($_GET["id"]);
$user->del();
print "<script>window.location='index.php?view=libro';</script>";

?>
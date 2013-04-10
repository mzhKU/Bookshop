<?php // remove.php

require_once '../data/login.php';
require_once '../data/mysql_connection_setup.php';

if (isset($_POST['isbn']))
{
    $isbn  = $_POST['isbn'];
    $query = "DELETE FROM classics WHERE isbn='$isbn'";
    mysql_query($query);
}
?>

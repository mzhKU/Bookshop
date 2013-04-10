<?php // add.php

require_once '../data/login.php';
require_once '../data/mysql_connection_setup.php';

if (isset($_POST['isbn']))
{
    $author = $_POST['author'];
    $isbn   = $_POST['isbn'];
    $query  = 'INSERT INTO classics(author, isbn) VALUES("%s", "%s")';
    $query  =  sprintf($query, $author, $isbn);
    mysql_query($query);
}
?>

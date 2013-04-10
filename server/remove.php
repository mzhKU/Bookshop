<?php // remove.php

require_once '../data/login.php';
require_once '../data/mysql_connection_setup.php';

echo "remove.php";

foreach ($_POST as $key => $value)
{
    echo $key.": ".$value;
}

//if (isset($_POST['name']))
//{
//    $isbn  = $_POST['name'];
//    $query = "DELETE FROM classics WHERE isbn='$isbn'";
//    echo $query;
//    //mysql_query($query);
//}
?>

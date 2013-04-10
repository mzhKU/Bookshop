<?php // shop.php

require_once '../data/login.php';
require_once '../data/mysql_connection_setup.php';

$classics  = mysql_query("SELECT * FROM classics");
$num_books = mysql_num_rows($classics);

$shop  = '';
$shop .= '<strong>Author</strong><strong>ISBN</strong>';
for ($i=0; $i<$num_books; $i++)
{
    $book  = mysql_fetch_row($classics);
    //$shop .= "<form method='post' id='".$book[5]."' >";
    $shop .= "<form class='remove_form' method='post' >";
    $shop .= "<span class='author'>";
    $shop .= $book[0];
    $shop .= "</span>";
    $shop .= "<span class='isbn'>";
    $shop .= $book[5];
    $shop .= "</span>";
    $shop .= "<input type='submit' value='Remove'/>";
    $shop .= "<input type='hidden' value='".$book[5]."' name='isbn'>";
    $shop .= "</form>";
}
echo $shop;

mysql_close($db_server);
?>

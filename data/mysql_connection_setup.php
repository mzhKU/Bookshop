<?php // mysql_connection_setup.php

require_once 'login.php';

// Connect to MySQL server.
$db_server = mysql_connect($db_hostname, $db_username, $db_password);

// Confirm connection.
if (!$db_server)
{
    die("Unable to connect to MySQL: ".mysql_error());
}

// Check database integrity, database selected in 'login.php'.
if (!mysql_select_db($db_database, $db_server))
{
    die("Unable to select database.".mysql_error());
}

// Fetch input from browser.
function get_post($var)
{
    return mysql_real_escape_string($_POST[$var]);
}
?>

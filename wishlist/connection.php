<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "pawsomeadoptdb";
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

//Check connection
if (!$conn) {
    die("failed to connect!");
}

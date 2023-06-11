<?php
//cash rules everything around me ..
include_once("config.php");
$db = new SQLite3($dataBasePath);

$version = $db->querySingle('SELECT SQLITE_VERSION()');

echo $version . "\n";
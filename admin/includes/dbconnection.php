<?php 
// DB credentials.
define('DB_HOST','bpcmzha9ne6fobumxjf7-mysql.services.clever-cloud.com');
define('DB_USER','upy60jcpc37kkkbc');
define('DB_PASS','d6E5Vq3OmhmBAQaiNWxN');
define('DB_NAME','bpcmzha9ne6fobumxjf7');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
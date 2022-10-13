<?php

//declare the database variables

$db_host = 'localhost';
$db_name = 'joshuaka_company';
$db_username = 'joshuaka_homer';
$db_password = 'd0ughnut';

//create the Data Source Name
$dsn = "mysql:host=$db_host;dbname=$db_name";

//connect to the database
try{
$db_connection = new PDO($dsn, $db_username, $db_password);
} catch(Exception $e){
        echo "There was a failure - " . $e->getmessage();
}

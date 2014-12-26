<?php
try
{
$connection = new Mongo('mongodb://admin:alvarez@ds052827.mongolab.com:52827/miblog');
    $database   = $connection->selectDB('miblog');
    $collection = $database->selectCollection('usuario');
}
catch(MongoConnectionException $e)
{
    die("Failed to connect to database ".$e->getMessage());
}
 
$cursor = $collection->find();
 
?>
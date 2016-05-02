<?php
require_once 'Log.php';

//setting a new instance 
$log= new Log("cli");

$log->info('THIS is an informartion message.');
$log->error('THIS is an error message.');
?>
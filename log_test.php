<?php
// require 'File.php';
require_once 'Log.php';

// setting a new instance 
$log = new Log("cli");
$log->info('THIS is an informartion message.');
$log->error('THIS is an error message.');


// $file = new File('file.txt');
// $file->append('hello Joshua');
// $file->close();


// $log= new Log();
// $log->logMessage('DEBUG', 'this is a debug message');
// $log->info('this is an info message');
// $log->error('this is an error message');
// $log->info('this is an info message');
// $log->error('this is an error message');

?>
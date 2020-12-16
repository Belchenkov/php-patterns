<?php


use Facade\Db;
use Facade\Mail;
use Facade\Log;
use Facade\Document;

require "functions.php";

spl_autoload_register('project_autoload');

$db = new Db('localhost', 'root', '', 'patterns');
$log = new Log('logFile.txt');
$email = new Mail('admin@admin.com', 'subject', 'message', null);

$document = new Document($db, $log, $email);
$document->save('Test Message');
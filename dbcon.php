<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
//use Kreait\Firebase\Contract\Auth;

$factory = (new Factory())
    ->withServiceAccount(__DIR__.'/sih-demo-project-firebase-adminsdk-9cqbs-6c654809a2.json')
    ->withDatabaseUri('https://sih-demo-project-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();
//$auth = $factory->createAuth();

?>
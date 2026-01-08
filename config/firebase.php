<?php
require __DIR__ . '/../vendor/autoload.php';

use Kreait\Firebase\Factory;

class FirebaseDB
{
    protected $database;

    public function __construct()
    {
        $factory = (new Factory)
            ->withServiceAccount(__DIR__ . '/firebase_credentials.json')
            ->withDatabaseUri('https://TU-PROYECTO.firebaseio.com/');

        $this->database = $factory->createDatabase();
    }

    public function getDatabase()
    {
        return $this->database;
    }
}

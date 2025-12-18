<?php

namespace App;

use Kreait\Firebase\Factory;

class Database
{
    private $firebase;
    private $database;

    public function __construct()
    {
        $this->firebase = (new Factory)->withServiceAccount(__DIR__ . '/../google-service-account.json');
        $this->database = $this->firebase->createDatabase();
    }

    public function getDatabase()
    {
        return $this->database;
    }
}

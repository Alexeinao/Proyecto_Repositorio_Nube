<?php

namespace App;

class Model
{
    protected $database;
    protected $tableName;

    public function __construct()
    {
        $this->database = (new Database())->getDatabase();
    }

    public function create(array $data)
    {
        return $this->database->getReference($this->tableName)->push($data);
    }

    public function read(string $id)
    {
        return $this->database->getReference($this->tableName)->getChild($id)->getValue();
    }

    public function update(string $id, array $data)
    {
        return $this->database->getReference($this->tableName)->getChild($id)->update($data);
    }

    public function delete(string $id)
    {
        return $this->database->getReference($this->tableName)->getChild($id)->remove();
    }

    public function getAll()
    {
        return $this->database->getReference($this->tableName)->getValue();
    }
}

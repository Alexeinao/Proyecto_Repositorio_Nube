<?php
require_once __DIR__ . '/../config/firebase.php';

class Usuario extends FirebaseDB
{
    private $nombre;
    private $email;

    public function __construct($nombre = null, $email = null)
    {
        parent::__construct();
        $this->nombre = $nombre;
        $this->email = $email;
    }

    public function guardar()
    {
        $data = [
            'nombre' => $this->nombre,
            'email' => $this->email
        ];

        $this->getDatabase()
            ->getReference('usuarios')
            ->push($data);
    }

    public function obtenerTodos()
    {
        return $this->getDatabase()
            ->getReference('usuarios')
            ->getValue();
    }
}

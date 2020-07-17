<?php

class MySQLConnection implements DBConnectionInterface {
    public function connect() {
        return "Conexión a la base de datos";
    }
}

class PasswordReminder {
    private $dbConnection;

    public function __construct(DBConnectionInterface $dbConnection) {
        $this->dbConnection = $dbConnection;
    }
}

?>
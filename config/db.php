<?php
// Conexion a base de datos con PDO
class Database
{
    private $db_host = "localhost";
    private $db_name = "db_mycalendar";
    private $db_user = "root";
    private $db_pass = "";
    private $port = "3307";
    private $pdo;

    public function __construct()
    {
        $dsn = "mysql:host=" . $this->db_host . ";dbname=" . $this->db_name . ";port=" . $this->port; // Corregido el espacio
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];

        try {
            $this->pdo = new PDO($dsn, $this->db_user, $this->db_pass, $options);
        } catch (PDOException $e) {
            // Mejor manejo del error
            error_log("Connection failed: " . $e->getMessage(), 3, 'error_log.log');
            die("Database connection error. Please check logs.");
        }
    }

    public function verifyUser($email,$pass){
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = :email AND pass = :pass");
        $stmt->execute(['email' => $email, 'pass' => $pass]);
        return $stmt->fetch();
    }

}

// Instancia de la clase Database

$database = new Database();

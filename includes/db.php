<?php
class DB{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        $this->host     = 'localhost';
        $this->db       = 'CuervoBus';
        $this->user     = 'root';
        $this->password = '';
        $this->charset  = 'uft8mb4';
    }

    function connect(){
        try{

            $connection = "mysql:host" . $this->host . ";dbname=" . $this->bd
            $options = [
                PDO:: ATTR_ERRMODE          =>PDO::ERRMODE_EXCEPTION,
                PDO:: ATTR_EMULATE_PREPARES =>false,
            ];
            $pdo = new PDO($connection, $this->user, $this->password, $options);

            return$pdo;
        }catch(PDOException $e){
            print_r('Erro connection: ' . $e->getMessage());
        }
    }
}
?>
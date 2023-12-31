<?php
class Database {
    private $host = 'localhost';
    private $usuario = 'root';
    private $senha = '';
    private $banco = 'mvc';

    protected $conexao;

    public function __construct() {
        try {
            $this->conexao = new PDO("mysql:host=$this->host;dbname=$this->banco", $this->usuario, $this->senha);
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Falha na conexão com o banco de dados: " . $e->getMessage());
        }
    }
}
?>

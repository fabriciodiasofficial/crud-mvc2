<?php
require_once 'model/Database.php';

class UserModel extends Database {
    public function getUsers() {
        $query = "SELECT id, nome, email FROM usuarios";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();

        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $users;
    }

    public function getUserById($id) {
        $query = "SELECT * FROM usuarios WHERE id = :id";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function addUser($nome, $email, $senha) {
        $query = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();
    }

    public function editUser($id, $nome, $email, $senha) {
        $query = "UPDATE usuarios SET nome = :nome, email = :email, senha = :senha WHERE id = :id";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();
    }

    public function deleteUser($id) {
        $query = "DELETE FROM usuarios WHERE id = :id";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    
    
}
?>

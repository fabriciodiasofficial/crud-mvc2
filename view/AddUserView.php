<?php
class AddUserView {
    public function showForm() {
        echo "<h2>Adicionar Usuário</h2>";
        echo '<form method="post" action="index.php?action=addUser">';
        echo 'Nome: <input type="text" name="nome" required><br>';
        echo 'Email: <input type="email" name="email" required><br>';
        echo 'Senha: <input type="password" name="senha" required><br>';
        echo '<input type="submit" value="Adicionar">';
        echo '</form>';
    }
}
?>

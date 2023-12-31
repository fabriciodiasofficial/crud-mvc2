<?php
class EditUserView {
    public function showForm($user) {
        echo "<h2>Editar Usuário</h2>";
        echo '<form method="post" action="index.php?action=editUser">';
        echo 'ID: <input type="text" name="id" value="' . $user['id'] . '" readonly><br>';
        echo 'Nome: <input type="text" name="nome" value="' . $user['nome'] . '" required><br>';
        echo 'Email: <input type="email" name="email" value="' . $user['email'] . '" required><br>';
        echo 'Senha: <input type="password" name="senha" value="' . $user['senha'] . '" required><br>';
        echo '<input type="submit" value="Salvar">';
        echo '</form>';
    }
}
?>

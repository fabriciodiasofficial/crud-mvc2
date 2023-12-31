<?php
class UserView {
    public function showUsers($users) {
        // $this->showAddUserLink(); // Adicionando o link antes da tabela
        echo "<h2>Lista de Usuários</h2>";
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Nome</th><th>Editar</th><th>Excluir</th></tr>";
        foreach ($users as $user) {
            echo "<tr><td>" . $user['id'] . "</td><td>" . $user['nome'] . "</td>";
            echo "<td><a href='index.php?action=editUserForm&id=" . $user['id'] . "'>Editar</a></td>";
            echo "<td><a href='javascript:void(0);' onclick='confirmDelete(" . $user['id'] . ")'>Excluir</a></td></tr>";

        }
        echo "</table>";

    }
    
    public function showAddUserLink() {
        echo '<p><a href="index.php?action=showAddUserForm">Adicionar Usuário</a></p>';
    }
}
?>
<script>
function confirmDelete(userId) {
    var confirmDelete = confirm("Tem certeza de que deseja excluir este usuário?");
    if (confirmDelete) {
        window.location.href = "index.php?action=deleteUser&id=" + userId;
    }
}
</script>

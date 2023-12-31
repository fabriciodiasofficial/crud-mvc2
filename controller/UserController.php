<?php
require_once 'model/UserModel.php';
require_once 'view/UserView.php';
require_once 'view/AddUserView.php';
require_once 'view/EditUserView.php';
// require_once 'view/DeleteUserView.php';


class UserController {
    private $model;
    private $userView;
    private $addUserView;

    public function __construct() {
        $this->model = new UserModel();
        $this->userView = new UserView();
        $this->addUserView = new AddUserView();
    }

    public function listUsers() {
        $this->userView->showAddUserLink(); // Adicionando o link antes da lista
        $users = $this->model->getUsers();
        $this->userView->showUsers($users);
    }

    public function showAddUserForm() {
        $this->addUserView->showForm();
    }

    public function addUser($nome, $email, $senha) {
        $this->model->addUser($nome, $email, $senha);
        $this->listUsers(); // Após adicionar, redireciona para a lista de usuários
    }

    public function editUserForm($id) {
        $user = $this->model->getUserById($id);

        if (!$user) {
            // Lógica para tratar o caso em que o usuário não é encontrado
            echo "Usuário não encontrado.";
        } else {
            $editUserView = new EditUserView();
            $editUserView->showForm($user);
        }
    }

    public function editUser($id, $nome, $email, $senha) {
        $this->model->editUser($id, $nome, $email, $senha);
        $this->listUsers(); // Após editar, redireciona para a lista de usuários
    }

    public function deleteUser($id) {
        $this->model->deleteUser($id);
        $this->listUsers(); // Após excluir, redireciona para a lista de usuários
    }
    

}
?>

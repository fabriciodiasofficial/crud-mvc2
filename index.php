<?php
require_once 'controller/UserController.php';

$userController = new UserController();

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
        case 'addUser':
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $userController->addUser($_POST['nome'], $_POST['email'], $_POST['senha']);
            }
            break;

        case 'showAddUserForm':
            $userController->showAddUserForm();
            break;

        case 'editUserForm':
            if (isset($_GET['id'])) {
                $userController->editUserForm($_GET['id']);
            }
            break;

        case 'editUser':
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $userController->editUser($_POST['id'], $_POST['nome'], $_POST['email'], $_POST['senha']);
            }
            break;

        case 'deleteUser':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $userController->deleteUser($id);
            }
            break;

        default:
            $userController->listUsers();
            break;
    }
} else {
    $userController->listUsers();
}
?>

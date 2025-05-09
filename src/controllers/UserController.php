<?php
require_once __DIR__ . '/../../src/UserRepository.php';

class UserController
{
    private $userRepo;

    public function __construct()
    {
        $this->userRepo = new UserRepository;
    }

    public function list()
    {
        $users = $this->userRepo->getAllUsers();
        include __DIR__ . '/../../templates/users/list.php';
    }

    public function showCreateForm()
    {
        include __DIR__ . '/../../templates/users/form_create.php';
    }

    public function showDeleteForm()
    {
        include __DIR__ . '/../../templates/users/delete.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->showCreateForm();
            return;
        }

        try {
            $this->userRepo->createUser(
                $_POST['username'],
                $_POST['email']
            );
            header('Location: /public/users/list.php?success=1');
            exit;
        } catch (PDOException $e) {
            $error = "Ошибка: " . $e->getMessage();
            include __DIR__ . '/../../templates/users/form_create.php';
        }
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: /public/users/list.php');
            exit;
        }

        try {
            $this->userRepo->deleteUser(
                $_POST['id'],
            );
            header('Location: /public/users/list.php?deleted=1');
            exit;
        } catch (PDOException $e) {
            error_log($e->getMessage());
            header('Location: /public/users/list.php?error=delete_failed');
            exit;
        }
    }
}

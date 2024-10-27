<?php
require_once 'app/models/User.php';
class userController
{
    private $userModel;
    public function __construct($dbConnnection)
    {
        $this->userModel = new user($dbConnnection);
    }

    public function show($id)
    {
        $user = $this->userModel->getUserById($id);
        require_once 'app/views/userView.php';
    }

    public function index()
    {
        $users = $this->userModel->getAllUsers();
        require_once 'app/views/userList.php';
    }

    public function delete($id)
    {
        $user = $this->userModel->getDeleteId($id);
        header('location:index.php');
    }

    public function edit($id)
    {
        $user = $this->userModel->getUserById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
    
            if ($this->userModel->getUpdateId($id, $name, $email)) {
                header("Location: index.php"); 
            } else {
                $error = "Gagal mengupdate data.";
            }
        }
    
        require_once 'app/views/formedit.php'; 
    }
}
?>
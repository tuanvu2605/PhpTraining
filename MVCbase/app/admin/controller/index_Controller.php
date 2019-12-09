<?php

class index_Controller extends FT_Controller
{
    public function indexAction()
    {
        $userModel = $this->model->load('user');
        $data = $userModel->fetch('SELECT * FROM users');
        $this->view->load('homePage',$data);
        echo $this->view->show();

    }

    public function editAction()
    {
        $id = $_GET['id'];
        $userModel = $this->model->load('user');
        $data = $userModel->fetch("SELECT * FROM users WHERE id = '$id'");
        $this->view->load('edit',$data);
        echo $this->view->show();
    }
    public function updateAction()
    {
        
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];        

        $userModel = $this->model->load('user');
        $userModel->query("UPDATE users SET name = '$name', email = '$email' WHERE id = '$id'");
        header('location:http://localhost/MVCbase/app/');
    }

}
?>
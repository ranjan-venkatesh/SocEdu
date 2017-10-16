<?php

class admindelusers extends Controller
{
   
    public function index()
    {
        
        $users_model = $this->loadModel('UsersModel');
        $users = $users_model->getAllData();
        echo json_encode($users);
        //echo 'hello';
        require 'application/views/_templates/adminHeader.php';
        require 'application/views/admin/admin-del_users.php';
        require 'application/views/_templates/footer.php';
    }
   
   public function removeUsers($t)
    {
       $removeusers_model = $this->loadModel('AdminModel');
        $removeusers_model->removeUsers($t);
        require 'application/views/_templates/adminHeader.php';
        require 'application/views/admin/admin-del_users.php';
        require 'application/views/_templates/footer.php';
    }
}



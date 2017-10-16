<?php

class admindelclass extends Controller
{
    /**public function __construct() {
        if ($_SESSION['login'] == FALSE) {
            header('Location: ' . URL . '/login');
        }
        parent::__construct();
    }
    **/
    public function index()
    {
        
        $clslinks_model = $this->loadModel('ClslinksModel');
        $clslinks = $clslinks_model->getAllLinks();
        echo json_encode($clslinks);
        require 'application/views/_templates/adminHeader.php';
        require 'application/views/admin/admin-del-myclass.php';
        require 'application/views/_templates/footer.php';
    }

   public function removeLinks($t)
    {
       
        $RemoveCollfeeds_model = $this->loadModel('AdminModel');
        $RemoveCollfeeds_model->removeClasslinks($t);
        
        require 'application/views/_templates/adminHeader.php';    
        require 'application/views/admin/admin-del-myclass.php';
        require 'application/views/_templates/footer.php';
    }
}



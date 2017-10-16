<?php


class admin extends Controller
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
        
        $AdminVids_model = $this->loadModel('AdminModel');
        $AdminVids_model->addVids();
        //echo json_encode($collfeeds);
        require 'application/views/_templates/adminHeader.php';
        require 'application/views/admin/index.php';
        require 'application/views/_templates/footer.php';
    }

    
  
}


<?php
/**
 * Class profile
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Profile extends Controller
{
    public function __construct() {
        if ($_SESSION['login'] == FALSE) {
            header('Location: ' . URL . '/login');
        }
        parent::__construct();
    }

    public function index()
    {
        
        $data_model = $this->loadModel('DataModel');
        $data = $data_model->getAllData();
        echo json_encode($data);
        require 'application/views/_templates/header.php';
        require 'application/views/profile/index.php';
        require 'application/views/_templates/footer.php';
    }
    

}

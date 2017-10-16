<?php


class admindelvid extends Controller
{
   /** public function __construct() {
        if ($_SESSION['login'] == FALSE) {
            header('Location: ' . URL . '/login');
        }
        parent::__construct();
    }
   **/
    public function index()
    {
        $Vids_model = $this->loadModel('VideoModel');
        $Vids = $Vids_model->getLinks();
        echo json_encode($Vids);
        require 'application/views/_templates/adminHeader.php';
        require 'application/views/admin/admin-del-vids.php';
        require 'application/views/_templates/footer.php';
    }

    public function removeVids($t)
    {
        //if (!$t) {
          //  header('Location: ' . URL . '/admindelcoll');
        //}
        $removefeeds_model = $this->loadModel('AdminModel');
        $removefeeds_model->removeVids($t);
        //echo $_POST['title'];
       require 'application/views/_templates/adminHeader.php';
        require 'application/views/admin/admin-del-vids.php';
       require 'application/views/_templates/footer.php';
    }
}


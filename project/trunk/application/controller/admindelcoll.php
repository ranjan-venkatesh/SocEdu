<?php


class admindelcoll extends Controller
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
        $Collfeeds_model = $this->loadModel('CollfeedsModel');
        $collfeeds = $Collfeeds_model->getAllCollfeeds();
        echo json_encode($collfeeds);
        require 'application/views/_templates/adminHeader.php';
        require 'application/views/admin/admin-del-mycollege.php';
        require 'application/views/_templates/footer.php';
    }

    public function removeFeeds($t)
    {
        //if (!$t) {
          //  header('Location: ' . URL . '/admindelcoll');
        //}
        $removefeeds_model = $this->loadModel('AdminModel');
        $removefeeds_model->removeCollFeeds($t);
        //echo $_POST['title'];
       require 'application/views/_templates/adminHeader.php';
        require 'application/views/admin/admin-del-mycollege.php';
       require 'application/views/_templates/footer.php';
    }
}


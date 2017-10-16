<?php

/**
 * Class admin
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class adminmycollege extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        // debug message to show where you are, just for the demo
        //echo 'Message from Controller: You are in the controller home, using the method index()';
        // load views. within the views we can echo out $songs and $amount_of_songs easily
        $Collfeeds_model = $this->loadModel('AdminModel');
        $Collfeeds_model->addCollfeeds();
        //echo json_encode($collfeeds);
        require 'application/views/_templates/adminHeader.php';
        require 'application/views/admin/admin-mycollege.php';
        require 'application/views/_templates/footer.php';
    }
public function getFeeds()
    {
        // debug message to show where you are, just for the demo
        //echo 'Message from Controller: You are in the controller home, using the method index()';
        // load views. within the views we can echo out $songs and $amount_of_songs easily
        $Collfeeds_model = $this->loadModel('CollfeedsModel');
        $collfeeds = $Collfeeds_model->getAllCollfeeds();
        echo json_encode($collfeeds);
        require 'application/views/_templates/adminHeader.php';
        require 'application/views/admin/admin-del-mycollege.php';
        require 'application/views/_templates/footer.php';
    }
    /**
     * PAGE: fetchFeeds
     * This method handles what happens when you move to http://yourproject/home/exampleone
     * The camelCase writing is just for better readability. The method name is case insensitive.
     */
  public function removeFeeds($t)
    {$res=0;
        //if (!$t) {
          //header('Location: ' . URL . '/adminmycollege/getFeeds');
        //}
        $removefeeds_model = $this->loadModel('AdminModel');
        $res=$removefeeds_model->removeCollfeeds($t);
        //echo $_POST['title'];
       require 'application/views/_templates/adminHeader.php';
        require 'application/views/admin/admin-del-mycollege.php';
       require 'application/views/_templates/footer.php';
       if($res==1)
       {
            header('Location: ' . URL . '/adminmycollege/getFeeds');
       }
    }  
}



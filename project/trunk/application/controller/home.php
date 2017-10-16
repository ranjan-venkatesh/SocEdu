<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Home extends Controller
{
  //  public function __construct() {
    //    if ($_SESSION['login'] == FALSE || $_SESSION['username'] == FALSE) {
        //    header('Location: ' . URL . '/login');
      //  }
        //parent::__construct();
   // }

    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        $feed_model = $this->loadModel('FeedModel');
        $feeds = $feed_model->getAllFeeds();
       // echo json_encode($feeds);
        require 'application/views/_templates/header.php';
        require 'application/views/home/index.php';
        require 'application/views/_templates/footer.php';
    }
    
    public function postFeed() {
        $feed_model = $this->loadModel('FeedModel');
        $feeds = $feed_model->addFeeds();
        echo $_POST['newfeed'];
        
    }
    public function getFeed() {
        $feed_model = $this->loadModel('FeedModel');
        $feeds = $feed_model->getFeed();
        response.write("hhhh");
    require 'application/views/_templates/header.php';
        require 'application/views/home/index.php';
        require 'application/views/_templates/footer.php';
    }
    public function checkProfile($t){
        $data_model = $this->loadModel('DataModel');
        $data=$data_model->viewProfile($t);
        echo json_encode($data);
        //response.write(console.log);
    require 'application/views/_templates/header.php';
        require 'application/views/profile/profileview.php';
        require 'application/views/_templates/footer.php';
        
    }
}

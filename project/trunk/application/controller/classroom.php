<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Classroom extends Controller {

    public function __construct() {
        if ($_SESSION['login'] == FALSE) {
            header('Location: ' . URL . '/login');
        }
        parent::__construct();
    }
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index() {
        // debug message to show where you are, just for the demo
        //
        // load views. within the views we can echo out $songs and $amount_of_songs easily
        $clslinks_model = $this->loadModel('ClslinksModel');
        $Clslinks = $clslinks_model->getAllLinks();
        $clsvideo_model = $this->loadModel('VideoModel');
        $clsvids = $clsvideo_model->getLinks();
        //var clslinks = json_encode($Clslinks);
        //echo json_encode($Clslinks);
//        echo json_encode($clsvids);
        $c=json_encode($Clslinks);
       // $v= json_encode($clsvids);
        //$r = $c.$v;
        //echo $v;
        require 'application/views/_templates/header.php';
        require 'application/views/classroom/index.php';
        require 'application/views/_templates/footer.php';
    }

    /**
     * 
     * @param type $inMediaID
     */
    public function tutorial($inMediaID) {
        if (!$inMediaID) {
            header('Location: ' . URL . '/classroom');
        }
        $VideoModel = $this->loadModel('VideoModel');
        $Video = $VideoModel->getVideo($inMediaID);
        $comment_model = $this->loadModel('CommentModel');
        $comments = $comment_model->getComments($inMediaID);
        require 'application/views/_templates/header.php';
        require 'application/views/classroom/tutorial.php';
        require 'application/views/_templates/footer.php';
    }

    /**
     * Fecthes Video links in json format. These video links are a bunch of Link Objects
     * @see 
     */
    public function fetchVideoLinks() {
        
    }
 public function postComment($inMediaID)
{//echo 'Message from Controller: You are in the controller classroom, using the method postcmngt()';
if (!$inMediaID) {
header('Location: ' . URL . '/classroom');
}
$CommModel = $this->loadModel('CommentModel');
$CommModel->postComment($inMediaID);
$comments = $CommModel->getComments($inMediaID);
echo json_encode($comments);
}
}

<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class college extends Controller
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
        $Collfeeds_model = $this->loadModel('CollfeedsModel');
        $collfeeds = $Collfeeds_model->getAllCollfeeds();
        //        echo json_encode($collfeeds);
        require 'application/views/_templates/header.php';
        require 'application/views/college/index.php';
        require 'application/views/_templates/footer.php';
    }

    /**
     * PAGE: fetchFeeds
     * This method handles what happens when you move to http://yourproject/home/exampleone
     * The camelCase writing is just for better readability. The method name is case insensitive.
     */
    public function fetchFeeds()
    {
        // debug message to show where you are, just for the demo
        //echo 'Message from Controller: You are in the controller home, using the method exampleOne()';
        // load views. within the views we can echo out $songs and $amount_of_songs easily
        require 'application/views/_templates/header.php';
        require 'application/views/home/example_one.php';
        require 'application/views/_templates/footer.php';
    }
}


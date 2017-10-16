
<?php

/**
 * Class admin
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class adminadd_users extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        $r=0;
        $AdminUsers_model = $this->loadModel('AdminModel');
        $r=$AdminUsers_model->addUsers();
        //if($r==0)
       // {
        // echo 'cannot create!!!';
        //}
        
        require 'application/views/_templates/adminHeader.php';
        require 'application/views/admin/admin-add_users.php';
        require 'application/views/_templates/footer.php';
    }

    
    
}


<?php

/**
 * Class Login
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Login extends Controller {

    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index() {
        $login_model = $this->loadModel('LoginModel');
        $reslt = $login_model->getlogin();     // it call the getlogin() function of model class and store the return value of this function into the reslt variable.
        if ($reslt == 'login') {
            header('Location: ' . URL . '/');
        } else if ($reslt == 'admin') {
            require 'application/views/_templates/adminHeader.php';
            require 'application/views/admin/index.php';
            require 'application/views/_templates/footer.php';
        } else {
            require_once 'application/views/_templates/headerWithoutMenu.php';
            require 'application/views/login/index.php';
            require 'application/views/_templates/footer.php';
        }
    }

}

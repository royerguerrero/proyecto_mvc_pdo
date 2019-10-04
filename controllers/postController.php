<?php

  class postController extends Post{

    public function __construct(){
      Security::verifyUser();
    }

    public function index(){
      require_once 'views/layouts/header.php';
      require_once 'views/user/navbar-user.php';
      require_once 'views/user/index.php';
      require_once 'views/index/index.php';
      require_once 'views/layouts/footer.php';
    }

  }

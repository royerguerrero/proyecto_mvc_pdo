<?php

  class securityController extends Security {

      public function login(){
        $user = parent::validateLogin($_POST['email']);

        if(!is_object($user)) die('Ingreso incorrecto.');

        if(password_verify($_POST['password'], $user->password)){
          $_SESSION['user'] = $user;
          header('Location: ?controller=post');
        }else{
          header('Location: ?method=login');
        }
      }

      public function logout(){
        unset($_SESSION['user']);
        session_destroy();
        header('location:?controller=index');
      }
  }

 ?>

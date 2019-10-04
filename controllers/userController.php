<?php

  class userController extends User{

    public function __construct()
    {
        Security::verifyUser();
    }


    public function index(){
        require_once 'views/layouts/header.php';
        require_once 'views/user/index.php';
        require_once 'views/layouts/footer.php';
    }

    public function create(){
        require_once 'views/layouts/header.php';
        require_once 'views/user/create.php';
        require_once 'views/layouts/footer.php';
    }

    public function store(){
      var_dump($_POST['id_rol']);
        if(isset($_POST)){
          if ($_POST['password'] == $_POST['password_repeat']) {
            $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
            if($_FILES['file']['name'] != ""){
              $dir = "assets/img/" . $_FILES['file']['name'];
              move_uploaded_file($_FILES["file"]["tmp_name"], $dir);
              $_POST['img'] = $dir;
              echo parent::register($_POST) ? header('location: ?controller=index&method=login') : 'Error en el registro';
            }else{
              die("Don't Exits Files");
            }
          }else{
            die("Password no match");
          }
        }
    }

    //consultar y luego mostrar la informacion en el formulario
    public function edit(){
        $user = parent::find($_GET['id']);
        require_once 'views/layouts/header.php';
        require_once 'views/user/edit.php';
        require_once 'views/layouts/footer.php';
    }

    //Validaciones e interaccion model
    public function update(){
        var_dump(parent::update_register($_POST));
    }


    //
    public function delete(){

    }
  }

?>

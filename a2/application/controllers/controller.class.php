<?php
class Controller{
  public $load;
  public $user;

  function __contstruct(){
    $this->load = new Load();
    $this->user = new User();
    $this->home();
  }

  function home(){

    $this->user->userID = 'comarley';
    $this->user->firstname = 'Conor';
    $this->user->lastname = 'Marley';
    $this->user->email = 'comarley@iupui.edi';
    $this->user->role = 'user';


    $data = $this->user->getName();
    $this->load->view('view.php',$data);
  }
}
 ?>

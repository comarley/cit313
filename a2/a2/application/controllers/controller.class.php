<?php
class Controller {
    public $load;
    public $user;
    function __construct() {
        $this->load = new Load();
        $this->user = new User();
        $this->home();
    }
    function home() {
        $this->user->userID = 'comarley';
        $this->user->firstname = 'Conor';
        $this->user->lastname = 'Marley';
        $this->user->email = 'comarley@iu.edu';
        $this->user->role = 'admin';
        $data = $this->user->getName();
        $this->load->view('view.php',$data);
    }
}
?>

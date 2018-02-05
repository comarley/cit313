<?php
class user1 extends user{


public function __construct($user_level, $user_id) {
  parent::__construct($user_level);
  $this->user_level = 1;
}

public function __set($name,$value) {
  $this->name = $value;
  return;
}

public function __get($name) {
  return $this->$name;
}

public function __desctruct() {

}

}
?>

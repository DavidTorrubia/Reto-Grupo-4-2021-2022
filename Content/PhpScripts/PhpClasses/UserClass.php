<?php
class User {
  private $name;
  private $id;
  private $isAdmin;
  private $isLogged;
  public function __construct() {
    $this->name = "Invitado";
    $this->id = null;
    $this->isAdmin = 0;
    $this->isLogged = false;
  }
  public function set_name ($name){
    $this->name = $name;
  }
  public function set_id ($id){
    $this->id = $id;
  }
  public function set_isAdmin ($isAdmin){
    $this->isAdmin = $isAdmin;
  }
  public function set_isLogged ($isLogged){
    $this->isLogged = $isLogged;
  }
  public function get_name() {
    return $this->name;
  }
  public function get_id() {
    return $this->id;
  }
  public function get_isAdmin() {
    return $this->isAdmin;
  }
  public function get_isLogged() {
    return $this->isLogged;
  }
}
?>
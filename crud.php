<?php
include_once('DbConfig.php');

class Crud extends DBConfig{

  public function __construct(){
    parent::__construct();
  }

  public function getData($query){

    $result = $this->con->query($query);

    if($result == false){
      return false;
    }

    $data_from_db = array();

    while($data_fetch = $result->fetch_assoc()){
      $data_from_db[] = $data_fetch;
    }

    return $data_from_db;

  }

  public function execute($query){

    $result = $this->con->query($query);

    if($result == false){
      return false;
    }
    return true;
  }
}

?>

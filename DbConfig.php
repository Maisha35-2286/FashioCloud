<?php
  class DBConfig{
    private $_host = "localhost";
    private $_dbuser = "root";
    private $_dbpass = "";
    private $_dbname = "fashion";

    protected $con;

    public function __construct(){
      if(empty($this->con)){
        $this->con = new mysqli($this->_host,$this->_dbuser,$this->_dbpass,$this->_dbname);
        if($this->con){
          return $this->con;
        }else {
          echo "Database Not Connected!";
          exit;
        }
      }
      return $this->con;
    }

  }
?>

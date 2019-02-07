<?php
  class User_Model extends CI_Model{

    function _construct(){
      parent:: _construct();
    }

    public function insert($data){
      if ($this->db->insert("user", $data)){
        return true;
      }
    }
  }
 ?>

<?php
  class User extends CI_Controller{

    function _construct(){
      parent::_construct();
      $this->load->database();
    }

    public function index(){
      $this->load->helper('url');
      $this->load->view('main_page');
    }

    public function show(){
      $this->load->helper('form');
      $this->load->view('user');
    }
    public function new_user(){
      $this->load->model('User_Model');

      $data  = array(
        'Email' => $this->input->post('email'),
        'Name' => $this->input->post('name'),
        'Password' => $this->input->post('password')
      );
      $result = $this->User_Model->insert($data);
      if ($result == true){
        echo '<script language="javascript">';
	      echo 'alert("Account created Successfully!!!")';
	      echo '</script>';
      }
      else{

      }
    }
  }
 ?>

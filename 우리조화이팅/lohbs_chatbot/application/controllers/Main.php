<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data = array();
    $this->load->view('lohbs/main', $data);
  }

  public function chat()
  {
    $data = array();
    $this->load->view('lohbs/chat', $data);
  }

  public function data()
  {
    $info = $_POST['info'];
    if (substr($info, -3) == "won"){
       error_log($info); 
    }
   
    
    //error_log($info);
  }

  public function search_cos()
  {
    $data = array();
    $this->load->view('lohbs/search_cos', $data);
  }

  public function report()
  {
    $data = array();
    $this->load->view('lohbs/report', $data);
  }
}







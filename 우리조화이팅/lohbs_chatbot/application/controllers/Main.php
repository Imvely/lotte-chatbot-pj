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
}







<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Main_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  function chat_r($data = array())
  {
    $sql = "INSERT INTO `chatbot` (chat, del_flag) 
    VALUES (?, 'N')";
    $this->db->query($sql,
      array(
        $data['info']
        ));
    return $this->db->insert_id();
  }
}
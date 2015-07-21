<?php
/**
 *
 */
class Memberpat extends CI_Controller
{

  function index()
  {
    $this->load->helper('url');
    if(isset($_COOKIE['username'])&& isset($_COOKIE['password']))//isset คือการตรวจสอบค่าว่ามียุมัย
    {
      $this->load->model('Member');
      $this->Member->setUsername($_COOKIE['username']);
      $this->Member->setPassword($_COOKIE['password']);
      if(!$this->Member->login())
      {
        redirect(base_url('index.php/Chacklogin'));
      }
    }
    else
    {
        redirect(base_url('index.php/Chacklogin'));
    }

    echo 'มาทำมัย'.'<a href="'.base_url('index.php/Chacklogin/logout').'">ออก</a>';
  }
}

 ?>

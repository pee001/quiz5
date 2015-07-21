<?php
class Chacklogin extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
  
  }
  function logout()
  {
    setcookie('username','',time()-3600,'/');
    setcookie('password','',time()-3600,'/');
    redirect(base_url('index.php/Chacklogin'));
  }
  function index()
  {
    if(isset($_COOKIE['username'])&& isset($_COOKIE['password']))//isset คือการตรวจสอบค่าว่ามียุมัย
   {
     $this->load->model('Member');
     $this->Member->setUsername($_COOKIE['username']);
     $this->Member->setPassword($_COOKIE['password']);
     if($this->Member->login())
     {
       redirect(base_url('index.php/Sussess'));
     }
   }
   if($this->input->post())
   {
     $this->load->model('Member');
     $this->Member->setUsername($this->input->post('username'));
     $this->Member->setPassword($this->input->post('password'));
     if($this->Member->login())
     {
       setcookie('username',$this->input->post('username'),(time()+3600),'/');
       setcookie('password',$this->input->post('password'),(time()+3600),'/');
       redirect(base_url('index.php/Sussess'));
     }
     else
     {
         echo "username,password ไม่ถูกต้อง";
     }
   }
     $this->load->view('viewlogin');
  }


}
?>

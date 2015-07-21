<?php

class Member extends CI_model
{
  var $id;
  var $username;
  var $password;
  var $name;
  var $lastname;

  function __construct()
  {
    $this->load->database();
    parent::__construct();
  }
    public function setId($id)
    {
      $this->id = $id;
    }

    public function getId()
    {
    return $this->id;
    }
    ###########################################
    public function setUsername($username)
    {
      $this->username = $username;
    }
    public function getUsername()
    {
    return $this->username;
    }
    #############################################
    public function setPassword($password)
    {
    $this->password = $password;
    }

    public function getPassword()
    {
    return $this->password;
    }
    ##############################################
    public function setName($name)
    {
    $this->name = $name;
    }

    public function getName()
    {
    return $this->name;
    }
    ###########################################
    public function setLastname($lastname)
    {
    $this->lastname = $lastname;
    }

    public function getLastname()
    {
    return $this->lastname;
    }
    ############################################
    public function add()
    {
      $array = array
      (
      'username'  => $this->getUsername(),
			'password' => $this->getPassword(),
      'name' => $this->getName(),
      'lastname' => $this->getLastname()

		);

		$this->db->insert('testmember', $array);
    return $this->db->insert_id();
    }
    function login()
  	 {
       $this -> db -> select('*');  						###########
  	   $this -> db -> from('testmember'); 						 ########### เช็คข้อมูลใน DB
  	   $this -> db -> where('username', $this->getUsername()); ###########
  	   $this -> db -> where('password', $this->getPassword()); ###########
  	   $this -> db -> limit(1); ############## ตำกัดให้คืนค่าแค่ record เดียว

  	   $query = $this -> db -> get(); ##############  สั่งดึงข้อมูลตามเงื่อนไข

  	   if($query -> num_rows() == 1)  ############  เมื่อมีข้อมูล 1 record
  	   {
  			 return $data=$query->result(); #############$query->result() ส่งค้าที่ดึงได้กลับ ใส่trueเพื่อทดสอบ
  	   }
  	   else ########### เมื่อไม่ตรงตามเงื่อนไข
  	   {
  			  return FALSE;  ############# ส่งค้า FALSE กลับ
  	   }
  	 }
}

 ?>

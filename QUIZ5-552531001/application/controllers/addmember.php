<?php
class Addmember extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
    $this->load->helper('url');
		$this->load->library('form_validation');
	}

	function adddata()
	{
    $this->form_validation->set_rules('name', 'name', 'min_length[3]',
			array(
					'min_length'=>'ช้อง{field}ต้องไม่น้อยกว่า {param} ตัวอักษร'
		));
    $this->form_validation->set_rules('lastname', 'name', 'min_length[3]',
      array(
          'min_length'=>'ช้อง{field}ต้องไม่น้อยกว่า {param} ตัวอักษร'
    ));

      $this->form_validation->set_rules('username', 'USERNAME', 'required|min_length[5]|max_length[20]',
      array(
        'required' => 'กรุณากรอก{field}',
        'min_length'=>'ช้อง{field}ต้องไม่น้อยกว่า {param} ตัวอักษร',
        'max_length'=>'ช่อง{field}ไม่มากกว่า {param}ตัวอักษร'
        ));
        $this->form_validation->set_rules('pass1', 'Password', 'required|min_length[5]|max_length[50]',
        array(
          'required' => 'กรุณากรอก{field}',
          'min_length'=>'ช้อง{field}ต้องไม่น้อยกว่า {param} ตัวอักษร',
          'max_length'=>'ช่อง{field}ไม่มากกว่า {param}ตัวอักษร'
          ));

		//$this->load->library('upload',$config);
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('show');
		}
		else
		{
				$this->load->model('Member');
				$this->Member->setName($this->input->post('name'));
				$this->Member->setLastname($this->input->post('lastname'));
				$this->Member->setUsername($this->input->post('username'));
				$this->Member->setPassword($this->input->post('pass1'));
       // $this->Member->set('user');


				 $this->Member->add();



			//$this->load->view('homeaddtour');

      $this->load->view('viewlogin');
      //echo "<script language='javascript'>alert('  succses!');</script>";
		}


	//	$this->load->view('Homeaddtour');
	}
  function index(){
    $this->load->view('show');
  }



}
?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class unittest extends CI_Controller
{


    public function index()
    {
      $memberId =0;

      $this->load->library('unit_test');
      $this->load->model('Member');
      $this->Member->setName('hangdong');
      $this->Member->setLastname('ddd');
      $this->Member->setUsername('user');
      $this->Member->setPassword('12345');

      $test=$this->Member->add();
      $memberId = $test ;
      $expencted_resut ='is_int';
      $this->unit->run($test,$expencted_resut,'UT-01 :add date');
    ##################################################
    $this->Member->setUsername('user');
    $this->Member->setPassword('12345');

    $test=$this->Member->login();
    $expencted_resut=true;
    $this->unit->run($test,$expencted_resut,'UT-02 :Login pass');

################################################
$this->Member->setUsername('usesr');
$this->Member->setPassword('12345');

    $test=$this->Member->login();
    $expencted_resut=false;
    $this->unit->run($test,$expencted_resut,'UT-03 :username not match');

################################################
$this->Member->setUsername('user');
$this->Member->setPassword('123452');

    $test=$this->Member->login();
    $expencted_resut=false;
    $this->unit->run($test,$expencted_resut,'UT-04 : password naot match');

################################################
$this->Member->setUsername('users');
$this->Member->setPassword('123455');

    $test=$this->Member->login();
    $expencted_resut=false;
    $this->unit->run($test,$expencted_resut,'UT-05 :username and password not match');

################################################
    echo $this->unit->report();
    }
}
?>

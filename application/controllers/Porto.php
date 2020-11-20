<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Porto extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('status') != "login") {
      redirect(base_url("login"));
    }
  }
  public function index()
  {
    $this->load->view("porto/header");
    $this->load->view("porto/navbar");
    $this->load->view("porto/card");
    $this->load->view("porto/skillpie");
    $this->load->view("porto/foot");
    $this->load->view("porto/footer");
  }
}

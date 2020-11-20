<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Pelajaran extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->model('PelajaranModel');

    if ($this->session->userdata('status') != "login") {
      redirect(base_url("login"));
    }
  }

  public function index()
  {
    $data['menu'] = 'Pelajaran';
    $data['judul'] = ' - Pelajaran';
    $data['jadwal'] = $this->PelajaranModel->view();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/navmapel', $data);
    $this->load->view('pelajaran/index', $data);
    $this->load->view('templates/footer');
  }
  public function credit()
  {
    $data['judul'] = ' - Credit ';

    $this->load->view('templates/header', $data);
    $this->load->view('templates/foot');
    $this->load->view('templates/footer');
  }
  public function Error()
  {
    $data['judul'] = ' - 404 Not Fun ';

    $this->load->view('templates/header', $data);
    $this->load->view('templates/404');
    $this->load->view('templates/footer');
  }
}

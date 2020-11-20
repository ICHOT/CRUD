<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Guru extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->model('GuruModel');

    if ($this->session->userdata('status') != "login") {
      redirect(base_url("login"));
    }
  }

  public function index()
  {
    $data['menu'] = 'Guru';
    $data['judul'] = ' - Guru';
    $data['guru'] = $this->GuruModel->view();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/navguru', $data);
    $this->load->view('guru/index', $data);
    $this->load->view('templates/footer');
  }

  public function Tambah()
  {
    if ($this->input->post('submit')) {
      if ($this->GuruModel->validation("save")) {
        $this->GuruModel->save();
        redirect('guru');
      }
    }
    $data['judul'] = ' - Tambah Data';
    $this->load->view('templates/header', $data);
    $this->load->view('guru/form_tambah');
    $this->load->view('templates/footer');
  }


  public function Ubah($KdGuru)
  {
    if ($this->input->post('submit')) {
      if ($this->GuruModel->validation("update")) {
        $this->GuruModel->edit($KdGuru);
        redirect('guru');
      }
    }
    $data['judul'] = ' - Ubah Data';
    $data['guru'] = $this->GuruModel->view_by($KdGuru);
    $this->load->view('templates/header', $data);
    $this->load->view('guru/form_ubah', $data);
    $this->load->view('templates/footer');
  }

  public function Hapus($KdGuru)
  {
    $this->GuruModel->delete($KdGuru);
    redirect('guru');
  }
}

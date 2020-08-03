<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Siswa extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->load->model('SiswaModel');
  }

  public function index()
  {
    $data['judul'] = '';
    $data['siswa'] = $this->SiswaModel->view();

    $this->load->view('templates/header', $data);
    $this->load->view('siswa/index', $data);
    $this->load->view('templates/footer');
  }

  public function tambah()
  {
    if ($this->input->post('submit')) {
      if ($this->SiswaModel->validation("save")) {
        $this->SiswaModel->save();
        redirect('siswa');
      }
    }
    $data['judul'] = ' - Tambah Data';
    $this->load->view('templates/header', $data);
    $this->load->view('siswa/form_tambah');
    $this->load->view('templates/footer');
  }

  public function ubah($nis)
  {
    if ($this->input->post('submit')) {
      if ($this->SiswaModel->validation("update")) {
        $this->SiswaModel->edit($nis);
        redirect('siswa');
      }
    }
    $data['judul'] = ' - Ubah Data';
    $data['siswa'] = $this->SiswaModel->view_by($nis);
    $this->load->view('templates/header', $data);
    $this->load->view('siswa/form_ubah', $data);
    $this->load->view('templates/footer');
  }

  public function hapus($nis)
  {
    $this->SiswaModel->delete($nis);
    redirect('siswa');
  }
}

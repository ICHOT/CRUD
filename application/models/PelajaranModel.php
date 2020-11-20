<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class PelajaranModel extends CI_Model
{
  // Fungsi untuk menampilkan semua data siswa
  public function view()
  {
    return $this->db->get('jadwal')->result();
  }

  // Fungsi untuk menampilkan data siswa berdasarkan NIS nya
  // public function view_by($nis)
  // {
  //   $this->db->where('NOMOR', $nis);
  //   return $this->db->get('jadwal')->row();
  // }
}

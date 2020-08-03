<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class SiswaModel extends CI_Model
{
  // Fungsi untuk menampilkan semua data siswa
  public function view()
  {
    return $this->db->get('siswa')->result();
  }

  // Fungsi untuk menampilkan data siswa berdasarkan NIS nya
  public function view_by($nis)
  {
    $this->db->where('NIS', $nis);
    return $this->db->get('siswa')->row();
  }

  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode)
  {
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya

    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, NIS tidak harus divalidasi
    // Jadi NIS di validasi hanya ketika menambah data siswa saja
    if ($mode == "save")
      $this->form_validation->set_rules('input_nis', 'NIS', 'required|numeric|max_length[11]');
    $this->form_validation->set_rules('input_nama', 'Nama', 'required|max_length[50]');
    $this->form_validation->set_rules('input_kelas', 'Kelas', 'required');
    $this->form_validation->set_rules('input_jurusan', 'Jurusan', 'required');

    if ($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }

  // Fungsi untuk melakukan simpan data ke tabel siswa
  public function save()
  {
    $data = array(
      "NIS" => $this->input->post('input_nis'),
      "Nama" => $this->input->post('input_nama'),
      "Kelas" => $this->input->post('input_kelas'),
      "Jurusan" => $this->input->post('input_jurusan'),
    );

    $this->db->insert('siswa', $data); // Untuk mengeksekusi perintah insert data
  }

  // Fungsi untuk melakukan ubah data siswa berdasarkan NIS siswa
  public function edit($nis)
  {
    $data = array(
      "Nama" => $this->input->post('input_nama'),
      "Kelas" => $this->input->post('input_kelas'),
      "Jurusan" => $this->input->post('input_jurusan'),
      "Kelas" => $this->input->post('input_kelas')
    );

    $this->db->where('nis', $nis);
    $this->db->update('siswa', $data); // Untuk mengeksekusi perintah update data
  }

  // Fungsi untuk melakukan menghapus data siswa berdasarkan NIS siswa
  public function delete($nis)
  {
    $this->db->where('nis', $nis);
    $this->db->delete('siswa'); // Untuk mengeksekusi perintah delete data
  }
}

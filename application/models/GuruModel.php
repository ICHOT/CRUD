<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class GuruModel extends CI_Model
{
  // Fungsi untuk menampilkan semua data siswa
  public function view()
  {
    return $this->db->get('guru')->result();
  }

  // Fungsi untuk menampilkan data siswa berdasarkan NIS nya
  public function view_by($nis)
  {
    $this->db->where('KdGuru', $nis);
    return $this->db->get('guru')->row();
  }

  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode)
  {
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya

    // Tambahkan if apakah $mode save atau update
    // Karena ke, NIStika update tidak harus divalidasi
    // Jadi NIS di validasi hanya ketika menambah data siswa saja
    if ($mode == "save")
      $this->form_validation->set_rules('input_kode', 'KODE GURU', 'required|numeric|max_length[11]');
    $this->form_validation->set_rules('input_nama', 'NAMA', 'required|max_length[50]');
    $this->form_validation->set_rules('input_pelajaran', 'PELAJARAN', 'required');
    // $this->form_validation->set_rules('input_jurusan', 'Jurusan', 'required');

    if ($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }

  // Fungsi untuk melakukan simpan data ke tabel siswa
  public function save()
  {
    $data = array(
      "KdGuru" => $this->input->post('input_kode'),
      "Nama" => $this->input->post('input_nama'),
      "Pelajaran" => $this->input->post('input_pelajaran'),
      // "Jurusan" => $this->input->post('input_jurusan'),
    );

    $this->db->insert('guru', $data); // Untuk mengeksekusi perintah insert data
  }

  // Fungsi untuk melakukan ubah data siswa berdasarkan NIS siswa
  public function edit($KdGuru)
  {
    $data = array(
      "KdGuru" => $this->input->post('input_kode'),
      "Nama" => $this->input->post('input_nama'),
      "Pelajaran" => $this->input->post('input_pelajaran')
      // "Kelas" => $this->input->post('input_kelas')
    );

    $this->db->where('KdGuru', $KdGuru);
    $this->db->update('guru', $data); // Untuk mengeksekusi perintah update data
  }

  // Fungsi untuk melakukan menghapus data siswa berdasarkan NIS siswa
  public function delete($KdGuru)
  {
    $this->db->where('KdGuru', $KdGuru);
    $this->db->delete('guru'); // Untuk mengeksekusi perintah delete data
  }
}

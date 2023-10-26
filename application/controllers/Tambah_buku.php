
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_buku extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Buku_model'); // Load model 'Buku_model'
    }

    public function index() {
        $this->load->view('input_buku');
    }

    public function tambah() {
        $judul = $this->input->post('judul');
        $pengarang = $this->input->post('pengarang');
        $penerbit = $this->input->post('penerbit');
        $tahun_terbit = $this->input->post('tahun_terbit');
        $status = $this->input->post('status');

        // Validasi data jika diperlukan
        // ...

        // Panggil fungsi di model untuk menyimpan buku
        $this->Buku_model->tambah_buku($judul, $pengarang, $penerbit, $tahun_terbit, $status);

        echo "Buku berhasil ditambahkan";
    }
}

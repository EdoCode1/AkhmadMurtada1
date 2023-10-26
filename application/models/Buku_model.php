<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_model extends CI_Model {
    public function tambah_buku($judul, $pengarang, $penerbit, $tahun_terbit, $status) {
        $data = array(
            'judul' => $judul,
            'pengarang' => $pengarang,
            'penerbit' => $penerbit,
            'tahun_terbit' => $tahun_terbit,
            'status' => $status
        );

        $this->db->insert('buku', $data);
    }
}

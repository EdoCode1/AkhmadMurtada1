// File: application/controllers/Admin.php

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function login() {
        $this->load->view('admin/login_view');
    }

    public function process_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Validasi username dan password di sini
        // ...

        // Jika login berhasil, arahkan ke halaman dashboard admin
        redirect('admin/dashboard');
    }

    public function dashboard() {
        // Halaman dashboard admin
        $this->load->view('admin/dashboard_view');
    }
}

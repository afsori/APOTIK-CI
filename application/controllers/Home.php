<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman Dashboard';
        $data['contents'] = 'home/dashboard';
        $this->load->view('templates/index', $data);
    }
}

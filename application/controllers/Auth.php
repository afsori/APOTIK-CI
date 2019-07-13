<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            // $data['judul'] = 'Halaman Login';
            // $this->load->view('templates/header', $data);
            $this->load->view('auth/login');
            // $this->load->view('templates/footer');

        } else {
            // validasi akan dijalankan ketika benar / sukses //
            // buat method baru //
            $this->cheklogin();
        }
        // $data['contents'] = 'auth/login';
        // $this->load->view('auth/login');
    }


    public function cheklogin()
    {
        $email      = $this->input->post('email');
        $password   = $this->input->post('password');
        // query chek users
        $this->db->where('email', $email);
        $this->db->where('password',  md5($password));
        $user = $this->db->get('tbl_user');
        $user = $this->db->get_where('tbl_user', ['email' => $email])->row_array();


        // $this->db->query("")

        if ($user) {
            // retrive user data to session
            $this->session->set_userdata($user);
            if ($this->session->userdata('hak_akses') == 'admin') {
                redirect('home');
            }
        } else {
            $this->session->set_flashdata('pesan', 'username atau password yang anda input salah');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        // $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                 Akun Anda sudah Keluar !
                </div>');
        redirect('auth');
    }
}

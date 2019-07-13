<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_obat extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Dataobat_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = 'Data Obat';
        $data['contents'] = 'Master_data/data_obat';
        $data['data_obat'] = $this->Dataobat_model->getAllObat();

        if ($this->input->post('keyword')) {
            $data['data_obat'] = $this->Dataobat_model->cariDataObat();
        }
        $this->load->view('templates/index', $data);
    }

    public function tambahdataobat()
    {
        $data['judul'] = 'Tambah Data Obat';
        $this->form_validation->set_rules('KODE_PRODUK', 'Kode Produk', 'required|numeric');
        $this->form_validation->set_rules('NAMA_PRODUK', 'Nama Produk', 'required');
        $this->form_validation->set_rules('HARGA_DASAR', 'Harga Dasar', 'required');
        $this->form_validation->set_rules('HARGA_JUAL_UMUM', 'Harga Umum', 'required');
        $this->form_validation->set_rules('HARGA_JUAL_BPJS', 'Harga BPJS', 'required');
        $this->form_validation->set_rules('HARGA_JUAL_MEDIS', 'Harga Medis', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['contents'] = 'Master_data/tambahdataobat';
            $this->load->view('templates/index', $data);
        } else {
            $this->Dataobat_model->TambahDataObat();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Data_obat');
        }
    }

    public function hapusobat($ID)
    {
        $this->Dataobat_model->hapusDataObat($ID);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Data_obat');
    }

    public function detailobat($ID)
    {
        $data['judul'] = 'Detail Data Obat';
        $data['data_obat'] = $this->Dataobat_model->getobatbyid($ID);
        $data['contents'] = 'Master_data/detailobat';
        // $this->load->view('templates/header', $data);
        $this->load->view('templates/index', $data);
        // $this->load->view('templates/footer');
    }

    public function ubahdataObat($ID)
    {
        $data['judul'] = 'Ubah Data Obat';
        $data['data_obat'] = $this->Dataobat_model->ambildataObat($ID);
        $data['KODE_SATUAN'] = ['Paket', 'Box', 'mg', 'Strip', 'Botol', 'Sachet'];

        // memberikan form validation untuk
        $this->form_validation->set_rules('KODE_PRODUK', 'Kode Produk', 'required');
        $this->form_validation->set_rules('NAMA_PRODUK', 'Nama Produk', 'required');
        $this->form_validation->set_rules('HARGA_DASAR', 'Harga Obat', 'required');
        $this->form_validation->set_rules('HARGA_JUAL_UMUM', 'Harga Umum', 'required');
        $this->form_validation->set_rules('HARGA_JUAL_BPJS', 'Harga BPJS', 'required');
        $this->form_validation->set_rules('HARGA_JUAL_MEDIS', 'Harga Medis', 'required');

        // Membuat Logikanya
        if ($this->form_validation->run() == FALSE) {
            $data['contents'] = 'Master_data/ubahdataObat';
            $this->load->view('templates/index', $data);
        } else {
            $this->Dataobat_model->ubahdataObat();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Data_obat');
        }
    }
}


<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Datatemplate extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Datatemplate_model', '', TRUE);
        $this->load->library('form_validation');
        //ini digunakan untuk dapat mengakses model Datatemplate_model
    }

    public function index()
    {
        $data['judul'] = 'Input Data';
        $data['produk'] = $this->Datatemplate_model->get();
        $data['contents'] = 'DataTemplate/Data_template';
        $this->load->view('templates/index', $data);
    }

    public function dataproduk()
    {
        $data['judul'] = 'Data Produk';
        $data['contents'] = 'DataTemplate/Data_template';
        $data['produk'] = $this->Datatemplate_model->getAllproduk();

        // if ($this->input->post('keyword')) {
        //     $data['data_obat'] = $this->Dataobat_model->cariDataObat();
        // }
        $this->load->view('templates/index', $data);
    }
}

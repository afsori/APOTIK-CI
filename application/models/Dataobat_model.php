<?php
class Dataobat_model extends CI_model
{
    public function getAllobat()
    {
        return $this->db->get('data_obat')->result_array();
    }

    public function cariDataObat()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('KODE_PRODUK', $keyword);
        $this->db->or_like('NAMA_PRODUK', $keyword);
        $this->db->or_like('HARGA_DASAR', $keyword);
        $this->db->or_like('HARGA_JUAL_UMUM', $keyword);
        $this->db->or_like('HARGA_JUAL_BPJS', $keyword);
        $this->db->or_like('HARGA_JUAL_MEDIS', $keyword);

        return $this->db->get('data_obat')->result_array();
    }

    public function TambahDataObat()
    {
        $data = [
            "KODE_PRODUK" => $this->input->post('KODE_PRODUK', true),
            "NAMA_PRODUK" => $this->input->post('NAMA_PRODUK', true),
            "HARGA_DASAR" => $this->input->post('HARGA_DASAR', true),
            "KODE_SATUAN" => $this->input->post('KODE_SATUAN', true),
            "HARGA_JUAL_UMUM" => $this->input->post('HARGA_JUAL_UMUM', true),
            "HARGA_JUAL_BPJS" => $this->input->post('HARGA_JUAL_BPJS', true),
            "HARGA_JUAL_MEDIS" => $this->input->post('HARGA_JUAL_MEDIS', true)

        ];

        $this->db->insert('data_obat', $data);
    }

    public function hapusDataObat($ID)
    {
        $this->db->where('id', $ID);
        $this->db->delete('data_obat');
    }

    public function getobatbyid($ID)
    {
        return $this->db->get_where('data_obat', ['ID' => $ID])->row_array();
    }

    public function ambildataObat($ID)
    {
        return $this->db->get_where('data_obat', ['ID' => $ID])->row_array();
    }


    public function ubahdataObat()
    {
        $data = [
            "KODE_PRODUK" => $this->input->post('KODE_PRODUK', true),
            "NAMA_PRODUK" => $this->input->post('NAMA_PRODUK', true),
            "HARGA_DASAR" => $this->input->post('HARGA_DASAR', true),
            "KODE_SATUAN" => $this->input->post('KODE_SATUAN', true),
            "HARGA_JUAL_UMUM" => $this->input->post('HARGA_JUAL_UMUM', true),
            "HARGA_JUAL_BPJS" => $this->input->post('HARGA_JUAL_BPJS', true),
            "HARGA_JUAL_MEDIS" => $this->input->post('HARGA_JUAL_MEDIS', true)
        ];

        $this->db->where('ID', $this->input->post('ID'));
        $this->db->update('data_obat', $data);
    }
}

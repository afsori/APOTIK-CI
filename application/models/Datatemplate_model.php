<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Datatemplate_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function get()
    {
        $query = $this->db->query('SELECT * FROM produk');
        return $query->result();
    }
    public function getAllproduk()
    {
        return $this->db->get('produk')->result_array();
    }
}

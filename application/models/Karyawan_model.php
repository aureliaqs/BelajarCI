<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan_model extends CI_Model
{
    private $_table = "karyawan";

    public $karyawan_id;
    public $nama;
    public $alamat;
    public $telepon;


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    

}
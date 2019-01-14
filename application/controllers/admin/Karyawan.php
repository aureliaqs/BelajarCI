<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model("Karyawan_model");
        }
 
	public function index()
	{
    //$data["products"] = $this->product_model->getAll();
    $data["karyawan"] = $this->Karyawan_model->getAll();
    $this->load->view("admin/karyawan/list" , $data);
    //var_dump($data["karyawan"]);
 
    }
 
}

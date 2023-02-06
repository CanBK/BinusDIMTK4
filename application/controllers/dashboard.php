<?php
class dashboard extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model("akses");
    }

    public function index(){
        $query = $this->db->query("SELECT barang.NamaBarang, pembelian.HargaBeli*pembelian.JumlahPembelian as beli, penjualan.HarjaJual*penjualan.JumlahPenjualan as jual from ((barang JOIN penjualan ON barang.IdBarang = penjualan.IdBarang) JOIN pembelian on barang.IdBarang = pembelian.IdBarang) GROUP by barang.IdBarang"); 
        $data['nama'] = json_encode(array_column($query->result(), 'NamaBarang'),JSON_NUMERIC_CHECK);
        $data['beli'] = json_encode(array_column($query->result(), 'beli'),JSON_NUMERIC_CHECK);
        $data['jual'] = json_encode(array_column($query->result(), 'jual'),JSON_NUMERIC_CHECK);
        $this->load->view('headfoot/header');
        $this->load->view('dashboard', $data);
        $this->load->view('headfoot/footer');
    }

}?>

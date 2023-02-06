<?php defined('BASEPATH') OR exit('No direct script access allowed');

class akses extends CI_Model
{
    private $_table = 'hakakses';

    public function getAll(){
        return $this->db->query("SELECT * FROM `hakakses` where Keterangan != 'Tidak Aktif'")->result();
    }
    public function hapus_data($where, $_table){
        $this->db->where($where);
        $this->db->delete($_table);
    }


    public function edit_data($where, $_table) {
        return $this->db->get_where($_table,$where);
    }

    public function update_data($where,$data,$_table) {
        $this->db->where($where);
        $this->db->update($_table,$data);
    }

    public function dashboard(){
        return $this->db->query("SELECT barang.NamaBarang, pembelian.HargaBeli*pembelian.JumlahPembelian as beli, penjualan.HarjaJual*penjualan.JumlahPenjualan as jual from ((barang JOIN penjualan ON barang.IdBarang = penjualan.IdBarang) JOIN pembelian on barang.IdBarang = pembelian.IdBarang) GROUP by barang.IdBarang")->result();
    }
}?>
<?php
class hakakses extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model("akses");
    }

    public function index(){
        $data["user"] = $this->akses->getall();
        $this->load->view('headfoot/header');
        $this->load->view('hakakses/lihat', $data);
        $this->load->view('headfoot/footer');
    }

    public function tambah(){
        $this->load->view('headfoot/header');
        $this->load->view('hakakses/tambah');
        $this->load->view('headfoot/footer');
    }

    public function edit($user){
        $where = array('IdAkses' => $user);
        $data['user'] = $this->akses->edit_data($where, 'hakakses') -> result();
        $this->load->view('headfoot/header');
        $this->load->view('hakakses/edit', $data);
        $this->load->view('headfoot/footer');
    }

    // public function hapus($user){
    //     $data = array (
    //         'Keterangan'   => 'TidakAktif'
    //     );

        
    //     $where = array('IdAkses' => $user);

    //     $this->user->update_data($where,$data,'hakakses');
    //     redirect(site_url('hakakses'));
    // }

    // public function hapus($user){
    //     $where = array('IdAkses' => $user);
    //     $this->user->hapus_data($where, 'hakakses');
    //     redirect(site_url('hakakses'));
    // }

    public function hapus($user){
        $data = array(
            'Keterangan'    => 'Tidak Aktif'
        );
        $where = array('IdAkses' => $user);
        
        $this->akses->update_data($where,$data,'hakakses');
        $this->session->set_flashdata('hapus','Data berhasil dihapus!!');
        redirect(site_url('hakakses'));
    }

    public function update() {
        $id = $this->input->post('id');
        $data = array (
            'NamaAkses'     => $this->input->post('namahakakses'),
            'Keterangan'   => $this->input->post('keterangan')
        );
        $where = array (
            'IdAkses' => $id
        );

        $this->akses->update_data($where,$data,'hakakses');
        $this->session->set_flashdata('hapus','Data berhasil dihapus!!');
        redirect(site_url('hakakses'));
    }


    public function save(){
            $data = array(
                'NamaAkses'     => $this->input->post('namahakakses'),
                'Keterangan'   => $this->input->post('keterangan')
            );
            $this->db->insert('hakakses', $data);
            redirect('hakakses');
        }
}?>
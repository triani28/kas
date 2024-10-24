<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemasukan extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $username = $this->session->userdata('username');
        $level = $this->session->userdata('level');
        $this->db->from('transaksi');
        $this->db->where('jenis_transaksi','Pemasukan');
        if($level =='User'){
            $this->db->where('username',$username);
        }
        $this->db->order_by('tanggal', 'DESC');
        $pemasukan = $this->db->get()->result_array();
        $data = array(
            'pemasukan' => $pemasukan
        );
        $data['title'] = 'Pemasukan - INDOROCKET';
        $this->template->load('layout/template','auth/pemasukan',array_merge($data));
    }

    public function simpan()
    {
        $data = array (
            'keterangan' => $this->input->post('keterangan'),
            'nominal' => $this->input->post('nominal'),
            'tanggal' => $this->input->post('tanggal'),
            'username' => $this->session->userdata('username'),
            'jenis_transaksi' => 'Pemasukan',
        );
        $this->db->insert('transaksi',$data);
        $this->session->set_flashdata('alert','
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fa fa-exclamation-circle me-2"></i>Yeah! Berhasil menyimpan!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('pemasukan');
    }

    public function hapus($id)
    {
        $where = array('id_transaksi' => $id);
        $this->db->Delete('transaksi',$where);
        $this->session->set_flashdata('alert','
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fa fa-exclamation-circle me-2"></i>Berhasil menghapus data!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('pemasukan');
    }
}
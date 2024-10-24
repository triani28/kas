<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        is_logged_in();
        if ($this->session->userdata('level') != 'Admin') {
            redirect('Home');
        }
    }

    public function index()
    {
        $this->db->select('*')->from('user');
        $this->db->order_by('nama', 'ASC');
        $user   = $this->db->get()->result_array();
        $data  = array('user' => $user);
        $data['title'] = 'User - INDOROCKET';
        $this->template->load('layout/template', 'admin/admin-user-index', $data);
    }



    public function tambah()
    {
        $data['title'] = 'Tambah - B-Corp';
        $this->template->load('layout/template', 'admin/admin-user-tambah', $data);
    }

    public function simpan()
    {
        $username = $this->input->post('username');

        $this->db->from('user');
        $this->db->where('username', $username);
        $cek = $this->db->get()->result_array();
        if ($cek <> NULL) {
            $this->session->set_flashdata('alert', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>Tidakk! Username sudah digunakan!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('user');
        } else {
            $this->User_model->simpan();
            $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fa fa-exclamation-circle me-2"></i>Yeah! Berhasil menyimpan data!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
            redirect('user');
        }
    }

    public function edit($id)
    {
        $this->db->select('*')->from('user');
        $this->db->where('id_user', $id);
        $user = $this->db->get()->result_array();
        $data  = array('user' => $user);
        $data['title'] = 'Edit User - INDOROCKET';
        $this->template->load('layout/template', 'admin/admin-user-edit', $data);
    }

    public function update()
    {
        $this->User_model->update();
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fa fa-exclamation-circle me-2"></i>Berhasil memperbarui data!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('user');
    }

    public function hapus($id)
    {
        $where = array('id_user' => $id);
        $this->db->Delete('user', $where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fa fa-exclamation-circle me-2"></i>Berhasil menghapus data!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('user');
    }
}

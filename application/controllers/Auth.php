<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

// LOGIN START
	public function index()
	{
        $data['title'] = 'Login Page - INDOROCKET';
		$this->template->load('layout/template_login','login/auth', $data);
	}

	public function login()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$this->db->from('user')->where('username',$username);
		$user = $this->db->get()->row();
		// var_dump($user);
		if($user==NULL){
			$this->session->set_flashdata('alert','
            <div class="alert alert-danger alert-dismissible fade show text-white" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>Username tidak ada!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('auth');
		} else if($user->password==$password){
			$data = [
				'username' 	=> $user->username,
				'nama' 		=> $user->nama,
				'level' 	=> $user->level,
				'id_user' 	=> $user->id_user,
			];
			$b = $this->session->set_userdata($data);
			redirect('home');
		} else{
			$this->session->set_flashdata('alert','
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i><p class="">Password salah!</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('auth');
		}
	}
// LOGIN END


// REGISTER START
public function logout()
{
	$session = ['username'];

	$this->session->unset_userdata($session);

	redirect('auth');
}
// REGISTER END


}

<?php 

function is_logged_in()
{
	$CI =& get_instance();

	if ( ! $CI->session->userdata('username')) :
		$CI->session->set_flashdata('alert','<div class="alert alert-danger" role="alert">
			Akses Ditolak!
			</div>');

		redirect('auth');
	endif;

}
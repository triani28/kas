<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
        is_logged_in();
        $this->load->model('Transaksi_model');
    }

    public function index()
    {
        $data['title'] = 'Dashboard - INDOROCKET';
        $this->template->load('layout/template','auth/dashboard', $data);
    }
}
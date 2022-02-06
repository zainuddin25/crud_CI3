<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Data_model");
    }

	public function login()
	{
        $output = $this->Data_model->do_login();
		$this->load->view('user/login', ["output" => $output]);
	}
}

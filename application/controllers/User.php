<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Data_model");
		if (!$this->Data_model->is_login()) {
			redirect("auth/login");
		}
	}
	public function index()
	{
		$data["daftar"] = $this->Data_model->getData();
		$data['total_asset'] = $this->Data_model->hitungJumlahAsset();
		$this->load->view('user/index', $data);
	}

	public function error()
	{
		$this->load->view("user/error");
	}

	public function tambah()
	{
		$this->load->view('user/tambah');
	}
	public function add()
	{
		if($this->Data_model->simpan()){
			redirect(base_url("index.php/user/tambah"));
		}else{
			redirect(base_url("index.php/user/error"));
		}
	}
	public function edit($id)
	{
		$data = $this->Data_model->getEdit($id);
		$this->load->view("user/edit", ['data' => $data]);
	}

	public function edit_action($id)
	{
		if ($this->Data_model->edit($id)) {
			redirect(base_url("index.php/user/edit/".$id));
		}else{
			redirect(base_url("index.php/user/error"));
		}
	}
	public function delete($id)
	{
		if ($this->Data_model->delete($id)) {
			redirect(base_url('index.php/user/'));
		}
	}
}

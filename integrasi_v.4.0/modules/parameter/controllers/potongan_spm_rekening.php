<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Class potongan_spm_rekening
*
* @author Trust
*/
// error_reporting(E_ALL);
class potongan_spm_rekening extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('parameter/potongan_spm_model');
		$this->load->library('session');
		$this->load->helper('url');
		// $this->load->library('Datatables');
	}
	
	public function index() {
		// echo "masuk";die();
		$admin_log 	= $this->auth->is_login_admin();
		{
			$container['sidebar']['view']					= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] = 60;
			$container['content']['dataset']['title'] 		= "Rekening";
			$container['content']['dataset']['title_header']= "Potongan rekening";
			$container['content']['view']					= 'parameter/potongan_spm_rekening/akun';
			$container['data']								= $this->potongan_spm_model->get_akun([7]);
			$header['admin_log']							= $admin_log;
			
			$this->load->view('admin/head');
			$this->load->view('admin/header', $header);
			$this->load->view('admin/container', $container);
			$this->load->view('admin/tables');
		}
	}

	public function kelompok($id){
		$admin_log 	= $this->auth->is_login_admin();
		{
			$potongan_spm = array(
			        	'KAR_Kd_Rek_1'  => $id,
			);
			$this->session->set_userdata($potongan_spm);

			$container['sidebar']['view']					= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] = 60;
			$container['content']['dataset']['title'] 		= "Rekening";
			$container['content']['dataset']['title_header']= "Potongan rekening";
			$container['content']['view']					= 'parameter/potongan_spm_rekening/kelompok';
			$this->potongan_spm_model->Kd_Rek_1 			= $id;
			$container['data']								= $this->potongan_spm_model->get_kelompok();			
			$header['admin_log']							= $admin_log;

			$this->load->view('admin/head');
			$this->load->view('admin/header', $header);
			$this->load->view('admin/container', $container);
			$this->load->view('admin/tables');
		}
	}

	public function jenis($id){

		$admin_log 	= $this->auth->is_login_admin();
		{
			$container['sidebar']['view']					= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] = 60;
			$container['content']['dataset']['title'] 		= "Rekening";
			$container['content']['dataset']['title_header']= "Potongan rekening";
			$container['content']['view']					= 'parameter/potongan_spm_rekening/jenis';
			$this->potongan_spm_model->Kd_Rek_1 				= $this->session->userdata('KAR_Kd_Rek_1');
			$this->potongan_spm_model->Kd_Rek_2 				= $id;

			$potongan_spm = array(
			        	'KAR_Kd_Rek_2'  => $id,
			);
			
			$this->session->set_userdata($potongan_spm);

			$container['data']								= $this->potongan_spm_model->get_jenis();			
			$header['admin_log']							= $admin_log;
			
			$this->id_kelompok 								= $id;			

			$this->load->view('admin/head');
			$this->load->view('admin/header', $header);
			$this->load->view('admin/container', $container);
			$this->load->view('admin/tables');
		}
	}

	public function obyek($id){
		$admin_log 	= $this->auth->is_login_admin();
		{
			$container['sidebar']['view']					= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] = 60;
			$container['content']['dataset']['title'] 		= "Rekening";
			$container['content']['dataset']['title_header']= "Potongan rekening";
			$container['content']['view']					= 'parameter/potongan_spm_rekening/obyek';
			$potongan_spm = array(
			        	'KAR_Kd_Rek_3'  => $id,
			);

			$this->session->set_userdata($potongan_spm);
			
			$this->potongan_spm_model->Kd_Rek_1 			= $this->session->userdata('KAR_Kd_Rek_1');
			$this->potongan_spm_model->Kd_Rek_2 			= $this->session->userdata('KAR_Kd_Rek_2');
			$this->potongan_spm_model->Kd_Rek_3 			= $id;
			$container['data']								= $this->potongan_spm_model->get_obyek();			
			$header['admin_log']							= $admin_log;

			$this->load->view('admin/head');
			$this->load->view('admin/header', $header);
			$this->load->view('admin/container', $container);
			$this->load->view('admin/tables');
		}
	}

	public function rincian($id){
		$admin_log 	= $this->auth->is_login_admin();
		{
			$container['sidebar']['view']					= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] = 60;
			$container['content']['dataset']['title'] 		= "Rekening";
			$container['content']['dataset']['title_header']= "Potongan rekening";
			$container['content']['view']					= 'parameter/potongan_spm_rekening/rincian';
			$potongan_spm = array(
			        	'KAR_Kd_Rek_4'  => $id,
			);

			$this->session->set_userdata($potongan_spm);

			$this->potongan_spm_model->Kd_Rek_1 				= $this->session->userdata('KAR_Kd_Rek_1');
			$this->potongan_spm_model->Kd_Rek_2 				= $this->session->userdata('KAR_Kd_Rek_2');
			$this->potongan_spm_model->Kd_Rek_3 				= $this->session->userdata('KAR_Kd_Rek_3');
			$this->potongan_spm_model->Kd_Rek_4 				= $id;
			$container['data']									= $this->potongan_spm_model->get_rincian();			
			$header['admin_log']								= $admin_log;

			$this->load->view('admin/head');
			$this->load->view('admin/header', $header);
			$this->load->view('admin/container', $container);
			$this->load->view('admin/tables');
		}
	}

	public function save($id){
		$admin_log 	= $this->auth->is_login_admin();
		{
			$container['sidebar']['view']					= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] = 60;
			$container['content']['view']					= 'parameter/potongan_spm_rekening/rincian';
			$potongan_spm = array(
			        	'KAR_Kd_Rek_5'  => $id,
			);
			
			$this->session->set_userdata($potongan_spm);
			redirect('parameter/potongan-spm/tambah', 'refresh');
		}
	}
}
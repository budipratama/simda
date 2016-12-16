<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Class belanja_wajib_dan_mengikat
*
* @author Trust
*/
// error_reporting(E_ALL);
class belanja_wajib_dan_mengikat extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('parameter/belanja_wajib_model');
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
			$container['content']['dataset']['title'] 		= "Wajib dan mengikat";
			$container['content']['dataset']['title_header']= "Belanja wajib-dan-mengikat";
			$container['content']['view']					= 'parameter/belanja_wajib_dan_mengikat/akun';
			$container['data']								= $this->belanja_wajib_model->get_akun([1,2,3]);
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
			$belanja_wajib = array(
			        	'KAR_Kd_Rek_1'  => $id,
			);
			$this->session->set_userdata($belanja_wajib);

			$container['sidebar']['view']					= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] = 60;
			$container['content']['dataset']['title'] 		= "Wajib dan mengikat";
			$container['content']['dataset']['title_header']= "Belanja wajib-dan-mengikat";
			$container['content']['view']					= 'parameter/belanja_wajib_dan_mengikat/kelompok';
			$this->belanja_wajib_model->Kd_Rek_1 			= $id;
			$container['data']								= $this->belanja_wajib_model->get_kelompok();			
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
			$container['content']['dataset']['title'] 		= "Wajib dan mengikat";
			$container['content']['dataset']['title_header']= "Belanja wajib-dan-mengikat";
			$container['content']['view']					= 'parameter/belanja_wajib_dan_mengikat/jenis';
			$this->belanja_wajib_model->Kd_Rek_1 				= $this->session->userdata('KAR_Kd_Rek_1');
			$this->belanja_wajib_model->Kd_Rek_2 				= $id;

			$belanja_wajib = array(
			        	'KAR_Kd_Rek_2'  => $id,
			);
			
			$this->session->set_userdata($belanja_wajib);

			$container['data']								= $this->belanja_wajib_model->get_jenis();			
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
			$container['content']['dataset']['title'] 		= "Wajib dan mengikat";
			$container['content']['dataset']['title_header']= "Belanja wajib-dan-mengikat";
			$container['content']['view']					= 'parameter/belanja_wajib_dan_mengikat/obyek';
			$belanja_wajib = array(
			        	'KAR_Kd_Rek_3'  => $id,
			);

			$this->session->set_userdata($belanja_wajib);
			
			$this->belanja_wajib_model->Kd_Rek_1 				= $this->session->userdata('KAR_Kd_Rek_1');
			$this->belanja_wajib_model->Kd_Rek_2 				= $this->session->userdata('KAR_Kd_Rek_2');
			$this->belanja_wajib_model->Kd_Rek_3 				= $id;
			$container['data']								= $this->belanja_wajib_model->get_obyek();			
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
			$container['content']['dataset']['title'] 		= "Wajib dan mengikat";
			$container['content']['dataset']['title_header']= "Belanja wajib-dan-mengikat";
			$container['content']['view']					= 'parameter/belanja_wajib_dan_mengikat/rincian';
			$belanja_wajib = array(
			        	'KAR_Kd_Rek_4'  => $id,
			);

			$this->session->set_userdata($belanja_wajib);

			$this->belanja_wajib_model->Kd_Rek_1 				= $this->session->userdata('KAR_Kd_Rek_1');
			$this->belanja_wajib_model->Kd_Rek_2 				= $this->session->userdata('KAR_Kd_Rek_2');
			$this->belanja_wajib_model->Kd_Rek_3 				= $this->session->userdata('KAR_Kd_Rek_3');
			$this->belanja_wajib_model->Kd_Rek_4 				= $id;
			$container['data']									= $this->belanja_wajib_model->get_rincian();			
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
			$container['content']['view']					= 'parameter/belanja_wajib_dan_mengikat/rincian';
			$belanja_wajib = array(
			        	'KAR_Kd_Rek_5'  => $id,
			);
			
			$this->session->set_userdata($belanja_wajib);
			redirect('parameter/belanja-wajib/tambah', 'refresh');
		}
	}
}
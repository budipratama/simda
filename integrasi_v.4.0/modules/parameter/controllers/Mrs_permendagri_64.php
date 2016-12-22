<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Class Korolari_atas_rekening
*
* @author Budi Pratama <irezpratama90@gmail.com>
*/
// error_reporting(E_ALL);
class Mrs_permendagri_64 extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('parameter/Mapping_rekening_sap_model');
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
			$container['content']['dataset']['title'] 		= "Rekening Permendagri 64";
			$container['content']['dataset']['title_header']= "Rekening Permendagri 64";
			$container['content']['view']					= 'parameter/Mrs_permendagri_64/akun';
			$container['data']								= $this->Mapping_rekening_sap_model->get_akun([4,5,6]);
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
			$korolari = array(
			        	'Mrs_Permen_64_Kd_Rek_1'  => $id,
			);
			$this->session->set_userdata($korolari);

			$container['sidebar']['view']					= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] = 60;
			$container['content']['dataset']['title'] 		= "Rekening Permendagri 64";
			$container['content']['dataset']['title_header']= "Rekening Permendagri 64";
			$container['content']['view']					= 'parameter/Mrs_permendagri_64/kelompok';
			$this->Mapping_rekening_sap_model->Kd_Rek_1 	= $id;
			$container['data']								= $this->Mapping_rekening_sap_model->get_kelompok();			
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
			$container['content']['dataset']['title'] 		= "Rekening Permendagri 64";
			$container['content']['dataset']['title_header']= "Rekening Permendagri 64";
			$container['content']['view']					= 'parameter/Mrs_permendagri_64/jenis';
			$this->Mapping_rekening_sap_model->Kd_Rek_1 				= $this->session->userdata('Mrs_Permen_64_Kd_Rek_1');
			$this->Mapping_rekening_sap_model->Kd_Rek_2 				= $id;

			$korolari = array(
			        	'Mrs_Permen_64_Kd_Rek_2'  => $id,
			);
			
			$this->session->set_userdata($korolari);

			$container['data']								= $this->Mapping_rekening_sap_model->get_jenis();			
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
			$container['content']['dataset']['title'] 		= "Rekening Permendagri 64";
			$container['content']['dataset']['title_header']= "Rekening Permendagri 64";
			$container['content']['view']					= 'parameter/Mrs_permendagri_64/obyek';
			$korolari = array(
			        	'Mrs_Permen_64_Kd_Rek_3'  => $id,
			);

			$this->session->set_userdata($korolari);
			
			$this->Mapping_rekening_sap_model->Kd_Rek_1 	= $this->session->userdata('Mrs_Permen_64_Kd_Rek_1');
			$this->Mapping_rekening_sap_model->Kd_Rek_2 	= $this->session->userdata('Mrs_Permen_64_Kd_Rek_2');
			$this->Mapping_rekening_sap_model->Kd_Rek_3 	= $id;
			$container['data']								= $this->Mapping_rekening_sap_model->get_obyek();			
			$header['admin_log']							= $admin_log;

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
			$container['content']['view']					= 'parameter/Mrs_permendagri_64/rincian';
			$korolari = array(
			        	'Mrs_Permen_64_Kd_Rek_4'  => $id,
			);

			$this->session->set_userdata($korolari);
			redirect('parameter/mapping-rekening-sap/tambah', 'refresh');
		}
	}
}
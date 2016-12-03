<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Class Korolari_atas_rekening
*
* @author Budi Pratama <irezpratama90@gmail.com>
*/
// error_reporting(E_ALL);
class Korolari_atas_rekening extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('parameter/Korolari_model');
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
			$container['content']['dataset']['title'] 		= "Atas Rekening";
			$container['content']['dataset']['title_header']= "Korolari atas-rekening";
			$container['content']['view']					= 'parameter/korolari_atas_rekening/akun';
			$container['data']								= $this->Korolari_model->get_akun([5,7]);
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
			        	'KAR_Kd_Rek_1'  => $id,
			);
			$this->session->set_userdata($korolari);

			$container['sidebar']['view']					= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] = 60;
			$container['content']['dataset']['title'] 		= "Atas Rekening";
			$container['content']['dataset']['title_header']= "Korolari atas-rekening";
			$container['content']['view']					= 'parameter/korolari_atas_rekening/kelompok';
			$this->Korolari_model->Kd_Rek_1 				= $id;
			$container['data']								= $this->Korolari_model->get_kelompok();			
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
			$container['content']['dataset']['title'] 		= "Atas Rekening";
			$container['content']['dataset']['title_header']= "Korolari atas-rekening";
			$container['content']['view']					= 'parameter/korolari_atas_rekening/jenis';
			$this->Korolari_model->Kd_Rek_1 				= $this->session->userdata('KAR_Kd_Rek_1');
			$this->Korolari_model->Kd_Rek_2 				= $id;

			$korolari = array(
			        	'KAR_Kd_Rek_2'  => $id,
			);
			
			$this->session->set_userdata($korolari);

			$container['data']								= $this->Korolari_model->get_jenis();			
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
			$container['content']['dataset']['title'] 		= "Atas Rekening";
			$container['content']['dataset']['title_header']= "Korolari atas-rekening";
			$container['content']['view']					= 'parameter/korolari_atas_rekening/obyek';
			$korolari = array(
			        	'KAR_Kd_Rek_3'  => $id,
			);

			$this->session->set_userdata($korolari);
			
			$this->Korolari_model->Kd_Rek_1 				= $this->session->userdata('KAR_Kd_Rek_1');
			$this->Korolari_model->Kd_Rek_2 				= $this->session->userdata('KAR_Kd_Rek_2');
			$this->Korolari_model->Kd_Rek_3 				= $id;
			$container['data']								= $this->Korolari_model->get_obyek();			
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
			$container['content']['dataset']['title'] 		= "Atas Rekening";
			$container['content']['dataset']['title_header']= "Korolari atas-rekening";
			$container['content']['view']					= 'parameter/korolari_atas_rekening/rincian';
			$korolari = array(
			        	'KAR_Kd_Rek_4'  => $id,
			);

			$this->session->set_userdata($korolari);

			$this->Korolari_model->Kd_Rek_1 				= $this->session->userdata('KAR_Kd_Rek_1');
			$this->Korolari_model->Kd_Rek_2 				= $this->session->userdata('KAR_Kd_Rek_2');
			$this->Korolari_model->Kd_Rek_3 				= $this->session->userdata('KAR_Kd_Rek_3');
			$this->Korolari_model->Kd_Rek_4 				= $id;
			$container['data']								= $this->Korolari_model->get_rincian();			
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
			$container['content']['view']					= 'parameter/korolari_atas_rekening/rincian';
			$korolari = array(
			        	'KAR_Kd_Rek_5'  => $id,
			);

			$this->session->set_userdata($korolari);
			redirect('parameter/korolari/tambah', 'refresh');
		}
	}
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Class Mra_rekening_permendagri_64
*
* @author Budi Pratama <irezpratama90@gmail.com>
*/
// error_reporting(E_ALL);
class Mra_rekening_permendagri_64 extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('parameter/Mapping_rek_akrual_model');
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
			$container['content']['view']					= 'parameter/mra_rekening_permendagri_64/akun';
			$container['data']								= $this->Mapping_rek_akrual_model->get_akun_akrual([1,2,3,4,5,6,7,8,9]);
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
			        	'P64_Kd_Rek_1'  => $id,
			);
			$this->session->set_userdata($korolari);

			$container['sidebar']['view']					= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] = 60;
			$container['content']['dataset']['title'] 		= "Rekening Permendagri 64";
			$container['content']['dataset']['title_header']= "Rekening Permendagri 64";
			$container['content']['view']					= 'parameter/mra_rekening_permendagri_64/kelompok';
			$this->Mapping_rek_akrual_model->Kd_Akrual_1 	= $id;
			$container['data']								= $this->Mapping_rek_akrual_model->get_kelompok_akrual();			
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
			$container['content']['view']					= 'parameter/mra_rekening_permendagri_64/jenis';
			$this->Mapping_rek_akrual_model->Kd_Akrual_1 		= $this->session->userdata('P64_Kd_Rek_1');
			$this->Mapping_rek_akrual_model->Kd_Akrual_2 		= $id;

			$korolari = array(
			        	'P64_Kd_Rek_2'  => $id,
			);
			
			$this->session->set_userdata($korolari);

			$container['data']								= $this->Mapping_rek_akrual_model->get_jenis_akrual();			
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
			$container['content']['view']					= 'parameter/mra_rekening_permendagri_64/obyek';
			$korolari = array(
			        	'P64_Kd_Rek_3'  => $id,
			);

			$this->session->set_userdata($korolari);
			
			$this->Mapping_rek_akrual_model->Kd_Akrual_1 		= $this->session->userdata('P64_Kd_Rek_1');
			$this->Mapping_rek_akrual_model->Kd_Akrual_2 		= $this->session->userdata('P64_Kd_Rek_2');
			$this->Mapping_rek_akrual_model->Kd_Akrual_3 		= $id;
			$container['data']								= $this->Mapping_rek_akrual_model->get_obyek_akrual();			
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
			$container['content']['dataset']['title'] 		= "Rekening Permendagri 64";
			$container['content']['dataset']['title_header']= "Rekening Permendagri 64";
			$container['content']['view']					= 'parameter/mra_rekening_permendagri_64/rincian';
			$korolari = array(
			        	'P64_Kd_Rek_4'  => $id,
			);

			$this->session->set_userdata($korolari);

			$this->Mapping_rek_akrual_model->Kd_Akrual_1 	= $this->session->userdata('P64_Kd_Rek_1');
			$this->Mapping_rek_akrual_model->Kd_Akrual_2 	= $this->session->userdata('P64_Kd_Rek_2');
			$this->Mapping_rek_akrual_model->Kd_Akrual_3 	= $this->session->userdata('P64_Kd_Rek_3');
			$this->Mapping_rek_akrual_model->Kd_Akrual_4 	= $id;
			$container['data']								= $this->Mapping_rek_akrual_model->get_rincian_akrual();			
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
			$container['content']['view']					= 'parameter/mra_rekening_permendagri_64/rincian';
			$korolari = array(
			        	'P64_Kd_Rek_5'  => $id,
			);

			$this->session->set_userdata($korolari);
			redirect('parameter/mapping-rek-akrual/tambah', 'refresh');
		}
	}
}
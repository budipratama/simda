<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Class Rekening_permendagri
*
* @author Budi Pratama <irezpratama90@gmail.com>
*/

class Mra_rek_permendagri_64 extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Mapping_rek_akrual_model');
		$this->load->library('session');
		$this->load->helper('url');
		// $this->load->library('Datatables');
	}
	
	public function index() {
		$admin_log 	= $this->auth->is_login_admin();
		{
			$container['sidebar']['view']					= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] = 60;
			$container['sidebar']['dataset']['title']		= 'Permendagri 64';
			$container['content']['view']					= 'parameter/mra_rek_permendagri_64/index';
			$container['data']								= $this->Mapping_rek_akrual_model->get_akun(2);
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
			$container['sidebar']['view']					= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] = 60;
			$container['sidebar']['dataset']['title']		= 'Permendagri 64';
			$container['content']['view']					= 'parameter/mra_rek_permendagri_64/kelompok';
			$this->Mapping_rek_akrual_model->akun 				= $id;
			$container['data']								= $this->Mapping_rek_akrual_model->get_kelompok(2);			
			$header['admin_log']							= $admin_log;

			$korolari = array(
			        	'mra_rek_permendagri_64_akun'  => $id,
			);

			$this->session->set_userdata($korolari);

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
			$container['sidebar']['dataset']['title']		= 'Permendagri 64';
			$container['content']['view']					= 'parameter/mra_rek_permendagri_64/jenis';
			$this->Mapping_rek_akrual_model->akun 				= $this->session->userdata('mra_rek_permendagri_64_akun');
			$this->Mapping_rek_akrual_model->kelompok 			= $id;

			$korolari = array(
			        	'mra_rek_permendagri_64_kelompok'  => $id,
			);
			
			$this->session->set_userdata($korolari);

			$container['data']								= $this->Mapping_rek_akrual_model->get_jenis(2);			
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
			$container['sidebar']['dataset']['title']		= 'Permendagri 64';
			$container['content']['view']					= 'parameter/mra_rek_permendagri_64/obyek';
			$korolari = array(
			        	'mra_rek_permendagri_64_jenis'  => $id,
			);

			$this->session->set_userdata($korolari);
			
			$this->Mapping_rek_akrual_model->akun 				= $this->session->userdata('mra_rek_permendagri_64_akun');
			$this->Mapping_rek_akrual_model->kelompok 			= $this->session->userdata('mra_rek_permendagri_64_kelompok');
			$this->Mapping_rek_akrual_model->jenis 				= $id;
			$container['data']								= $this->Mapping_rek_akrual_model->get_obyek(2);			
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
			$container['sidebar']['dataset']['title']		= 'Permendagri 64';
			$container['content']['view']					= 'parameter/mra_rek_permendagri_64/rincian';
			$korolari = array(
			        	'mra_rek_permendagri_64_obyek'  => $id,
			);

			$this->session->set_userdata($korolari);

			$this->Mapping_rek_akrual_model->akun 			= $this->session->userdata('mra_rek_permendagri_64_akun');
			$this->Mapping_rek_akrual_model->kelompok 		= $this->session->userdata('mra_rek_permendagri_64_kelompok');
			$this->Mapping_rek_akrual_model->jenis 			= $this->session->userdata('mra_rek_permendagri_64_jenis');
			$this->Mapping_rek_akrual_model->obyek 			= $id;
			$container['data']							= $this->Mapping_rek_akrual_model->get_rincian(2);			
			$header['admin_log']						= $admin_log;

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
			$container['content']['view']					= 'parameter/mra_rek_permendagri_64/rincian';
			$korolari = array(
			        	'mra_rek_permendagri_64_rincian'  => $id,
			);

			$this->session->set_userdata($korolari);
			redirect('parameter/mapping-rek-akrual', 'refresh');
		}
	}
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Class Korolari Rekening Debit
* @author Budi Pratama <irezpratama90@gmail.com>
*
*
*/
class Korolari_rekening_debit extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('parameter/Korolari_model');
		// $this->load->library('Datatables');
	}
	
	public function index()
	{
		$admin_log 	= $this->auth->is_login_admin();
		{
			$container['sidebar']['view']					= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] = 60;
			$container['content']['view']					= 'parameter/korolari_rekening_debit/index';
			$container['content']['dataset']['title'] 		= "Rekening Debit";
			$container['content']['dataset']['title_header']= "rekening-debit";

			$container['data']								= $this->Korolari_model->get_akun([1,2]);
			$header['admin_log']							= $admin_log;
			
			$this->load->view('admin/head');
			$this->load->view('admin/header', $header);
			$this->load->view('admin/container', $container);
			$this->load->view('admin/footer');
			$this->load->view('admin/tables');
		}
	}

	public function kelompok($id)
	{
		$admin_log 	= $this->auth->is_login_admin();
		{
			$korolari = array(
			        	'KRD_Kd_Rek_1_debit'  => $id,
			);

			$this->session->set_userdata($korolari);

			$container['sidebar']['view']					= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] = 60;
			$container['content']['view']					= 'parameter/korolari_rekening_debit/kelompok';
			$container['content']['dataset']['title'] 		= "Rekening Debit";
			$container['content']['dataset']['title_header']= "rekening-debit";
			$this->Korolari_model->Kd_Rek_1 				= $id;
			$container['data']								= $this->Korolari_model->get_kelompok();
			$header['admin_log']							= $admin_log;
			
			$this->load->view('admin/head');
			$this->load->view('admin/header', $header);
			$this->load->view('admin/container', $container);
			$this->load->view('admin/footer');
			$this->load->view('admin/tables');
		}
	}

	public function jenis($id)
	{
		$admin_log 	= $this->auth->is_login_admin();
		{
			$korolari = array(
			        	'KRD_Kd_Rek_2_debit'  => $id,
			);

			$this->session->set_userdata($korolari);

			$container['sidebar']['view']					= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] = 60;
			$container['content']['view']					= 'parameter/korolari_rekening_debit/jenis';
			$container['content']['dataset']['title'] 		= "Rekening Debit";
			$container['content']['dataset']['title_header']= "rekening-debit";
			$this->Korolari_model->Kd_Rek_1 				= $this->session->userdata('KRD_Kd_Rek_1_debit');
			$this->Korolari_model->Kd_Rek_2 				= $id;
			$container['data']								= $this->Korolari_model->get_jenis();
			$header['admin_log']							= $admin_log;
			
			$this->load->view('admin/head');
			$this->load->view('admin/header', $header);
			$this->load->view('admin/container', $container);
			$this->load->view('admin/footer');
			$this->load->view('admin/tables');
		}
	}

	public function obyek($id)
	{
		$admin_log 	= $this->auth->is_login_admin();
		{
			$korolari = array(
			        	'KRD_Kd_Rek_3_debit'  => $id,
			);

			$this->session->set_userdata($korolari);

			$container['sidebar']['view']					= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] = 60;
			$container['content']['view']					= 'parameter/korolari_rekening_debit/obyek';
			$container['content']['dataset']['title'] 		= "Rekening Debit";
			$container['content']['dataset']['title_header']= "rekening-debit";
			$this->Korolari_model->Kd_Rek_1 				= $this->session->userdata('KRD_Kd_Rek_1_debit');
			$this->Korolari_model->Kd_Rek_2 				= $this->session->userdata('KRD_Kd_Rek_2_debit');
			$this->Korolari_model->Kd_Rek_3 				= $id;
			$container['data']								= $this->Korolari_model->get_obyek();
			$header['admin_log']							= $admin_log;
			
			$this->load->view('admin/head');
			$this->load->view('admin/header', $header);
			$this->load->view('admin/container', $container);
			$this->load->view('admin/footer');
			$this->load->view('admin/tables');
		}
	}

	public function rincian($id)
	{
		$admin_log 	= $this->auth->is_login_admin();
		{
			$korolari = array(
			        	'KRD_Kd_Rek_4_debit'  => $id,
			);

			$this->session->set_userdata($korolari);

			$container['sidebar']['view']					= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] = 60;
			$container['content']['view']					= 'parameter/korolari_rekening_debit/rincian';
			$container['content']['dataset']['title'] 		= "Rekening Debit";
			$container['content']['dataset']['title_header']= "rekening-debit";
			$this->Korolari_model->Kd_Rek_1 				= $this->session->userdata('KRD_Kd_Rek_1_debit');
			$this->Korolari_model->Kd_Rek_2 				= $this->session->userdata('KRD_Kd_Rek_2_debit');
			$this->Korolari_model->Kd_Rek_3					= $this->session->userdata('KRD_Kd_Rek_3_debit');
			$this->Korolari_model->Kd_Rek_4 				= $id;
			$container['data']								= $this->Korolari_model->get_rincian();
			$header['admin_log']							= $admin_log;
			
			$this->load->view('admin/head');
			$this->load->view('admin/header', $header);
			$this->load->view('admin/container', $container);
			$this->load->view('admin/footer');
			$this->load->view('admin/tables');
		}
	}

	public function save($id){
		$admin_log 	= $this->auth->is_login_admin();
		{
			$container['sidebar']['view']					= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] = 60;
			$container['content']['view']					= 'parameter/korolari_atas_rekening/rincian';
			$container['content']['dataset']['title'] 		= "Rekening Debit";
			$container['content']['dataset']['title_header']= "rekening-debit";
			$korolari = array(
			        	'KRD_Kd_Rek_5_debit'  => $id,
			);

			$this->session->set_userdata($korolari);
			redirect('parameter/korolari/tambah', 'refresh');
		}
	}

}
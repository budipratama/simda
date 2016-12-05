<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Class Mapping_rek_sap
* @author Budi Pratama <irezpratama90@gmail.com>
*
*
*/


// error_reporting(E_ALL);
class Mapping_rek_akrual extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('Datatables');
		$this->load->model('Mapping_rek_akrual_model');
	}
	
	public function index()
	{
		$admin_log 	= $this->auth->is_login_admin();
		{
			$enable_readonly = true;
			if ($this->session->userdata('mra_rek_permendagri_13_rincian')!='') 
			{
				$detail_data_kredit = $this->Mapping_rek_akrual_model->getDetailRek5($this->session->userdata('mra_rek_permendagri_13_akun'),$this->session->userdata('mra_rek_permendagri_13_kelompok'),$this->session->userdata('mra_rek_permendagri_13_jenis'),$this->session->userdata('mra_rek_permendagri_13_obyek'),$this->session->userdata('mra_rek_permendagri_13_rincian'),1);
				// print_r($detail_data_kredit);
				$container['content']['dataset']['permendagri_13'] = $detail_data_kredit[0];
				$enable_readonly = false;
			}

			if ($this->session->userdata('kd_rek_5_debit')!='') 
			{
				$detail_data_debit = $this->Mapping_rek_akrual_model->getDetailRek5($this->session->userdata('kd_rek_1_debit'),$this->session->userdata('kd_rek_2_debit'),$this->session->userdata('kd_rek_3_debit'),$this->session->userdata('kd_rek_4_debit'),$this->session->userdata('kd_rek_5_debit'),2);
				// print_r($detail_data_kredit);
				$container['content']['dataset']['debit'] = $detail_data_debit[0];
				$enable_readonly = false;
			}

			if ($this->session->userdata('kd_rek_5')!='') 
			{
				$detail_data_rekening = $this->Mapping_rek_akrual_model->getDetailRek5($this->session->userdata('kd_rek_1'),$this->session->userdata('kd_rek_2'),$this->session->userdata('kd_rek_3'),$this->session->userdata('kd_rek_4'),$this->session->userdata('kd_rek_5'));
				// print_r($detail_data_kredit);
				$container['content']['dataset']['rekening'] = $detail_data_rekening[0];
				$enable_readonly = false;
			}

			$container['sidebar']['view']						= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] 	= 60;
			$container['content']['dataset']['title']			= 'Mapping Rekening AKRUAL';
			$container['content']['dataset']['enable_readonly']	= $enable_readonly;
			$container['content']['view']						= 'parameter/mapping_rek_akrual/index';
			$header['admin_log']								= $admin_log;
			
			$this->load->view('admin/head');
			$this->load->view('admin/header', $header);
			$this->load->view('admin/container', $container);
			$this->load->view('admin/footer');
		}
	}

}
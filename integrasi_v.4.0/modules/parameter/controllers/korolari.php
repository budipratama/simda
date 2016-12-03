<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Class Korolari
* @author Budi Pratama <irezpratama90@gmail.com>
*
*
*/
error_reporting(E_ALL);
class Korolari extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('Datatables');
		$this->load->model('parameter/Korolari_model');
	}
	public function index()
	{
		$admin_log 	= $this->auth->is_login_admin();
		{
			$enable_readonly = true;

			$row 		= $this->Korolari_model->showData();
			$rowAll 	= $this->Korolari_model->allData();
			$detailKAR 	= $this->Korolari_model->getDetailRek5($row->Kd_Rek_1,$row->Kd_Rek_2,$row->Kd_Rek_3,$row->Kd_Rek_4,$row->Kd_Rek_5);
			$detailKRD 	= $this->Korolari_model->getDetailRek5($row->D_Rek_1,$row->D_Rek_2,$row->D_Rek_3,$row->D_Rek_4,$row->D_Rek_5);
			$detailKRK 	= $this->Korolari_model->getDetailRek5($row->K_Rek_1,$row->K_Rek_2,$row->K_Rek_3,$row->K_Rek_4,$row->K_Rek_5);
			// print_r($detailKAR);die();
			$container['sidebar']['view']						= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] 	= 60;
			$container['content']['view']						= 'parameter/korolari/index';
			$container['content']['dataset']['data']			= $row;
			$container['content']['dataset']['id']				= $row->id;
			$container['content']['dataset']['KAR']				= $detailKAR;
			$container['content']['dataset']['KRD']				= $detailKRD;
			$container['content']['dataset']['KRK']				= $detailKAR;
			$container['content']['dataset']['browse']			= $rowAll;
			$container['content']['dataset']['enable_readonly']	= $enable_readonly;
			$header['admin_log']								= $admin_log;
			
			$this->load->view('admin/head');
			$this->load->view('admin/header', $header);
			$this->load->view('admin/container', $container);
			$this->load->view('admin/footer');
			$this->load->view('admin/tables');
		}
	}

	public function destroy()
	{	
		$this->session->unset_userdata('KAR_Kd_Rek_1');
		$this->session->unset_userdata('KAR_Kd_Rek_2');
		$this->session->unset_userdata('KAR_Kd_Rek_3');
		$this->session->unset_userdata('KAR_Kd_Rek_4');
		$this->session->unset_userdata('KAR_Kd_Rek_5');
		$this->session->unset_userdata('KRD_Kd_Rek_1_debit');
		$this->session->unset_userdata('KRD_Kd_Rek_2_debit');
		$this->session->unset_userdata('KRD_Kd_Rek_3_debit');
		$this->session->unset_userdata('KRD_Kd_Rek_4_debit');
		$this->session->unset_userdata('KRD_Kd_Rek_5_debit');
		$this->session->unset_userdata('KRK_Kd_Rek_1_kredit');
		$this->session->unset_userdata('KRK_Kd_Rek_2_kredit');
		$this->session->unset_userdata('KRK_Kd_Rek_3_kredit');
		$this->session->unset_userdata('KRK_Kd_Rek_4_kredit');
		$this->session->unset_userdata('KRK_Kd_Rek_5_kredit');
		@ redirect('parameter/korolari');
	}

	public function tambah()
	{
		$admin_log 	= $this->auth->is_login_admin();
		{
			$enable_readonly = true;

			// session korolari atas rekening
			if ($this->session->userdata('KAR_Kd_Rek_5')!='') 
			{
				$detail_data_rekening = $this->Korolari_model->getDetailRek5($this->session->userdata('KAR_Kd_Rek_1'),$this->session->userdata('KAR_Kd_Rek_2'),$this->session->userdata('KAR_Kd_Rek_3'),$this->session->userdata('KAR_Kd_Rek_4'),$this->session->userdata('KAR_Kd_Rek_5'));
				$container['content']['dataset']['rekening'] = $detail_data_rekening;
				$enable_readonly = false;
			}
			
			// session korolari rekening debit
			if ($this->session->userdata('KRD_Kd_Rek_5_debit')!='') 
			{
				$detail_data_debit = $this->Korolari_model->getDetailRek5($this->session->userdata('KRD_Kd_Rek_1_debit'),$this->session->userdata('KRD_Kd_Rek_2_debit'),$this->session->userdata('KRD_Kd_Rek_3_debit'),$this->session->userdata('KRD_Kd_Rek_4_debit'),$this->session->userdata('KRD_Kd_Rek_5_debit'));
				// print_r($detail_data_debit);
				$container['content']['dataset']['debit'] = $detail_data_debit;
				$enable_readonly = false;
			}
			
			// session korolari rekening kredit
			if ($this->session->userdata('KRK_Kd_Rek_5_kredit')!='') 
			{
				$detail_data_kredit = $this->Korolari_model->getDetailRek5($this->session->userdata('KRK_Kd_Rek_1_kredit'),$this->session->userdata('KRK_Kd_Rek_2_kredit'),$this->session->userdata('KRK_Kd_Rek_3_kredit'),$this->session->userdata('KRK_Kd_Rek_4_kredit'),$this->session->userdata('KRK_Kd_Rek_5_kredit'));
				// print_r($detail_data_kredit);
				$container['content']['dataset']['kredit'] = $detail_data_kredit;
				$enable_readonly = false;
			}
			$c = $this->Korolari_model->showData();

			$container['sidebar']['view']						= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] 	= 60;
			$container['content']['view']						= 'parameter/korolari/tambah';
			$container['content']['dataset']['enable_readonly']	= $enable_readonly;
			$header['admin_log']								= $admin_log;
			
			$this->load->view('admin/head');
			$this->load->view('admin/header', $header);
			$this->load->view('admin/container', $container);
			$this->load->view('admin/footer');
		}
	}
	
	/*public function validationPost($data)
	{
		foreach ($data as $key => $value) {
			if ($data[$key]=="") {
				$this->session->set_flashdata('errors', 'Field Tidak Boleh Kosong');
				@ redirect('parameter/korolari');
			}
		}
	}*/

	public function update($id)
	{
		$admin_log 	= $this->auth->is_login_admin();
		{
			$enable_readonly = true;

			$row 		= $this->Korolari_model->update($id);
			$rowAll 	= $this->Korolari_model->allData();
			$detailKAR 	= $this->Korolari_model->getDetailRek5($row->Kd_Rek_1,$row->Kd_Rek_2,$row->Kd_Rek_3,$row->Kd_Rek_4,$row->Kd_Rek_5);
			$detailKRD 	= $this->Korolari_model->getDetailRek5($row->D_Rek_1,$row->D_Rek_2,$row->D_Rek_3,$row->D_Rek_4,$row->D_Rek_5);
			$detailKRK 	= $this->Korolari_model->getDetailRek5($row->K_Rek_1,$row->K_Rek_2,$row->K_Rek_3,$row->K_Rek_4,$row->K_Rek_5);
			// print_r($detailKAR);die();
			$container['sidebar']['view']						= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] 	= 60;
			$container['content']['view']						= 'parameter/korolari/index';
			$container['content']['dataset']['data']			= $row;
			$container['content']['dataset']['id']				= $row->id;
			$container['content']['dataset']['KAR']				= $detailKAR;
			$container['content']['dataset']['KRD']				= $detailKRD;
			$container['content']['dataset']['KRK']				= $detailKAR;
			$container['content']['dataset']['browse']			= $rowAll;
			$container['content']['dataset']['enable_readonly']	= $enable_readonly;
			$header['admin_log']								= $admin_log;
			
			$this->load->view('admin/head');
			$this->load->view('admin/header', $header);
			$this->load->view('admin/container', $container);
			$this->load->view('admin/footer');
			$this->load->view('admin/tables');
		}
	}

	public function save()
	{
		if (!$this->Korolari_model->save($_POST))
			$this->session->set_flashdata('errors', NOTIF_UNIQUE_INPUT);
		else
			$this->session->set_flashdata('success', NOTIF_SUCCESS_INPUT);
		@ redirect('parameter/korolari/destroy');
	}

	public function hapus()
	{
		$this->Korolari_model->delete($_POST);
	}

}
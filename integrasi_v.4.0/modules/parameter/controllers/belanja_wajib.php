<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Class Belanja Wajib
* @author Trust
*
*
*/
error_reporting(E_ALL);
class belanja_wajib extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('Datatables');
		$this->load->model('parameter/belanja_wajib_model');
	}
	public function index()
	{
		$admin_log 	= $this->auth->is_login_admin();
		{
			$enable_readonly = true;

			$row 		= $this->belanja_wajib_model->showData();
			$rowAll 	= $this->belanja_wajib_model->allData();
			
			$detailKAR 	= $this->belanja_wajib_model->getDetailRek5($row->Kd_Rek_1,$row->Kd_Rek_2,$row->Kd_Rek_3,$row->Kd_Rek_4,$row->Kd_Rek_5);
			// print "<Pre>";
			// print_r($detailKAR);
			// exit;
			$container['sidebar']['view']						= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] 	= 60;
			$container['content']['view']						= 'parameter/belanja_wajib/index';
			$container['content']['dataset']['data']			= $row;
			$container['content']['dataset']['id']				= $row->id;
			$container['content']['dataset']['KAR']				= $detailKAR;
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
		@ redirect('parameter/belanja_wajib');
	}

	public function tambah()
	{
		$admin_log 	= $this->auth->is_login_admin();
		{
			$enable_readonly = true;

			// session belanja_wajib dan mengikat
			if ($this->session->userdata('KAR_Kd_Rek_5')!='') 
			{
				$detail_data_mengikat = $this->belanja_wajib_model->getDetailRek5($this->session->userdata('KAR_Kd_Rek_1'),$this->session->userdata('KAR_Kd_Rek_2'),$this->session->userdata('KAR_Kd_Rek_3'),$this->session->userdata('KAR_Kd_Rek_4'),$this->session->userdata('KAR_Kd_Rek_5'));
				$container['content']['dataset']['mengikat'] = $detail_data_mengikat;
				$enable_readonly = false;
			}
			
			$c = $this->belanja_wajib_model->showData();
			$container['sidebar']['view']						= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] 	= 60;
			$container['content']['view']						= 'parameter/belanja_wajib/tambah';
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
				@ redirect('parameter/belanja_wajib');
			}
		}
	}*/

	public function update($id)
	{
		$admin_log 	= $this->auth->is_login_admin();
		{
			$enable_readonly = true;

			$row 		= $this->belanja_wajib_model->update($id);
			$rowAll 	= $this->belanja_wajib_model->allData();
			$detailKAR 	= $this->belanja_wajib_model->getDetailRek5($row->Kd_Rek_1,$row->Kd_Rek_2,$row->Kd_Rek_3,$row->Kd_Rek_4,$row->Kd_Rek_5);
			// print_r($detailKAR);die();
			$container['sidebar']['view']						= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] 	= 60;
			$container['content']['view']						= 'parameter/belanja_wajib/index';
			$container['content']['dataset']['data']			= $row;
			$container['content']['dataset']['id']				= $row->id;
			$container['content']['dataset']['KAR']				= $detailKAR;
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
		if (!$this->belanja_wajib_model->save($_POST)){
			$this->session->set_flashdata('errors', NOTIF_UNIQUE_INPUT);
		}
		else{
			$this->session->set_flashdata('success', NOTIF_SUCCESS_INPUT);
		}
		@ redirect('parameter/belanja_wajib/destroy');
	}

	public function hapus()
	{
		$this->belanja_wajib_model->delete($_POST);
	}

	

}
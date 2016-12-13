<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Class Belanja Wajib
* @author Trust
*
*
*/
// error_reporting(E_ALL);
class belanja_wajib extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('Datatables');
		$this->load->model('parameter/belanja_wajib_model');
	}

	public function getDetailRek5($Kd_Rek_1,$Kd_Rek_2,$Kd_Rek_3,$Kd_Rek_4,$Kd_Rek_5)
	{
		$this->belanja_wajib_model->getDetailRek5($Kd_Rek_1,$Kd_Rek_2,$Kd_Rek_3,$Kd_Rek_4,$Kd_Rek_5);
	}

	public function index()
	{
		$admin_log 	= $this->auth->is_login_admin();
		{
			$enable_readonly = true;

			$row 		= $this->belanja_wajib_model->showData();
			$rowAll 	= $this->belanja_wajib_model->allData();
			// print "<pre>";
			// print_r($row);
			// print_r($rowAll);
			// exit;
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

	public function tambah()
	{
		$admin_log 	= $this->auth->is_login_admin();
		{
			$enable_readonly = true;
			
			// session belanja wajib dan mengikat
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

	public function ajax()
	{
		header('Content-Type: application/json');
		$array = array_keys($_POST);

		$row = $this->belanja_wajib_model->getDetailRek5($_POST[$array[0]],$_POST[$array[1]],$_POST[$array[2]],$_POST[$array[3]],$_POST[$array[4]]);
		// print_r($row);
		echo json_encode($row);
		exit();
	}

	/**
	* Setting flag update
	*
	*/
	public function ajaxUpdate($update)
	{
		$belanja = array('Belanja_update'  => $update);
		

		header('Content-Type: application/json');
		if ($update == 1) {
			$this->session->set_userdata($belanja);
			echo json_encode($belanja);
		} 
		else {
			$this->session->set_userdata($belanja);
			echo json_encode($belanja);
		}
		exit();
	}

	public function save()
	{
		$id = $this->session->userdata('Belanja_update');
		
		if ($this->session->userdata('Belanja_update')!='0') {
			$this->session->unset_userdata('Belanja_update');
			$this->session->unset_userdata('KAR_Kd_Rek_1');
			$this->session->unset_userdata('KAR_Kd_Rek_2');
			$this->session->unset_userdata('KAR_Kd_Rek_3');
			$this->session->unset_userdata('KAR_Kd_Rek_4');
			$this->session->unset_userdata('KAR_Kd_Rek_5');
			
			$this->updateData($id);
		}

		// echo "id ".$id;die();
		if (!$this->belanja_wajib_model->save($_POST)) {
			@redirect('parameter/belanja-wajib/destroy/1');
		}
		else {
			@redirect('parameter/belanja-wajib/destroy/0');
		}
	}

	public function destroy($error)
	{	
		$this->session->unset_userdata('KAR_Kd_Rek_1');
		$this->session->unset_userdata('KAR_Kd_Rek_2');
		$this->session->unset_userdata('KAR_Kd_Rek_3');
		$this->session->unset_userdata('KAR_Kd_Rek_4');
		$this->session->unset_userdata('KAR_Kd_Rek_5');
		
		if ($error == '1')
			$this->session->set_flashdata('errors', NOTIF_UNIQUE_INPUT);
		else
			$this->session->set_flashdata('success', NOTIF_SUCCESS_INPUT);

		@ redirect('parameter/belanja-wajib');
	}

	public function updateData($id){
        $result = $this->belanja_wajib_model->updateData($id);

        if ($result == '1') {
        	$this->session->set_flashdata('success', NOTIF_UPDATE_SUCCESS);
        }
        else {
        	$this->session->set_flashdata('errors', NOTIF_UPDATE_FAILED);
        }
        @redirect('parameter/belanja-wajib');
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

	public function hapus()
	{
		$error = $this->belanja_wajib_model->delete($_POST);

		if ($error == '1') {
			$this->session->set_flashdata('errors', NOTIF_UNIQUE_INPUT);
		}
		else {
			$this->session->set_flashdata('success', NOTIF_SUCCESS_INPUT);
		}
	}
}
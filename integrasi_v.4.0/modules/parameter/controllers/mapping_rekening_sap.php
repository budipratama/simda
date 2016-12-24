<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Class Korolari
* @author Budi Pratama <irezpratama90@gmail.com>
*
*
*/
error_reporting(E_ALL);
class Mapping_rekening_sap extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('Datatables');
		$this->load->model('parameter/Mapping_rekening_sap_model');
	}
	
	public function getDetailRek4($Kd_Rek_1,$Kd_Rek_2,$Kd_Rek_3,$Kd_Rek_4){
		$this->Mapping_rekening_sap_model->getDetailRek4($Kd_Rek_1,$Kd_Rek_2,$Kd_Rek_3,$Kd_Rek_4);
	}

	public function index()
	{
		$admin_log 	= $this->auth->is_login_admin();
		{
			$enable_readonly = true;

			$row 		= $this->Mapping_rekening_sap_model->showData();
			$rowAll 	= $this->Mapping_rekening_sap_model->allData();
			$detailKAR 	= $this->Mapping_rekening_sap_model->getDetailRek4($row->Kd_Rek_1,$row->Kd_Rek_2,$row->Kd_Rek_3,$row->Kd_Rek_4);
			$detailKRD 	= $this->Mapping_rekening_sap_model->getDetailRek4LRA($row->Kd_LRA_1,$row->Kd_LRA_2,$row->Kd_LRA_3,$row->Kd_LRA_4);
			// print_r($detailKAR);die();
			$container['sidebar']['view']						= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] 	= 60;
			$container['content']['view']						= 'parameter/mapping_rekening_sap/index';
			$container['content']['dataset']['data']			= $row;
			$container['content']['dataset']['id']				= $row->id;
			$container['content']['dataset']['KAR']				= $detailKAR;
			$container['content']['dataset']['KRD']				= $detailKRD;
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

			// session korolari atas rekening
			if ($this->session->userdata('Mrs_Permen_13_Kd_Rek_4')!='') 
			{
				$detail_data_rekening = $this->Mapping_rekening_sap_model->getDetailRek4($this->session->userdata('Mrs_Permen_13_Kd_Rek_1'),$this->session->userdata('Mrs_Permen_13_Kd_Rek_2'),$this->session->userdata('Mrs_Permen_13_Kd_Rek_3'),$this->session->userdata('Mrs_Permen_13_Kd_Rek_4'));
				$container['content']['dataset']['rekening'] = $detail_data_rekening;
				$enable_readonly = false;
			}
			
			// session korolari rekening debit
			if ($this->session->userdata('Mrs_Permen_64_Kd_Rek_4')!='') 
			{
				$detail_data_debit = $this->Mapping_rekening_sap_model->getDetailRek4LRA($this->session->userdata('Mrs_Permen_64_Kd_Rek_1'),$this->session->userdata('Mrs_Permen_64_Kd_Rek_2'),$this->session->userdata('Mrs_Permen_64_Kd_Rek_3'),$this->session->userdata('Mrs_Permen_64_Kd_Rek_4'));
				
				$container['content']['dataset']['debit'] = $detail_data_debit;
				$enable_readonly = false;
			}
			
			$c = $this->Mapping_rekening_sap_model->showData();

			$container['sidebar']['view']						= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] 	= 60;
			$container['content']['view']						= 'parameter/mapping_rekening_sap/tambah';
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

			$row 		= $this->Mapping_rekening_sap_model->update($id);
			$rowAll 	= $this->Mapping_rekening_sap_model->allData();
			$detailKAR 	= $this->Mapping_rekening_sap_model->getDetailRek4($row->Kd_Rek_1,$row->Kd_Rek_2,$row->Kd_Rek_3,$row->Kd_Rek_4);
			$detailKRD 	= $this->Mapping_rekening_sap_model->getDetailRek4($row->Kd_LRA_1,$row->Kd_LRA_2,$row->Kd_LRA_3,$row->Kd_LRA_4);
			// print_r($detailKAR);die();
			$container['sidebar']['view']						= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] 	= 60;
			$container['content']['view']						= 'parameter/mapping_rekening_sap/update';
			$container['content']['dataset']['data']			= $row;
			$container['content']['dataset']['id']				= $row->id;
			$container['content']['dataset']['KAR']				= $detailKAR;
			$container['content']['dataset']['KRD']				= $detailKRD;
			$container['content']['dataset']['browse']			= $rowAll;
			$container['content']['dataset']['enable_readonly']	= $enable_readonly;
			$container['content']['dataset'][' ']		= $id;
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
		// print_r($_POST);
		$row = $this->Mapping_rekening_sap_model->getDetailRek4($_POST[$array[0]],$_POST[$array[1]],$_POST[$array[2]],$_POST[$array[3]]);
		// print_r($row);
		echo json_encode($row);
		exit();
	}

	public function ajax2()
	{
		header('Content-Type: application/json');
		$array = array_keys($_POST);
		// print_r($_POST);
		$row = $this->Mapping_rekening_sap_model->getDetailRek4LRA($_POST[$array[0]],$_POST[$array[1]],$_POST[$array[2]],$_POST[$array[3]]);
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
		$korolari = array('Korolari_update'  => $update);
		

		header('Content-Type: application/json');
		if ($update == 1){
			$this->session->set_userdata($korolari);
			echo json_encode($korolari);
		} 
		else{
			$this->session->set_userdata($korolari);
			echo json_encode($korolari);
		}
		exit();
	}

	public function save()
	{	
		$id = $this->session->userdata('Korolari_update');
		
		if ($this->session->userdata('Korolari_update')!='0') {
			$this->session->unset_userdata('Korolari_update');
			// echo "update id ".$id;die();
			$this->session->unset_userdata('Mrs_Permen_13_Kd_Rek_1');
			$this->session->unset_userdata('Mrs_Permen_13_Kd_Rek_2');
			$this->session->unset_userdata('Mrs_Permen_13_Kd_Rek_3');
			$this->session->unset_userdata('Mrs_Permen_13_Kd_Rek_4');
			$this->session->unset_userdata('Mrs_Permen_13_Kd_Rek_5');
			$this->session->unset_userdata('Mrs_Permen_64_Kd_Rek_1');
			$this->session->unset_userdata('Mrs_Permen_64_Kd_Rek_2');
			$this->session->unset_userdata('Mrs_Permen_64_Kd_Rek_3');
			$this->session->unset_userdata('Mrs_Permen_64_Kd_Rek_4');
			$this->session->unset_userdata('Mrs_Permen_64_Kd_Rek_5');

			$this->updateData($id);
		}
		// print_r($_POST);die();
		// echo "new id ".$id;die();
		if (!$this->Mapping_rekening_sap_model->save($_POST))
			@redirect('parameter/mapping-rekening-sap/destroy/1');
		else
			@redirect('parameter/mapping-rekening-sap/destroy/0');
	}

	public function destroy($error)
	{	
		$this->session->unset_userdata('Mrs_Permen_13_Kd_Rek_1');
		$this->session->unset_userdata('Mrs_Permen_13_Kd_Rek_2');
		$this->session->unset_userdata('Mrs_Permen_13_Kd_Rek_3');
		$this->session->unset_userdata('Mrs_Permen_13_Kd_Rek_4');
		$this->session->unset_userdata('Mrs_Permen_13_Kd_Rek_5');
		$this->session->unset_userdata('Mrs_Permen_64_Kd_Rek_1');
		$this->session->unset_userdata('Mrs_Permen_64_Kd_Rek_2');
		$this->session->unset_userdata('Mrs_Permen_64_Kd_Rek_3');
		$this->session->unset_userdata('Mrs_Permen_64_Kd_Rek_4');
		$this->session->unset_userdata('Mrs_Permen_64_Kd_Rek_5');

		if ($error == '1')
			$this->session->set_flashdata('errors', NOTIF_UNIQUE_INPUT);
		else
			$this->session->set_flashdata('success', NOTIF_SUCCESS_INPUT);

		@ redirect('parameter/mapping-rekening-sap');
	}

	public function updateData($id){
		// echo "id $id";
		// print_r($_POST);
		// die();
        $result = $this->Mapping_rekening_sap_model->updateData($id);

        if ($result == '1')
                $this->session->set_flashdata('success', NOTIF_UPDATE_SUCCESS);
        else
                $this->session->set_flashdata('errors', NOTIF_UPDATE_FAILED);
        @redirect('parameter/mapping-rekening-sap');
    }

	public function hapus()
	{
		// print_r($_POST);
		// die();
		$error = $this->Mapping_rekening_sap_model->delete($_POST);

		if ($error != '1')
			$this->session->set_flashdata('errors', NOTIF_FAILED_DELETE);
		else
			$this->session->set_flashdata('success', NOTIF_SUCCESS_DELETE);
	}

	

}
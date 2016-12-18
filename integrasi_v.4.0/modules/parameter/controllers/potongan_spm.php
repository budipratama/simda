<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Class potongan spm
* @author Trust
*
*
*/
// error_reporting(E_ALL);
class potongan_spm extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('Datatables');
		$this->load->model('parameter/potongan_spm_model');
	}

	public function getDetailRek5($Kd_Rek_1,$Kd_Rek_2,$Kd_Rek_3,$Kd_Rek_4,$Kd_Rek_5)
	{
		$this->potongan_spm_model->getDetailRek5($Kd_Rek_1,$Kd_Rek_2,$Kd_Rek_3,$Kd_Rek_4,$Kd_Rek_5);
	}

	public function index()
	{
		$admin_log 	= $this->auth->is_login_admin();
		{
			$enable_readonly = true;

			$row 		= $this->potongan_spm_model->showData();
			$rowAll 	= $this->potongan_spm_model->allData();
			// print "<pre>";
			// print_r($row);
			// print_r($rowAll);
			// exit;
			$detailKAR 	= $this->potongan_spm_model->getDetailRek5($row->Kd_Rek_1,$row->Kd_Rek_2,$row->Kd_Rek_3,$row->Kd_Rek_4,$row->Kd_Rek_5);
			// print "<Pre>";
			// print_r($detailKAR);
			// exit;
			$container['sidebar']['view']						= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] 	= 60;
			$container['content']['view']						= 'parameter/potongan_spm/index';
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
			
			// session potongan spm rekening
			if ($this->session->userdata('KAR_Kd_Rek_5')!='') 
			{
				$detail_data_rekening = $this->potongan_spm_model->getDetailRek5($this->session->userdata('KAR_Kd_Rek_1'),$this->session->userdata('KAR_Kd_Rek_2'),$this->session->userdata('KAR_Kd_Rek_3'),$this->session->userdata('KAR_Kd_Rek_4'),$this->session->userdata('KAR_Kd_Rek_5'));
				$container['content']['dataset']['rekening'] = $detail_data_rekening;
				$enable_readonly = false;
			}
			
			$c = $this->potongan_spm_model->showData();
			$container['sidebar']['view']						= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] 	= 60;
			$container['content']['view']						= 'parameter/potongan_spm/tambah';
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

			$row 		= $this->potongan_spm_model->update($id);
			$rowAll 	= $this->potongan_spm_model->allData();
			$detailKAR 	= $this->potongan_spm_model->getDetailRek5($row->Kd_Rek_1,$row->Kd_Rek_2,$row->Kd_Rek_3,$row->Kd_Rek_4,$row->Kd_Rek_5);
			// print_r($detailKAR);die();
			$container['sidebar']['view']						= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] 	= 60;
			$container['content']['view']						= 'parameter/potongan_spm/index';
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

		$row = $this->potongan_spm_model->getDetailRek5($_POST[$array[0]],$_POST[$array[1]],$_POST[$array[2]],$_POST[$array[3]],$_POST[$array[4]]);
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
		$potongan = array('Potongan_update'  => $update);
		
		header('Content-Type: application/json');
		if ($update == 1) {
			$this->session->set_userdata($potongan);
			echo json_encode($potongan);
		} 
		else {
			$this->session->set_userdata($potongan);
			echo json_encode($potongan);
		}
		exit();
	}

	public function save()
	{
		$id = $this->session->userdata('Potongan_update');
		
		if ($this->session->userdata('Potongan_update')!='0') {
			$this->session->unset_userdata('Potongan_update');
			$this->session->unset_userdata('KAR_Kd_Rek_1');
			$this->session->unset_userdata('KAR_Kd_Rek_2');
			$this->session->unset_userdata('KAR_Kd_Rek_3');
			$this->session->unset_userdata('KAR_Kd_Rek_4');
			$this->session->unset_userdata('KAR_Kd_Rek_5');
			
			$this->updateData($id);
		}

		// echo "id ".$id;die();
		if (!$this->potongan_spm_model->save($_POST)) {
			@redirect('parameter/potongan-spm/destroy/1');
		}
		else {
			@redirect('parameter/potongan-spm/destroy/0');
		}
	}

	public function destroy($error)
	{	
		$this->session->unset_userdata('KAR_Kd_Rek_1');
		$this->session->unset_userdata('KAR_Kd_Rek_2');
		$this->session->unset_userdata('KAR_Kd_Rek_3');
		$this->session->unset_userdata('KAR_Kd_Rek_4');
		$this->session->unset_userdata('KAR_Kd_Rek_5');
		
		if ($error == '1') {
			$this->session->set_flashdata('errors', NOTIF_UNIQUE_INPUT);
		}
		else {
			$this->session->set_flashdata('success', NOTIF_SUCCESS_INPUT);
		}

		@ redirect('parameter/potongan-spm');
	}

	public function updateData($id){
        $result = $this->potongan_spm_model->updateData($id);

        if ($result == '1') {
        	$this->session->set_flashdata('success', NOTIF_UPDATE_SUCCESS);
        }
        else {
        	$this->session->set_flashdata('errors', NOTIF_UPDATE_FAILED);
        }
        @redirect('parameter/potongan-spm');
    }

	/*public function validationPost($data)
	{
		foreach ($data as $key => $value) {
			if ($data[$key]=="") {
				$this->session->set_flashdata('errors', 'Field Tidak Boleh Kosong');
				@ redirect('parameter/potongan_spm');
			}
		}
	}*/
	
	public function export()
	{
		$browse 	= $this->potongan_spm_model->allData();
		$filename 	= "export_potongan_spm.csv";
		$delimiter 	= ",";
		$header 	= "Kd Rek, Uraian potongan spm";
		$detail 	= array();
        foreach ($browse as $k => $row) {
        	$detail[$k]['Kd_Rek'] = $row->Kd_Rek_1.".".$row->Kd_Rek_2.".".$row->Kd_Rek_3.".0".$row->Kd_Rek_4.".0".$row->Kd_Rek_5;
			$detail[$k]['Nm_Rek'] = $this->potongan_spm_model->getDetailRek5($row->Kd_Rek_1,$row->Kd_Rek_2,$row->Kd_Rek_3,$row->Kd_Rek_4,$row->Kd_Rek_5)->Nm_Rek_5;
		}
		
        // open the "output" stream
        $f = fopen('php://output', 'w');
	    fwrite($f, $header."\r\n");
	    foreach ($detail as $line) {
	    	// fwrite($f, $line."\r\n");
	        fputcsv($f, $line, $delimiter);
	    }
		header('Content-Type: application/csv');
	    header('Content-Disposition: attachment; filename="'.$filename.'";');
	}

	public function hapus()
	{
		$error = $this->potongan_spm_model->delete($_POST);

		if ($error == '1') {
			$this->session->set_flashdata('errors', NOTIF_UNIQUE_INPUT);
		}
		else {
			$this->session->set_flashdata('success', NOTIF_SUCCESS_INPUT);
		}
	}
}
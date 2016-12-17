<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Class Korolari
* @author Budi Pratama <irezpratama90@gmail.com>
*
*
*/
// error_reporting(E_ALL);
class standart_harga extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('Datatables');
		$this->load->model('parameter/standart_harga_model');
	}
	
	public function getDetailRek5($Kd_Rek_1,$Kd_Rek_2,$Kd_Rek_3,$Kd_Rek_4,$Kd_Rek_5){
		$this->standart_harga_model->getDetailRek5($Kd_Rek_1,$Kd_Rek_2,$Kd_Rek_3,$Kd_Rek_4,$Kd_Rek_5);
	}

	public function index()
	{
		$admin_log 	= $this->auth->is_login_admin();
		{
			if ($_POST) 
			{
				$data = $_POST;
				if ($data['flag']=='new') {
					array_shift($data);// hapus param flag
					if ($this->standart_harga_model->save($data)) {
						echo json_encode(['status'=>1]);
					}
					else{
						echo json_encode(['status'=>0]);
					}
					exit;
				}

				if ($data['flag']=='update') {
					// print_r($data);
					$id = $data['id'];
					array_shift($data);// hapus param flag
					array_shift($data);// hapus param id
					

					if ($this->standart_harga_model->updateData($id,$data)) {
						echo json_encode(['status'=>1]);
					}
					else{
						echo json_encode(['status'=>0]);
					}
					exit;
				}
				
			}

			$enable_readonly = true;

			$databTable1 		= $this->standart_harga_model->dataTableKode1();
			$databTable2 		= $this->standart_harga_model->dataTableKode2();
			$databTable3 		= $this->standart_harga_model->dataTableKode3();
			
			$container['sidebar']['view']						= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] 	= 60;
			$container['content']['view']						= 'parameter/standart_harga/index';
			$container['content']['dataset']['data']			= $row;
			$container['content']['dataset']['id']				= $row->id;
			$container['content']['dataset']['table1']			= $databTable1;
			$container['content']['dataset']['table2']			= $databTable2;
			$container['content']['dataset']['table3']			= $databTable3;
			$container['content']['dataset']['browse']			= $rowAll;
			$container['content']['dataset']['enable_readonly']	= $enable_readonly;
			$header['admin_log']								= $admin_log;

			/*$rowAll 	= $this->standart_harga_model->allData();
			$detailKAR 	= $this->standart_harga_model->getDetailRek5($row->Kd_Rek_1,$row->Kd_Rek_2,$row->Kd_Rek_3,$row->Kd_Rek_4,$row->Kd_Rek_5);
			$detailKRD 	= $this->standart_harga_model->getDetailRek5($row->D_Rek_1,$row->D_Rek_2,$row->D_Rek_3,$row->D_Rek_4,$row->D_Rek_5);
			$detailKRK 	= $this->standart_harga_model->getDetailRek5($row->K_Rek_1,$row->K_Rek_2,$row->K_Rek_3,$row->K_Rek_4,$row->K_Rek_5);
			// print_r($detailKAR);die();
			$container['sidebar']['view']						= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] 	= 60;
			$container['content']['view']						= 'parameter/standart_harga/index';
			$container['content']['dataset']['data']			= $row;
			$container['content']['dataset']['id']				= $row->id;
			$container['content']['dataset']['KAR']				= $detailKAR;
			$container['content']['dataset']['KRD']				= $detailKRD;
			$container['content']['dataset']['KRK']				= $detailKAR;
			$container['content']['dataset']['browse']			= $rowAll;
			$container['content']['dataset']['enable_readonly']	= $enable_readonly;
			$header['admin_log']								= $admin_log;*/
			
			$this->load->view('admin/head');
			$this->load->view('admin/header', $header);
			$this->load->view('admin/container', $container);
			$this->load->view('admin/footer');
			$this->load->view('admin/tables');
		}
	}

	public function get_Data_Table_Json(){
		$CI 					= & get_instance();
		$CI->load->database();
		$this->load->library('SSP');


		$table = TBL_MS_STANDART_HARGA_1;

		// Table's primary key
		$primaryKey = 'id';

		// Array of database columns which should be read and sent back to DataTables.
		// The `db` parameter represents the column name in the database, while the `dt`
		// parameter represents the DataTables column identifier. In this case simple
		// indexes
		$columns = array(
			array( 'db' => 'id', 		'dt' => 0 ),
			array( 'db' => 'Kd_1',  'dt' => 1 ),
			array( 'db' => 'Uraian',   	'dt' => 2 ),
		);

		// SQL server connection information
		$sql_details = array(
			'user' => $CI->db->username,
			'pass' => $CI->db->password,
			'db'   => $CI->db->database,
			'host' => $CI->db->hostname
		);


		/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
		* If you just want to use the basic configuration for DataTables with PHP
		* server-side, there is no need to edit below this line.
		*/

		echo json_encode(
			SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
		);
		exit;
		// $databTable1 			= $this->standart_harga_model->dataTableKode1();
		// $container['content']	= $databTable1;
		// $this->load->view('admin/ajax', $container);
	}

	public function tambah()
	{
		$admin_log 	= $this->auth->is_login_admin();
		{
			$enable_readonly = true;

			// session korolari atas rekening
			if ($this->session->userdata('KAR_Kd_Rek_5')!='') 
			{
				$detail_data_rekening = $this->standart_harga_model->getDetailRek5($this->session->userdata('KAR_Kd_Rek_1'),$this->session->userdata('KAR_Kd_Rek_2'),$this->session->userdata('KAR_Kd_Rek_3'),$this->session->userdata('KAR_Kd_Rek_4'),$this->session->userdata('KAR_Kd_Rek_5'));
				$container['content']['dataset']['rekening'] = $detail_data_rekening;
				$enable_readonly = false;
			}
			
			// session korolari rekening debit
			if ($this->session->userdata('KRD_Kd_Rek_5_debit')!='') 
			{
				$detail_data_debit = $this->standart_harga_model->getDetailRek5($this->session->userdata('KRD_Kd_Rek_1_debit'),$this->session->userdata('KRD_Kd_Rek_2_debit'),$this->session->userdata('KRD_Kd_Rek_3_debit'),$this->session->userdata('KRD_Kd_Rek_4_debit'),$this->session->userdata('KRD_Kd_Rek_5_debit'));
				// print_r($detail_data_debit);
				$container['content']['dataset']['debit'] = $detail_data_debit;
				$enable_readonly = false;
			}
			
			// session korolari rekening kredit
			if ($this->session->userdata('KRK_Kd_Rek_5_kredit')!='') 
			{
				$detail_data_kredit = $this->standart_harga_model->getDetailRek5($this->session->userdata('KRK_Kd_Rek_1_kredit'),$this->session->userdata('KRK_Kd_Rek_2_kredit'),$this->session->userdata('KRK_Kd_Rek_3_kredit'),$this->session->userdata('KRK_Kd_Rek_4_kredit'),$this->session->userdata('KRK_Kd_Rek_5_kredit'));
				// print_r($detail_data_kredit);
				$container['content']['dataset']['kredit'] = $detail_data_kredit;
				$enable_readonly = false;
			}
			$c = $this->standart_harga_model->showData();

			$container['sidebar']['view']						= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] 	= 60;
			$container['content']['view']						= 'parameter/standart_harga/tambah';
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
				@ redirect('parameter/standart_harga');
			}
		}
	}*/

	public function update($id)
	{
		$admin_log 	= $this->auth->is_login_admin();
		{
			$enable_readonly = true;

			$row 		= $this->standart_harga_model->update($id);
			$rowAll 	= $this->standart_harga_model->allData();
			$detailKAR 	= $this->standart_harga_model->getDetailRek5($row->Kd_Rek_1,$row->Kd_Rek_2,$row->Kd_Rek_3,$row->Kd_Rek_4,$row->Kd_Rek_5);
			$detailKRD 	= $this->standart_harga_model->getDetailRek5($row->D_Rek_1,$row->D_Rek_2,$row->D_Rek_3,$row->D_Rek_4,$row->D_Rek_5);
			$detailKRK 	= $this->standart_harga_model->getDetailRek5($row->K_Rek_1,$row->K_Rek_2,$row->K_Rek_3,$row->K_Rek_4,$row->K_Rek_5);
			// print_r($detailKAR);die();
			$container['sidebar']['view']						= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] 	= 60;
			$container['content']['view']						= 'parameter/standart_harga/update';
			$container['content']['dataset']['data']			= $row;
			$container['content']['dataset']['id']				= $row->id;
			$container['content']['dataset']['KAR']				= $detailKAR;
			$container['content']['dataset']['KRD']				= $detailKRD;
			$container['content']['dataset']['KRK']				= $detailKAR;
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

		$row = $this->standart_harga_model->getDetailRek5($_POST[$array[0]],$_POST[$array[1]],$_POST[$array[2]],$_POST[$array[3]],$_POST[$array[4]]);
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
			$this->updateData($id);
		}

		// echo "new id ".$id;die();
		if (!$this->standart_harga_model->save($_POST))
			@redirect('parameter/standart_harga/destroy/1');
		else
			@redirect('parameter/standart_harga/destroy/0');
	}

	public function destroy($error)
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

		if ($error == '1')
			$this->session->set_flashdata('errors', NOTIF_UNIQUE_INPUT);
		else
			$this->session->set_flashdata('success', NOTIF_SUCCESS_INPUT);

		@ redirect('parameter/standart_harga');
	}

	public function updateData($id){
        $result = $this->standart_harga_model->updateData($id);
        
        if ($result == '1')
            $this->session->set_flashdata('success', NOTIF_UPDATE_SUCCESS);
        else
            $this->session->set_flashdata('errors', NOTIF_UPDATE_FAILED);

        @redirect('parameter/standart_harga');
    }

	public function hapus()
	{
		$error = $this->standart_harga_model->delete($_POST);
		
		if ($error != '1')
			$this->session->set_flashdata('errors', NOTIF_FAILED_DELETE);
		else
			$this->session->set_flashdata('success', NOTIF_SUCCESS_DELETE);
		
	}

	

}
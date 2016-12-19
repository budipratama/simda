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
			
			$container['sidebar']['view']						= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] 	= 60;
			$container['content']['view']						= 'parameter/standart_harga/index';
			// $container['content']['dataset']['data']			= $row;
			// $container['content']['dataset']['id']				= $row->id;
			$container['content']['dataset']['table1']			= $databTable1;
			// $container['content']['dataset']['browse']			= $rowAll;
			$container['content']['dataset']['enable_readonly']	= $enable_readonly;
			$header['admin_log']								= $admin_log;
			
			$this->load->view('admin/head');
			$this->load->view('admin/header', $header);
			$this->load->view('admin/container', $container);
			$this->load->view('admin/footer');
			$this->load->view('admin/tables');
		}
	}

	public function get_max_id(){
		if ($_POST['kd'] == 1) {
			$data = $this->standart_harga_model->getMaxId($_POST['field'],$_POST['table'],$where);
		}
		if ($_POST['kd'] == 2) {
			$where = "Kd_1 = {$_POST['Kd_1']}" ;
			$data = $this->standart_harga_model->getMaxId($_POST['field'],$_POST['table'],$where);
		}

		if ($_POST['kd'] == 3) {
			$where = "Kd_1 = {$_POST['Kd_1']} AND Kd_2 = {$_POST['Kd_2']}" ;
			$data = $this->standart_harga_model->getMaxId($_POST['field'],$_POST['table'],$where);
		}

		if ($_POST['kd'] == 4) {
			$data = $this->standart_harga_model->getMaxId($_POST['field'],$_POST['table']);
		}
		
		echo json_encode(['id' =>$data->id]);
	}

	public function standart_satuan(){
		if ($_POST) {
			// print_r($_POST);
			if ($_POST['flag']=='new') {
				$data = $_POST;
				array_shift($data);// hapus param flag
				if($this->standart_harga_model->add_satuan($data)){
					echo json_encode(['status'=>1,'id'=>$this->db->insert_id()]);
				}
				else
					echo json_encode(['status'=>0]);
			}
			if ($_POST['flag']=='update') {
				$data = $_POST;
				$id = $_POST['id'];
				array_shift($data);// hapus param flag
				array_shift($data);// hapus param id

				if ($this->standart_harga_model->update_satuan($id,$data)) {
					echo json_encode(['status'=>1]);
				}
				else{
					echo json_encode(['status'=>0]);
				}
				exit;
			}
		}
	}

	public function kd_2($id,$kd){
		// echo $id;
		$admin_log 	= $this->auth->is_login_admin();
		{
			if ($_POST) 
			{

				$_POST['Kd_1'] = $id;
				$data = $_POST;
				
				if ($data['flag']=='new') {
					array_shift($data);// hapus param flag
					
					if ($this->standart_harga_model->save_tbl_2($data)) {
						echo json_encode(['status'=>1,'id'=>$this->db->insert_id()]);
					}
					else{
						echo json_encode(['status'=>0]);
					}
					exit;
				}

				if ($data['flag']=='update') {
					// print_r($data);
					$Kd_2 = $data['id'];
					array_shift($data);// hapus param flag
					array_shift($data);// hapus param id
					// print_r($data);

					if ($this->standart_harga_model->updateData_table_2($id,$Kd_2,$data)) {
						echo json_encode(['status'=>1]);
					}
					else{
						echo json_encode(['status'=>0]);
					}
					exit;
				}
				
			}

			$enable_readonly = true;
			$this->standart_harga_model->Kd_1 = $id;
			$databTable1 		= $this->standart_harga_model->dataTableKode2();
			$where 				= "Kd_1 = $id"; 
			$detailData 		= $this->standart_harga_model->dataDetail(TBL_MS_STANDART_HARGA_1,$where);

			$container['sidebar']['view']						= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] 	= 60;
			$container['content']['view']						= 'parameter/standart_harga/kd_2';
			$container['content']['dataset']['table1']			= $databTable1;
			$container['content']['dataset']['uraian']			= $detailData;
			$container['content']['dataset']['Kd_1']			= $id;
			$container['content']['dataset']['enable_readonly']	= $enable_readonly;
			$header['admin_log']								= $admin_log;

			$this->load->view('admin/head');
			$this->load->view('admin/header', $header);
			$this->load->view('admin/container', $container);
			$this->load->view('admin/footer');
			$this->load->view('admin/tables');
		}
	}

	public function kd_3($Kd_1,$Kd_2){

		$admin_log 	= $this->auth->is_login_admin();
		{
			if ($_POST) 
			{

				// $_POST['Kd_1'] = $id;
				$data = $_POST;
				// print_r($_POST);
				if ($data['flag']=='new') {
					array_shift($data);// hapus param flag
					// die();
					if ($this->standart_harga_model->save_tbl_3($data)) {
						echo json_encode(['status'=>1,'id'=>$this->db->insert_id()]);
					}
					else{
						echo json_encode(['status'=>0]);
					}
					exit;
				}

				if ($data['flag']=='update') {
					// print_r($data);
					// die();
					$id = $data['id'];
					array_shift($data);// hapus param flag
					array_shift($data);// hapus param id
					// print_r($data);

					if ($this->standart_harga_model->updateData_table_3($id,$data)) {
						echo json_encode(['status'=>1]);
					}
					else{
						echo json_encode(['status'=>0]);
					}
					exit;
				}
				
			}

			$enable_readonly = true;
			$this->standart_harga_model->Kd_1 = $Kd_1;
			$this->standart_harga_model->Kd_2 = $Kd_2;
			$databTable1 		= $this->standart_harga_model->dataTableKode3();
			$databTable2 		= $this->standart_harga_model->dataTableSatuan();
			// print_r($databTable2);die();
			$databTableSatuan 	= $this->standart_harga_model->getData();
			$where 				= "Kd_1 = $Kd_1";
			$detailData 		= $this->standart_harga_model->dataDetail(TBL_MS_STANDART_HARGA_1,$where);
			$where 				= "Kd_1 = $Kd_1 AND Kd_2 = $Kd_2";
			$detailData2 		= $this->standart_harga_model->dataDetail(TBL_MS_STANDART_HARGA_2,$where);

			$container['sidebar']['view']							= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] 		= 60;
			$container['content']['view']							= 'parameter/standart_harga/kd_3';
			$container['content']['dataset']['table1']				= $databTable1;
			$container['content']['dataset']['table2']				= $databTable2;
			$container['content']['dataset']['uraian']				= $detailData;
			$container['content']['dataset']['uraian2']				= $detailData2;
			$container['content']['dataset']['Kd_1']				= $Kd_1;
			$container['content']['dataset']['Kd_2']				= $Kd_2;
			$container['content']['dataset']['databTableSatuan']	= $databTableSatuan;
			$container['content']['dataset']['enable_readonly']		= $enable_readonly;
			$header['admin_log']									= $admin_log;

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

	public function get_Data_Table_Json_kd_2($id){
		$CI 					= & get_instance();
		$CI->load->database();
		$this->load->library('SSP');


		$table = TBL_MS_STANDART_HARGA_2;

		// Table's primary key
		$primaryKey = 'id';

		// Array of database columns which should be read and sent back to DataTables.
		// The `db` parameter represents the column name in the database, while the `dt`
		// parameter represents the DataTables column identifier. In this case simple
		// indexes
		$columns = array(
			array( 'db' => 'id', 		'dt' => 0 ),
			array( 'db' => 'Kd_1',  	'dt' => 1 ),
			array( 'db' => 'Kd_2',  	'dt' => 2 ),
			array( 'db' => 'Uraian',   	'dt' => 3 ),
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

		$where = "Kd_1 = $id";

		echo json_encode(
			SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns,$where)
		);
		exit;
		// $databTable1 			= $this->standart_harga_model->dataTableKode1();
		// $container['content']	= $databTable1;
		// $this->load->view('admin/ajax', $container);
	}
	public function get_data_table_json_satuan()
	{
		$CI 					= & get_instance();
		$CI->load->database();
		$this->load->library('SSP');


		$table = TBL_MS_STANDART_SATUAN;

		// Table's primary key
		$primaryKey = 'id';

		// Array of database columns which should be read and sent back to DataTables.
		// The `db` parameter represents the column name in the database, while the `dt`
		// parameter represents the DataTables column identifier. In this case simple
		// indexes
		$columns = array(
			array( 'db' => 'id', 		'dt' => 0 ),
			array( 'db' => 'ID_Satuan',  'dt' => 1 ),
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
			SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns)
		);
		exit;
	}


	public function get_Data_Table_Json_kd_3($Kd_1,$Kd_2){
		$CI 					= & get_instance();
		$CI->load->database();
		$this->load->library('SSP');


		$table = TBL_MS_STANDART_HARGA_3;

		// Table's primary key
		$primaryKey = 'id';

		// Array of database columns which should be read and sent back to DataTables.
		// The `db` parameter represents the column name in the database, while the `dt`
		// parameter represents the DataTables column identifier. In this case simple
		// indexes
		$columns = array(
			array( 'db' => 'id', 		'dt' => 0 ),
			array( 'db' => 'Kd_1',  	'dt' => 1 ),
			array( 'db' => 'Kd_2',  	'dt' => 2 ),
			array( 'db' => 'Kd_3',  	'dt' => 3 ),
			array( 'db' => 'Uraian',   	'dt' => 4 ),
			array( 'db' => 'Harga',   	'dt' => 5 ),
			array( 'db' => 'Satuan', 'dt' => 6 ),
			array( 'db' => 'Keterangan', 'dt' => 7 ),
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

		$where = "Kd_1 = $Kd_1 AND Kd_2 = $Kd_2";

		echo json_encode(
			SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns,$where)
		);
		exit;
		// $databTable1 			= $this->standart_harga_model->dataTableKode1();
		// $container['content']	= $databTable1;
		// $this->load->view('admin/ajax', $container);
	}

	
	public function hapus()
	{
		$error = $this->standart_harga_model->delete($_POST);
		
		if ($error != '1')
			$this->session->set_flashdata('errors', NOTIF_FAILED_DELETE);
		else
			$this->session->set_flashdata('success', NOTIF_SUCCESS_DELETE);
		
	}

	public function hapus2()
	{
		$error = $this->standart_harga_model->delete2($_POST);
		
		if ($error != '1')
			$this->session->set_flashdata('errors', NOTIF_FAILED_DELETE);
		else
			$this->session->set_flashdata('success', NOTIF_SUCCESS_DELETE);
		
	}

	public function hapus3()
	{
		$error = $this->standart_harga_model->delete3($_POST);
		// echo $this->db->last_query();
		if ($error != '1')
			$this->session->set_flashdata('errors', NOTIF_FAILED_DELETE);
		else
			$this->session->set_flashdata('success', NOTIF_SUCCESS_DELETE);
		
	}

	public function hapus4()
	{
		$error = $this->standart_harga_model->delete4($_POST);
		// echo $this->db->last_query();
		if ($error != '1')
			$this->session->set_flashdata('errors', NOTIF_FAILED_DELETE);
		else
			$this->session->set_flashdata('success', NOTIF_SUCCESS_DELETE);
		
	}

	public function select_option()
	{
		$c = $this->standart_harga_model->select_optoin();
		$data = "<option value='0'>Pilih Satuan</option>";
		foreach ($c as $key => $value) {
			$data .= "<option value='{$value->ID_Satuan}'>{$value->Uraian}</option>";
		}
		echo json_encode(['option'=>$data]);
	}

	

}
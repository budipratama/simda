<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Unit_organisasi extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Tipe_model');
		$this->load->model('Urusan_model');
		$this->load->model('Skpd_model');
		$this->load->model('Sub_model');
		$this->load->library('Datatables');
	}
	
	public function index() {
		// echo "ganteng";
		$admin_log 	= $this->auth->is_login_admin();
		{
			$container['sidebar']['view']					= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] = 60;
			$container['content']['view']					= 'parameter/unit_organisasi/view';
			
			$container['tipe']	= $this->Tipe_model->get_all_lists();
			
			$header['admin_log']						= $admin_log;
			$this->load->view('admin/head');
			$this->load->view('admin/header', $header);
			$this->load->view('admin/container', $container);
			$this->load->view('admin/tables');
		}
	}
	
	public function bidang($id) {
		$admin_log 	= $this->auth->is_login_admin();
		{
			$container['sidebar']['view']					= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] = 60;
			$container['content']['view']					= 'parameter/unit_organisasi/bidang';
			
			$container['tipe']			= $this->Tipe_model->get_list($id);			
			$container['completed']		= $this->Urusan_model->get_list_tasks($id,true);
			$container['uncompleted']	= $this->Urusan_model->get_list_tasks($id,false);

			$header['admin_log']							= $admin_log;
			$this->load->view('admin/head');
			$this->load->view('admin/header', $header);
			$this->load->view('admin/container', $container);
			$this->load->view('admin/tables');
		}
    }
	
	public function unit($id) {
		$admin_log 	= $this->auth->is_login_admin();
		{
			$container['sidebar']['view']					= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] = 60;
			$container['content']['view']					= 'parameter/unit_organisasi/unit';					

			$container['urusan']		= $this->Urusan_model->get_list($id);
			$container['completed']		= $this->Skpd_model->get_list_tasks($id,true);
			$container['uncompleted']	= $this->Skpd_model->get_list_tasks($id,false);

			$header['admin_log']							= $admin_log;
			$this->load->view('admin/head');
			$this->load->view('admin/header', $header);
			$this->load->view('admin/container', $container);
			$this->load->view('admin/tables');
		}
	}
	
	public function sub($id) {
		$admin_log 	= $this->auth->is_login_admin();
		{
			$container['sidebar']['view']					= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] = 60;
			$container['content']['view']					= 'parameter/unit_organisasi/sub';					

			$container['unit']		= $this->Skpd_model->get_task($id);
			$container['list']		= $this->Sub_model->get_list($id);
			$container['completed']	= $this->Sub_model->get_organisasi($id,true);

			$header['admin_log']							= $admin_log;
			$this->load->view('admin/head');
			$this->load->view('admin/header', $header);
			$this->load->view('admin/container', $container);
			$this->load->view('admin/tables');
		}
	}
	
	public function add($id) {
		$admin_log 	= $this->auth->is_login_admin();
		$this->form_validation->set_rules('aaa_kode','Tipe','trim|required|xss_clean');
        $this->form_validation->set_rules('bbb_kode','Urusan','trim|xss_clean');
		$this->form_validation->set_rules('ccc_kode','Skpd','trim|xss_clean');
        $this->form_validation->set_rules('ddd_kode','No','trim|xss_clean');
        $this->form_validation->set_rules('eee_kode','Nomor','trim|xss_clean');
        $this->form_validation->set_rules('sss_kode','Sub_nama','trim|xss_clean');
        
			$container['sidebar']['view']					= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] = 60;
			$container['content']['view']					= 'parameter/unit_organisasi/add';			
		{
			if($this->form_validation->run() == FALSE){
				
				$container['unit'] 		= $this->Skpd_model->get_task($id);
				$container['sub']		= $this->Sub_model->completed($id,true);
				$container['kode'] 		= $this->Sub_model->get_task_data($id);

				$header['admin_log']			= $admin_log;
				$this->load->view('admin/head');
				$this->load->view('admin/header', $header);
				$this->load->view('admin/container', $container);
				$this->load->view('admin/footer');			
			} else {
				$container = array(             
					'tipe'   	 	=> $this->input->post('aaa_kode'),
					'urusan'   		=> $this->input->post('bbb_kode'),
					'skpd'   		=> $this->input->post('ccc_kode'),
					'no'    	 	=> $this->input->post('ddd_kode'),
					'nomor'    	 	=> $this->input->post('eee_kode'),
					'sub_nama'  	=> $this->input->post('sss_kode'),
					'tipe_sort'  	=> 1
				);
				$id_kode = $this->input->post('ccc_kode');
				if($this->Sub_model->insert($container)){
				   $this->session->set_flashdata('success','<div class="alert fresh-color alert-info fade in"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button><strong>Success!</strong> Data "SUB UNIT" telah berhasil ditambahkan</div>');
				   redirect('parameter/unit_organisasi/sub/'.$id_kode);
				}
			}
		}
    }
	
	public function edit($id) {
		$admin_log 	= $this->auth->is_login_admin();
		{
			$container['sidebar']['view']					= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] = 60;
			$container['content']['view']					= 'parameter/unit_organisasi/edit';
			
			$this->form_validation->set_rules('sss_kode','Sub_nama','trim|xss_clean');       
			if($this->form_validation->run() == FALSE){	
			
				$container['this_task']	= $this->Sub_model->get_task_data($id);
				
				$header['admin_log']			= $admin_log;
				$this->load->view('admin/head');
				$this->load->view('admin/header', $header);
				$this->load->view('admin/container', $container);
				$this->load->view('admin/footer');			
			} else {
				$update['sub_nama']	= $this->input->post('sss_kode');
				$id_kode = $this->input->post('ccc_kode');
				$query = $this->Sub_model->update($update, $this->input->post('kode'));
				$this->session->set_flashdata('success','<div class="alert fresh-color alert-warning fade in"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button><strong>Success!</strong> Data "SUB UNIT" telah berhasil diubah</div>');		
				redirect('parameter/unit_organisasi/sub/'.$id_kode);
			}
		}
    }
	
	public function delete() {
		$admin_log 	= $this->auth->is_login_admin(); {
			$kode 		= $this->uri->segment(4);
			$sub 		= $this->Sub_model->getOnlys('kode, skpd', array('kode'=>$kode));
			$this->Rka_model->delete($this->uri->segment(4));
			$this->session->set_flashdata('success','<div class="alert fresh-color alert-danger fade in"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button><strong>Success!</strong> Data "SUB UNIT" telah berhasil dihapus</div>');
			redirect('parameter/unit_organisasi/sub/'.$sub->skpd, 'refresh');
		}
	}
	
}
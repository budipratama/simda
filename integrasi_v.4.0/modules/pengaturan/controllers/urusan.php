<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Urusan extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Urusan_model');
		$this->load->library('Datatables');
	}
	
	function datatable()
    {
        $this->datatables->select('nomor, kode, urusan, jenis')
		->add_column('jenis', $this->get_jenis('$1'),'jenis')
		->add_column('Actions', get_buttons('$1'),'kode')
		->search_column('urusan, jenis')
        ->from('(SELECT @ROW_NUMBER  := @ROW_NUMBER + 1 as nomor, urusan.kode, urusan.urusan, urusan.jenis FROM (SELECT @ROW_NUMBER := 0) ROWNUMBER, urusan ORDER BY urusan.urusan ASC) urusan');
        
        echo $this->datatables->generate();
    }
	
	private function get_jenis($jenis){
		return ucwords($jenis);
	}
		
	public function index()
	{	
		$admin_log = $this->auth->is_login_admin();
		$container['sidebar']['view']					= 'admin/sidebar';
		$container['sidebar']['dataset']['aktive_menu'] = 20;
		$container['content']['view']					= 'pengaturan/urusan/view';
		$container['content']['dataset']				= '';
		$header['admin_log']							= $admin_log;
				
		$container['content']['dataset']['grid']		= $this->Urusan_model->grid_all('*', 'nomor', 'ASC');
		
		$this->load->view('admin/head');
		$this->load->view('admin/header', $header);
		$this->load->view('admin/container', $container);
		$this->load->view('admin/footer');
	}
	
	public function add()
	{
		$admin_log = $this->auth->is_login_admin();
		$container['sidebar']['view']					= 'admin/sidebar';
		$container['sidebar']['dataset']['aktive_menu'] = 20;
		$container['content']['view']					= 'pengaturan/urusan/add';
		$container['content']['dataset']				= '';
		
		$header['admin_log']							= $admin_log;
		$this->load->view('admin/head');
		$this->load->view('admin/header', $header);
		$this->load->view('admin/container', $container);
		$this->load->view('admin/footer');
	}
	
	public function insert()
	{
		$admin_log = $this->auth->is_login_admin();

		$this->form_validation->set_rules('nomor', 'Nomor', 'trim|required|xss_clean');
		$this->form_validation->set_rules('urusan', 'Urusan', 'trim|required|xss_clean');
		
		if($this->form_validation->run() == FALSE)
		{
			$container['sidebar']['view']					= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] = 20;
			$container['content']['view']					= 'pengaturan/urusan/add';
			$container['content']['dataset']				= '';
			$header['admin_log']							= $admin_log;
			$this->load->view('admin/head');
			$this->load->view('admin/header', $header);
			$this->load->view('admin/container', $container);
			$this->load->view('admin/footer');
		} else {
			
			$insert['nomor']		= $this->input->post('nomor');
			$insert['urusan']		= $this->input->post('urusan');
			$insert['jenis']		= $this->input->post('jenis');
						
			$query = $this->Urusan_model->insert($insert);
			
			$this->session->set_flashdata('success','<div class="alert alert-success fade in"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button><strong>Success!</strong> Data urusan baru telah berhasil ditambahkan.</div>');
			
			redirect('pengaturan/urusan', 'refresh');
		}

	}
	
	public function edit()
	{
		$admin_log = $this->auth->is_login_admin();
		$container['sidebar']['view']					= 'admin/sidebar';
		$container['sidebar']['dataset']['aktive_menu'] = 20;
		$container['content']['view']					= 'pengaturan/urusan/edit';
		$container['content']['dataset']				= '';
		
		$urusan = $this->Urusan_model->get('urusan.*', array('urusan.kode'=>$this->uri->segment(4)));
		
		$container['content']['dataset']['kode']		= $urusan->kode;
		$container['content']['dataset']['nomor']		= $urusan->nomor;
		$container['content']['dataset']['urusan']		= $urusan->urusan;
		$container['content']['dataset']['jenis']		= $urusan->jenis;
		
		$header['admin_log']							= $admin_log;
		$this->load->view('admin/head');
		$this->load->view('admin/header', $header);
		$this->load->view('admin/container', $container);
		$this->load->view('admin/footer');
	}
	
	public function update()
	{
		$admin_log = $this->auth->is_login_admin();

		$this->form_validation->set_rules('nomor', 'Nomor', 'trim|required|xss_clean');
		$this->form_validation->set_rules('urusan', 'Urusan', 'trim|required|xss_clean');
		
		if($this->form_validation->run() == FALSE)
		{
			$container['sidebar']['view']					= 'admin/sidebar';
			$container['sidebar']['dataset']['aktive_menu'] = 20;
			$container['content']['view']					= 'pengaturan/urusan/edit';
			$container['content']['dataset']				= '';
			
			$urusan = $this->Urusan_model->get('urusan.*', array('urusan.kode'=>$this->uri->segment(4)));
			
			$container['content']['dataset']['kode']		= $urusan->kode;
			$container['content']['dataset']['nomor']		= $urusan->nomor;
			$container['content']['dataset']['urusan']		= $urusan->urusan;
			$container['content']['dataset']['jenis']		= $urusan->jenis;
			
			$header['admin_log']							= $admin_log;
			$this->load->view('admin/head');
			$this->load->view('admin/header', $header);
			$this->load->view('admin/container', $container);
			$this->load->view('admin/footer');
		} else {
			
			$update['nomor']		= $this->input->post('nomor');
			$update['urusan']		= $this->input->post('urusan');
			$update['jenis']		= $this->input->post('jenis');
						
			$query = $this->Urusan_model->update($update, $this->input->post('kode'));

			$this->session->set_flashdata('success','<div class="alert alert-success fade in"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button><strong>Success!</strong> Data urusan telah berhasil diubah.</div>');
			
			redirect('pengaturan/urusan', 'refresh');
		}
	}
	
	public function detail()
	{
		$admin_log = $this->auth->is_login_admin();
		$container['sidebar']['view']					= 'admin/sidebar';
		$container['sidebar']['dataset']['aktive_menu'] = 20;
		$container['content']['view']					= 'pengaturan/urusan/detail';
		$container['content']['dataset']				= '';
		
		$urusan = $this->Urusan_model->get('urusan.*', array('urusan.kode'=>$this->uri->segment(4)));
		
		$container['content']['dataset']['kode']		= $urusan->kode;
		$container['content']['dataset']['nomor']		= $urusan->nomor;
		$container['content']['dataset']['urusan']		= $urusan->urusan;
		$container['content']['dataset']['jenis']		= $urusan->jenis;
		
		$header['admin_log']							= $admin_log;
		$this->load->view('admin/head');
		$this->load->view('admin/header', $header);
		$this->load->view('admin/container', $container);
		$this->load->view('admin/footer');
	}
	
	
	public function delete()
	{
		if ($this->uri->segment(4)){
			$this->Urusan_model->delete($this->uri->segment(4));
			$this->session->set_flashdata('success','<div class="alert alert-success fade in"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button><strong>Success!</strong> Data urusan telah berhasil dihapus.</div>');
		} 

		redirect('pengaturan/urusan', 'refresh');
	}
}

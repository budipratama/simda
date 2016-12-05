<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Class Rekening_kredit
*
* @author Budi Pratama <irezpratama90@gmail.com>
*/

class Rekening_kredit extends CI_Controller {
        public $budi=1;
        public $akun;
        public function __construct() {
                parent::__construct();
                $this->load->model('Atas_rekening');
                $this->load->library('session');
                $this->load->helper('url');
                // $this->load->library('Datatables');
        }
        
        public function index() {
                $admin_log      = $this->auth->is_login_admin();
                {
                        $container['sidebar']['view']                   = 'admin/sidebar';
                        $container['sidebar']['dataset']['aktive_menu'] = 60;
                        $container['content']['view']                   = 'parameter/rekening_kredit/index';
                        $container['data']                              = $this->Atas_rekening->get_kredit();
                        $header['admin_log']                            = $admin_log;
                        
                        $this->load->view('admin/head');
                        $this->load->view('admin/header', $header);
                        $this->load->view('admin/container', $container);
                        $this->load->view('admin/tables');
                }
        }

        public function kelompok($id){
                $admin_log      = $this->auth->is_login_admin();
                {
                        $container['sidebar']['view']                   = 'admin/sidebar';
                        $container['sidebar']['dataset']['aktive_menu'] = 60;
                        $container['content']['view']                   = 'parameter/rekening_kredit/kelompok';
                        $this->Atas_rekening->kd_rek_1                  = $id;
                        $container['data']                              = $this->Atas_rekening->get_kelompok();                 
                        $header['admin_log']                            = $admin_log;

                        $korolari = array(
                                        'kd_rek_1_kredit'  => $id,
                        );

                        $this->session->set_userdata($korolari);

                        $this->load->view('admin/head');
                        $this->load->view('admin/header', $header);
                        $this->load->view('admin/container', $container);
                        $this->load->view('admin/tables');
                }
        }

        public function jenis($id){

                $admin_log      = $this->auth->is_login_admin();
                {
                        $container['sidebar']['view']                   = 'admin/sidebar';
                        $container['sidebar']['dataset']['aktive_menu'] = 60;
                        $container['content']['view']                   = 'parameter/rekening_debit/jenis';
                        $this->Atas_rekening->kd_rek_1                  = $this->session->userdata('kd_rek_1_kredit');
                        $this->Atas_rekening->kd_rek_2                  = $id;

                        $korolari = array(
                                        'kd_rek_2_kredit'  => $id,
                        );
                        
                        $this->session->set_userdata($korolari);

                        $container['data']   = $this->Atas_rekening->get_jenis();                    
                        $header['admin_log'] = $admin_log;
                        
                        $this->id_kelompok   = $id;                  

                        $this->load->view('admin/head');
                        $this->load->view('admin/header', $header);
                        $this->load->view('admin/container', $container);
                        $this->load->view('admin/tables');
                }
        }

        public function obyek($id){
                $admin_log      = $this->auth->is_login_admin();
                {
                        $container['sidebar']['view']                   = 'admin/sidebar';
                        $container['sidebar']['dataset']['aktive_menu'] = 60;
                        $container['content']['view']                   = 'parameter/rekening_kredit/obyek';
                        $korolari = array(
                                        'kd_rek_3_kredit'  => $id,
                        );

                        $this->session->set_userdata($korolari);
                        
                        $this->Atas_rekening->kd_rek_1  = $this->session->userdata('kd_rek_1_kredit');
                        $this->Atas_rekening->kd_rek_2  = $this->session->userdata('kd_rek_2_kredit');
                        $this->Atas_rekening->kd_rek_3  = $id;
                        $container['data']              = $this->Atas_rekening->get_obyek();                    
                        $header['admin_log']            = $admin_log;

                        $this->load->view('admin/head');
                        $this->load->view('admin/header', $header);
                        $this->load->view('admin/container', $container);
                        $this->load->view('admin/tables');
                }
        }

        public function rincian($id){
                $admin_log      = $this->auth->is_login_admin();
                {
                        $container['sidebar']['view']                   = 'admin/sidebar';
                        $container['sidebar']['dataset']['aktive_menu'] = 60;
                        $container['content']['view']                   = 'parameter/rekening_kredit/rincian';
                        $korolari = array(
                                        'kd_rek_4_kredit'  => $id,
                        );

                        $this->session->set_userdata($korolari);

                        $this->Atas_rekening->kd_rek_1  = $this->session->userdata('kd_rek_1_kredit');
                        $this->Atas_rekening->kd_rek_2  = $this->session->userdata('kd_rek_2_kredit');
                        $this->Atas_rekening->kd_rek_3  = $this->session->userdata('kd_rek_3_kredit');
                        $this->Atas_rekening->kd_rek_4  = $id;
                        $container['data']              = $this->Atas_rekening->get_rincian();                  
                        $header['admin_log']            = $admin_log;

                        $this->load->view('admin/head');
                        $this->load->view('admin/header', $header);
                        $this->load->view('admin/container', $container);
                        $this->load->view('admin/tables');
                }
        }

        public function save($id){
                $admin_log      = $this->auth->is_login_admin();
                {
                        $container['sidebar']['view']                   = 'admin/sidebar';
                        $container['sidebar']['dataset']['aktive_menu'] = 60;
                        $container['content']['view']                   = 'parameter/rekening_kredit/rincian';
                        $korolari = array(
                                        'kd_rek_5_kredit'  => $id,
                        );

                        $this->session->set_userdata($korolari);
                        redirect('parameter/korolari', 'refresh');
                }
        }
}
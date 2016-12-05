<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Class korolari_rekening_kredit
*
* @author Budi Pratama <irezpratama90@gmail.com>
*/

class Korolari_rekening_kredit extends CI_Controller {
        public $budi=1;
        public $akun;
        public function __construct() {
                parent::__construct();
                $this->load->model('parameter/Korolari_model');
                $this->load->library('session');
                $this->load->helper('url');
                // $this->load->library('Datatables');
        }
        
        public function index() {
                $admin_log      = $this->auth->is_login_admin();
                {
                        $container['sidebar']['view']                   = 'admin/sidebar';
                        $container['sidebar']['dataset']['aktive_menu'] = 60;
                        $container['content']['view']                   = 'parameter/korolari_rekening_kredit/index';
                        $container['content']['dataset']['title']       = "Rekening Kredit";
                        $container['content']['dataset']['title_header']= "rekening-kredit";
                        $container['data']                              = $this->Korolari_model->get_akun([3,7]);
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
                        $container['content']['view']                   = 'parameter/korolari_rekening_kredit/kelompok';
                        $container['content']['dataset']['title']       = "Rekening Kredit";
                        $container['content']['dataset']['title_header']= "rekening-kredit";
                        $this->Korolari_model->Kd_Rek_1                  = $id;
                        $container['data']                              = $this->Korolari_model->get_kelompok();                 
                        $header['admin_log']                            = $admin_log;

                        $korolari = array(
                                        'KRK_Kd_Rek_1_kredit'  => $id,
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
                        $container['content']['view']                   = 'parameter/korolari_rekening_kredit/jenis';
                        $container['content']['dataset']['title']       = "Rekening Kredit";
                        $container['content']['dataset']['title_header']= "rekening-kredit";
                        $this->Korolari_model->Kd_Rek_1                  = $this->session->userdata('KRK_Kd_Rek_1_kredit');
                        $this->Korolari_model->Kd_Rek_2                  = $id;

                        $korolari = array(
                                        'KRK_Kd_Rek_2_kredit'  => $id,
                        );
                        
                        $this->session->set_userdata($korolari);

                        $container['data']   = $this->Korolari_model->get_jenis();                    
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
                        $container['content']['view']                   = 'parameter/korolari_rekening_kredit/obyek';
                        $container['content']['dataset']['title']       = "Rekening Kredit";
                        $container['content']['dataset']['title_header']= "rekening-kredit";
                        $korolari = array(
                                        'KRK_Kd_Rek_3_kredit'  => $id,
                        );

                        $this->session->set_userdata($korolari);
                        
                        $this->Korolari_model->Kd_Rek_1  = $this->session->userdata('KRK_Kd_Rek_1_kredit');
                        $this->Korolari_model->Kd_Rek_2  = $this->session->userdata('KRK_Kd_Rek_2_kredit');
                        $this->Korolari_model->Kd_Rek_3  = $id;
                        $container['data']              = $this->Korolari_model->get_obyek();                    
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
                        $container['content']['view']                   = 'parameter/korolari_rekening_kredit/rincian';
                        $container['content']['dataset']['title']       = "Rekening Kredit";
                        $container['content']['dataset']['title_header']= "rekening-kredit";
                        $korolari = array(
                                        'KRK_Kd_Rek_4_kredit'  => $id,
                        );

                        $this->session->set_userdata($korolari);

                        $this->Korolari_model->Kd_Rek_1  = $this->session->userdata('KRK_Kd_Rek_1_kredit');
                        $this->Korolari_model->Kd_Rek_2  = $this->session->userdata('KRK_Kd_Rek_2_kredit');
                        $this->Korolari_model->Kd_Rek_3  = $this->session->userdata('KRK_Kd_Rek_3_kredit');
                        $this->Korolari_model->Kd_Rek_4  = $id;
                        $container['data']              = $this->Korolari_model->get_rincian();                  
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
                        $container['content']['view']                   = 'parameter/korolari_rekening_kredit/rincian';
                        $container['content']['dataset']['title']       = "Rekening Kredit";
                        $container['content']['dataset']['title_header']= "rekening-kredit";
                        $korolari = array(
                                        'KRK_Kd_Rek_5_kredit'  => $id,
                        );

                        $this->session->set_userdata($korolari);
                        redirect('parameter/korolari/tambah', 'refresh');
                }
        }
}
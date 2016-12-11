<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Class Korolari
* @author Budi Pratama <irezpratama90@gmail.com>
*
*
*/
// error_reporting(E_ALL);
class Mapping_rek_akrual extends CI_Controller {
        
        public function __construct()
        {
                parent::__construct();
                $this->load->library('Datatables');
                $this->load->model('parameter/Mapping_rek_akrual_model');
        }
        
        public function debug($debug)
        {
                echo "<pre>";
                print_r($debug);
                echo "</pre>";
        }

        public function index()
        {
                $admin_log      = $this->auth->is_login_admin();
                {
                        $enable_readonly = true;

                        $row            = $this->Mapping_rek_akrual_model->showData();
                        
                        $rowAll         = $this->Mapping_rek_akrual_model->allData();
                        
                        $detailRP13     = $this->Mapping_rek_akrual_model->getDetailRek5($row->Kd_Rek_1,$row->Kd_Rek_2,$row->Kd_Rek_3,$row->Kd_Rek_4,$row->Kd_Rek_5);
                        
                        $detailRP64     = $this->Mapping_rek_akrual_model->getDetailMsAkrual5($row->Kd_Akrual_1,$row->Kd_Akrual_2,$row->Kd_Akrual_3,$row->Kd_Akrual_4,$row->Kd_Akrual_5);
                        
                        $detailMapping1 = $this->Mapping_rek_akrual_model->getDetailMsAkrual5($row->Kd_AkrualD_1,$row->Kd_AkrualD_2,$row->Kd_AkrualD_3,$row->Kd_AkrualD_4,$row->Kd_AkrualD_5);
                        
                        $detailMapping2 = $this->Mapping_rek_akrual_model->getDetailMsAkrual5($row->Kd_AkrualK_1,$row->Kd_AkrualK_2,$row->Kd_AkrualK_3,$row->Kd_AkrualK_4,$row->Kd_AkrualK_5);
                        // $this->debug($detailMapping1);
                        // die();
                        // print_r($detailKAR);die();
                        $container['sidebar']['view']                           = 'admin/sidebar';
                        $container['sidebar']['dataset']['aktive_menu']         = 60;
                        $container['content']['view']                           = 'parameter/mapping_rek_akrual/index';
                        $container['content']['dataset']['data']                = $row;
                        $container['content']['dataset']['id']                  = $row->id;
                        $container['content']['dataset']['RP13']                = $detailRP13;
                        $container['content']['dataset']['RP64']                = $detailRP64;
                        $container['content']['dataset']['browse']              = $rowAll;
                        $container['content']['dataset']['detailMapping1']      = $detailMapping1;
                        $container['content']['dataset']['detailMapping2']      = $detailMapping2;
                        $container['content']['dataset']['enable_readonly']     = $enable_readonly;
                        $header['admin_log']                                    = $admin_log;
                        
                        $this->load->view('admin/head');
                        $this->load->view('admin/header', $header);
                        $this->load->view('admin/container', $container);
                        $this->load->view('admin/footer');
                        $this->load->view('admin/tables');
                }
        }

        public function tambah()
        {
                $admin_log      = $this->auth->is_login_admin();
                {
                        $enable_readonly = true;

                        // session korolari atas rekening
                        if ($this->session->userdata('P13_Kd_Rek_5')!='') 
                        {
                                $detailRP13 = $this->Mapping_rek_akrual_model->getDetailRek5($this->session->userdata('P13_Kd_Rek_1'),$this->session->userdata('P13_Kd_Rek_2'),$this->session->userdata('P13_Kd_Rek_3'),$this->session->userdata('P13_Kd_Rek_4'),$this->session->userdata('P13_Kd_Rek_5'));
                                $container['content']['dataset']['RP13'] = $detailRP13;
                                $enable_readonly = false;
                        }
                        
                        // session korolari rekening debit
                        if ($this->session->userdata('P64_Kd_Rek_5')!='') 
                        {
                                $detailRP64 = $this->Mapping_rek_akrual_model->getDetailMsAkrual5($this->session->userdata('P64_Kd_Rek_1'),$this->session->userdata('P64_Kd_Rek_2'),$this->session->userdata('P64_Kd_Rek_3'),$this->session->userdata('P64_Kd_Rek_4'),$this->session->userdata('P64_Kd_Rek_5'));
                                // print_r($detail_data_debit);
                                $container['content']['dataset']['RP64'] = $detailRP64;
                                $enable_readonly = false;
                        }
                        
                        // session korolari rekening kredit
                        if ($this->session->userdata('Mra_mapping_1_Kd_Rek_5')!='') 
                        {
                                $detailMapping1 = $this->Mapping_rek_akrual_model->getDetailMsAkrual5($this->session->userdata('Mra_mapping_1_Kd_Rek_1'),$this->session->userdata('Mra_mapping_1_Kd_Rek_2'),$this->session->userdata('Mra_mapping_1_Kd_Rek_3'),$this->session->userdata('Mra_mapping_1_Kd_Rek_4'),$this->session->userdata('Mra_mapping_1_Kd_Rek_5'));
                                // print_r($detail_data_kredit);
                                // echo "hai";
                                // die();
                                $container['content']['dataset']['detailMapping1'] = $detailMapping1;
                                $enable_readonly = false;
                        }

                        if ($this->session->userdata('Mra_mapping_2_Kd_Rek_5')!='') 
                        {
                                $detailMapping2 = $this->Mapping_rek_akrual_model->getDetailMsAkrual5($this->session->userdata('Mra_mapping_2_Kd_Rek_1'),$this->session->userdata('Mra_mapping_2_Kd_Rek_2'),$this->session->userdata('Mra_mapping_2_Kd_Rek_3'),$this->session->userdata('Mra_mapping_2_Kd_Rek_4'),$this->session->userdata('Mra_mapping_2_Kd_Rek_5'));
                                // print_r($detail_data_kredit);
                                // echo "hai";
                                // die();
                                $container['content']['dataset']['detailMapping2'] = $detailMapping2;
                                $enable_readonly = false;
                        }

                        $c = $this->Mapping_rek_akrual_model->showData();

                        $container['sidebar']['view']                                           = 'admin/sidebar';
                        $container['sidebar']['dataset']['aktive_menu']         = 60;
                        $container['content']['view']                                           = 'parameter/mapping_rek_akrual/tambah';
                        $container['content']['dataset']['enable_readonly']     = $enable_readonly;
                        $header['admin_log']                                                            = $admin_log;
                        
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
                $admin_log      = $this->auth->is_login_admin();
                {
                        $enable_readonly = true;

                        $row            = $this->Mapping_rek_akrual_model->update($id);
                        $rowAll         = $this->Mapping_rek_akrual_model->allData();
                        $detailKAR      = $this->Mapping_rek_akrual_model->getDetailRek5($row->Kd_Rek_1,$row->Kd_Rek_2,$row->Kd_Rek_3,$row->Kd_Rek_4,$row->Kd_Rek_5);
                        $detailKRD      = $this->Mapping_rek_akrual_model->getDetailRek5($row->D_Rek_1,$row->D_Rek_2,$row->D_Rek_3,$row->D_Rek_4,$row->D_Rek_5);
                        $detailKRK      = $this->Mapping_rek_akrual_model->getDetailRek5($row->K_Rek_1,$row->K_Rek_2,$row->K_Rek_3,$row->K_Rek_4,$row->K_Rek_5);
                        // print_r($detailKAR);die();
                        $container['sidebar']['view']                                           = 'admin/sidebar';
                        $container['sidebar']['dataset']['aktive_menu']         = 60;
                        $container['content']['view']                                           = 'parameter/mapping_rek_akrual/index';
                        $container['content']['dataset']['data']                        = $row;
                        $container['content']['dataset']['id']                          = $row->id;
                        $container['content']['dataset']['KAR']                         = $detailKAR;
                        $container['content']['dataset']['KRD']                         = $detailKRD;
                        $container['content']['dataset']['KRK']                         = $detailKAR;
                        $container['content']['dataset']['browse']                      = $rowAll;
                        $container['content']['dataset']['enable_readonly']     = $enable_readonly;
                        $header['admin_log']                                                            = $admin_log;
                        
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

                $row = $this->Mapping_rek_akrual_model->getDetailRek5($_POST[$array[0]],$_POST[$array[1]],$_POST[$array[2]],$_POST[$array[3]],$_POST[$array[4]]);
                echo json_encode($row);
                exit();
        }

        public function ajaxAkrual()
        {
                header('Content-Type: application/json');
                $array = array_keys($_POST);

                $row = $this->Mapping_rek_akrual_model->getDetailMsAkrual5($_POST[$array[0]],$_POST[$array[1]],$_POST[$array[2]],$_POST[$array[3]],$_POST[$array[4]]);
                echo json_encode($row);
                exit();
        }

        public function save()
        {

                if (!$this->Mapping_rek_akrual_model->save($_POST))
                        @redirect('parameter/mapping_rek_akrual/destroy/1');
                else
                        @redirect('parameter/mapping_rek_akrual/destroy/0');
        }

        public function destroy($error)
        {       
                $this->session->unset_userdata('P13_Kd_Rek_1');
                $this->session->unset_userdata('P13_Kd_Rek_2');
                $this->session->unset_userdata('P13_Kd_Rek_3');
                $this->session->unset_userdata('P13_Kd_Rek_4');
                $this->session->unset_userdata('P13_Kd_Rek_5');
                $this->session->unset_userdata('P64_Kd_Rek_1');
                $this->session->unset_userdata('P64_Kd_Rek_2');
                $this->session->unset_userdata('P64_Kd_Rek_3');
                $this->session->unset_userdata('P64_Kd_Rek_4');
                $this->session->unset_userdata('P64_Kd_Rek_5');
                $this->session->unset_userdata('Mra_mapping_1_Kd_Rek_1');
                $this->session->unset_userdata('Mra_mapping_1_Kd_Rek_2');
                $this->session->unset_userdata('Mra_mapping_1_Kd_Rek_3');
                $this->session->unset_userdata('Mra_mapping_1_Kd_Rek_4');
                $this->session->unset_userdata('Mra_mapping_1_Kd_Rek_5');
                $this->session->unset_userdata('Mra_mapping_2_Kd_Rek_1');
                $this->session->unset_userdata('Mra_mapping_2_Kd_Rek_2');
                $this->session->unset_userdata('Mra_mapping_2_Kd_Rek_3');
                $this->session->unset_userdata('Mra_mapping_2_Kd_Rek_4');
                $this->session->unset_userdata('Mra_mapping_2_Kd_Rek_5');

                if ($error == '1')
                        $this->session->set_flashdata('errors', NOTIF_UNIQUE_INPUT);
                else
                        $this->session->set_flashdata('success', NOTIF_SUCCESS_INPUT);

                @ redirect('parameter/mapping_rek_akrual');
        }

        public function updateData($id){
                $result = $this->Mapping_rek_akrual_model->updateData($id);

                if ($result == '1')
                        $this->session->set_flashdata('success', NOTIF_UPDATE_SUCCESS);
                else
                        $this->session->set_flashdata('errors', NOTIF_UPDATE_FAILED);
                @redirect('parameter/mapping_rek_akrual');
        }

        public function hapus()
        {
                $this->Mapping_rek_akrual_model->delete($_POST);
        }
}
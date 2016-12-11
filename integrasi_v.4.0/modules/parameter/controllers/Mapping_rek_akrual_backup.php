<?php
/**
* Class Mapping_rek_akrual
* @author Budi Pratama <irezpratama90@gmail.com>
*
*/
// error_reporting(E_ALL);
class Mapping_rek_akrual_model extends CI_Model {

        public $Kd_Rek_1;
        public $Kd_Rek_2;
        public $Kd_Rek_3;
        public $Kd_Rek_4;
        public $Kd_Rek_5;

        public function __construct()
        {
                parent::__construct();
        }

        public function showData()
        {
                $query = $this->db->query("SELECT * FROM ".TBL_AKRUAL." ORDER BY id DESC");
                $row = $query->row();
                
                return $row;
        }

        public function allData()
        {
                $this->db->select('*');
                $this->db->from(TBL_AKRUAL);

                $query = $this->db->get();

                return $query->result(); 
        }

        public function getDetailRek5($Kd_Rek_1,$Kd_Rek_2,$Kd_Rek_3,$Kd_Rek_4,$Kd_Rek_5)
        {
                $this->db->select('*');
                $this->db->from(TBL_CONFIG_REK_5);
                $this->db->where('Kd_Rek_1', $Kd_Rek_5);
                $this->db->where('Kd_Rek_2', $Kd_Rek_4);
                $this->db->where('Kd_Rek_3', $Kd_Rek_3);
                $this->db->where('Kd_Rek_4', $Kd_Rek_2);
                $this->db->where('Kd_Rek_5', $Kd_Rek_1);
                $query = $this->db->get();

                return $query->row();
        }

        public function get_akun($where)
        {
                $this->db->select('*');
                $this->db->from(TBL_CONFIG_REK_1);
                $this->db->where_in('Kd_Rek_1',$where);
                $query = $this->db->get();
       
                return $query->result();
        }

        public function get_kelompok()
        {
                $this->db->select('*');
                $this->db->from(TBL_CONFIG_REK_2);
                $this->db->where('Kd_Rek_1', $this->Kd_Rek_1);

                $query = $this->db->get();
                return $query->result(); 
        }

        public function get_jenis()
        {
                $this->db->select('*');
                $this->db->from(TBL_CONFIG_REK_3);
                $this->db->where('Kd_Rek_1', $this->Kd_Rek_1);
                $this->db->where('Kd_Rek_2', $this->Kd_Rek_2);

                $query = $this->db->get();
                return $query->result();
        }

        public function get_obyek()
        {
                $this->db->select('*');
                $this->db->from(TBL_CONFIG_REK_4);
                $this->db->where('Kd_Rek_1', $this->Kd_Rek_1);
                $this->db->where('Kd_Rek_2', $this->Kd_Rek_2);
                $this->db->where('Kd_Rek_3', $this->Kd_Rek_3);

                $query = $this->db->get();

                return $query->result(); 
        }

        public function get_rincian()
        {
                $this->db->select('*');
                $this->db->from(TBL_CONFIG_REK_5);
                $this->db->where('Kd_Rek_1', $this->Kd_Rek_1);
                $this->db->where('Kd_Rek_2', $this->Kd_Rek_2);
                $this->db->where('Kd_Rek_3', $this->Kd_Rek_3);
                $this->db->where('Kd_Rek_4', $this->Kd_Rek_4);
                $query = $this->db->get();

                return $query->result(); 
        }
        /*public function getDetailRek5($Kd_Rek_1,$Kd_Rek_2,$Kd_Rek_3,$Kd_Rek_4,$Kd_Rek_5,$sort)
        {
                $this->db->select('*');
                $this->db->from(TBL_RINCIAN);
                $this->db->where('Kd_Rek_1', $Kd_Rek_5);
                $this->db->where('Kd_Rek_2', $Kd_Rek_4);
                $this->db->where('Kd_Rek_3', $Kd_Rek_3);
                $this->db->where('Kd_Rek_4', $Kd_Rek_2);
                $this->db->where('Kd_Rek_5', $Kd_Rek_1);
                $this->db->where('Kd_Rek_5_sort', $sort);
                $query = $this->db->get();

                return $query->result();
        }

        public function get_kredit()
        {

                $this->db->select('*');
                $this->db->from(TBL_CONFIG_REK_1);
                $this->db->where_in('Kd_Rek_5', [3,7]);
                $query = $this->db->get();
       
                return $query->result();
        }

        public function get_Kd_Rek_5($Kd_Rek_1_sort)
        {
                $this->db->select('*');
                $this->db->from(TBL_Kd_Rek_5);
                $this->db->where('Kd_Rek_5_sort', $Kd_Rek_1_sort);
                $query = $this->db->get();

                return $query->result();
        }

        public function get_Kd_Rek_4($Kd_Rek_1_sort)
        {
                $this->db->select('*');
                $this->db->from(TBL_Kd_Rek_4);
                $this->db->where('Kd_Rek_5', $this->Kd_Rek_5);
                $this->db->where('Kd_Rek_5_sort', $Kd_Rek_1_sort);
                
                $query = $this->db->get();

                return $query->result(); 
        }

        public function get_Kd_Rek_3($Kd_Rek_1_sort)
        {
                $this->db->select('*');
                $this->db->from(TBL_Kd_Rek_3);
                $this->db->where('Kd_Rek_5', $this->Kd_Rek_5);
                $this->db->where('Kd_Rek_4', $this->Kd_Rek_4);
                $this->db->where('Kd_Rek_5_sort', $Kd_Rek_1_sort);
        
                $query = $this->db->get();
                return $query->result(); 
        }

        public function get_Kd_Rek_2($Kd_Rek_1_sort)
        {
                $this->db->select('*');
                $this->db->from(TBL_Kd_Rek_2);
                $this->db->where('Kd_Rek_5', $this->Kd_Rek_5);
                $this->db->where('Kd_Rek_4', $this->Kd_Rek_4);
                $this->db->where('Kd_Rek_3', $this->Kd_Rek_3);
                $this->db->where('Kd_Rek_5_sort', $Kd_Rek_1_sort);
                // echo "budi ganteng";die();
                $query = $this->db->get();

                return $query->result(); 
        }

        public function get_rincian($Kd_Rek_1_sort)
        {
                $this->db->select('*');
                $this->db->from(TBL_RINCIAN);
                $this->db->where('Kd_Rek_5', $this->Kd_Rek_5);
                $this->db->where('Kd_Rek_4', $this->Kd_Rek_4);
                $this->db->where('Kd_Rek_3', $this->Kd_Rek_3);
                $this->db->where('Kd_Rek_2', $this->Kd_Rek_2);
                $this->db->where('Kd_Rek_2', $Kd_Rek_1_sort);
                $query = $this->db->get();

                return $query->result(); 
        }*/

}
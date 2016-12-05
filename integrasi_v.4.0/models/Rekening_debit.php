<?php
/**
* Class Rekening_debit
* @author Budi Pratama <irezpratama90@gmail.com>
*
*/
class Rekening_debit extends CI_Model {
        public $kd_rek_1;
        public $kd_rek_2;
        public $kd_rek_3;
        public $kd_rek_4;

        public function __construct()
        {
                parent::__construct();
        }

        public function get_akun()
        {

                $this->db->select('*');
                $this->db->from(TBL_CONFIG_REK_1);
                $this->db->where_in('Kd_Rek_1', [1,2]);
                $query = $this->db->get();
       
                return $query->result();
        }

        public function get_kelompok()
        {
                $this->db->select('*');
                $this->db->from(TBL_CONFIG_REK_2);
                $this->db->where('Kd_Rek_1', $this->kd_rek_1);
                
                $query = $this->db->get();

                return $query->result(); 
        }

        public function get_jenis()
        {
                $this->db->select('*');
                $this->db->from(TBL_CONFIG_REK_3);
                $this->db->where('Kd_Rek_1', $this->kd_rek_1);
                $this->db->where('Kd_Rek_2', $this->kd_rek_2);
                $query = $this->db->get();

                return $query->result(); 
        }

        public function get_obyek($id)
        {
                $this->db->select('*');
                $this->db->from(TBL_CONFIG_REK_4);
                $this->db->where('Kd_Rek_1', $this->kd_rek_1);
                $this->db->where('Kd_Rek_2', $this->kd_rek_2);
                $this->db->where('Kd_Rek_3', $this->kd_rek_3);
                $query = $this->db->get();

                return $query->result(); 
        }

        public function get_rincian()
        {
                $this->db->select('*');
                $this->db->from(TBL_CONFIG_REK_5);
                $this->db->where('Kd_Rek_1', $this->kd_rek_1);
                $this->db->where('Kd_Rek_2', $this->kd_rek_2);
                $this->db->where('Kd_Rek_3', $this->kd_rek_3);
                $this->db->where('Kd_Rek_4', $this->kd_rek_4);

                $query = $this->db->get();
                // echo $this->db->last_query();exit;
                return $query->result(); 
        }

}
<?php
/**
* Class belanja_wajib_dan_mengikat_model
* @author Trust
*
*/
class belanja_wajib_dan_mengikat_model extends CI_Model {

        public $kd_rek_1;
        public $kd_rek_2;
        public $kd_rek_3;
        public $kd_rek_4;

        public function __construct()
        {
                parent::__construct();
        }

        public function getDetailRek5($kd_rek_1,$kd_rek_2,$kd_rek_3,$kd_rek_4,$kd_rek_5)
        {
                $this->db->select('*');
                $this->db->from(TBL_MS_BW);
                $this->db->where('kd_rek_4', $kd_rek_4);
                $this->db->where('kd_rek_3', $kd_rek_3);
                $this->db->where('kd_rek_2', $kd_rek_2);
                $this->db->where('kd_rek_1', $kd_rek_1);
                $query = $this->db->get();
                
                return $query->result();
        }

        public function get_akun()
        {
                $id = array('1', '2');
                $this->db->select('*');
                $this->db->from(TBL_MS_REK_1);
                $this->db->where_in('kd_rek_1', $id);
                $query = $this->db->get();
                
                return $query->result();
        }

        public function get_kelompok()
        {
                $this->db->select('*');
                $this->db->from(TBL_MS_REK_2);
                $this->db->where('kd_rek_1', $this->kd_rek_1);
                $query = $this->db->get();

                return $query->result(); 
        }

        public function get_jenis()
        {
                $this->db->select('*');
                $this->db->from(TBL_MS_REK_3);
                $this->db->where('kd_rek_1', $this->kd_rek_1);
                $this->db->where('kd_rek_2', $this->kd_rek_2);
                $query = $this->db->get();

                return $query->result(); 
        }

        public function get_obyek()
        {
                $this->db->select('*');
                $this->db->from(TBL_MS_REK_4);
                $this->db->where('kd_rek_3', $this->kd_rek_3);
                $this->db->where('kd_rek_2', $this->kd_rek_2);
                $this->db->where('kd_rek_1', $this->kd_rek_1);
                $query = $this->db->get();

                return $query->result(); 
        }

        public function get_rincian()
        {
                $this->db->select('*');
                $this->db->from(TBL_MS_REK_5);
                $this->db->where('kd_rek_4', $this->kd_rek_4);
                $this->db->where('kd_rek_3', $this->kd_rek_3);
                $this->db->where('kd_rek_2', $this->kd_rek_2);
                $this->db->where('kd_rek_1', $this->kd_rek_1);
                $query = $this->db->get();

                return $query->result(); 
        }

        /*public function get_kredit()
        {

                $this->db->select('*');
                $this->db->from(TBL_MS_REK_1);
                $this->db->where_in('kd_rek_1', [3,7]);
                $query = $this->db->get();
                
                return $query->result();
        }*/
}
<?php
/**
* Class Mapping_rek_akrual
* @author Budi Pratama <irezpratama90@gmail.com>
*
*/
// error_reporting(E_ALL);
class Mapping_rek_akrual_model extends CI_Model {

        public $akun;
        public $kelompok;
        public $jenis;
        public $obyek;
        public $rincian;

        public function __construct()
        {
                parent::__construct();
        }

        public function getDetailRek5($akun,$kelompok,$jenis,$obyek,$rincian,$sort)
        {
                $this->db->select('*');
                $this->db->from(TBL_RINCIAN);
                $this->db->where('no', $rincian);
                $this->db->where('obyek', $obyek);
                $this->db->where('jenis', $jenis);
                $this->db->where('kelompok', $kelompok);
                $this->db->where('akun', $akun);
                $this->db->where('akun_sort', $sort);
                $query = $this->db->get();

                return $query->result();
        }

        public function get_kredit()
        {

                $this->db->select('*');
                $this->db->from(TBL_CONFIG_REK_1);
                $this->db->where_in('akun', [3,7]);
                $query = $this->db->get();
       
                return $query->result();
        }

        public function get_akun($akun_sort)
        {
                $this->db->select('*');
                $this->db->from(TBL_AKUN);
                $this->db->where('akun_sort', $akun_sort);
                $query = $this->db->get();

                return $query->result();
        }

        public function get_kelompok($akun_sort)
        {
                $this->db->select('*');
                $this->db->from(TBL_KELOMPOK);
                $this->db->where('akun', $this->akun);
                $this->db->where('akun_sort', $akun_sort);
                
                $query = $this->db->get();

                return $query->result(); 
        }

        public function get_jenis($akun_sort)
        {
                $this->db->select('*');
                $this->db->from(TBL_JENIS);
                $this->db->where('akun', $this->akun);
                $this->db->where('kelompok', $this->kelompok);
                $this->db->where('akun_sort', $akun_sort);
        
                $query = $this->db->get();
                return $query->result(); 
        }

        public function get_obyek($akun_sort)
        {
                $this->db->select('*');
                $this->db->from(TBL_OBYEK);
                $this->db->where('akun', $this->akun);
                $this->db->where('kelompok', $this->kelompok);
                $this->db->where('jenis', $this->jenis);
                $this->db->where('akun_sort', $akun_sort);
                // echo "budi ganteng";die();
                $query = $this->db->get();

                return $query->result(); 
        }

        public function get_rincian($akun_sort)
        {
                $this->db->select('*');
                $this->db->from(TBL_RINCIAN);
                $this->db->where('akun', $this->akun);
                $this->db->where('kelompok', $this->kelompok);
                $this->db->where('jenis', $this->jenis);
                $this->db->where('obyek', $this->obyek);
                $this->db->where('obyek', $akun_sort);
                $query = $this->db->get();

                return $query->result(); 
        }

}
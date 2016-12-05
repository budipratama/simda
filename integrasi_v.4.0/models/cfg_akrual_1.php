<?php
/**
* Class Cfg_akrual_1
* @author Budi Pratama <irezpratama90@gmail.com>
*
*/
class Cfg_akrual_1 extends CI_Model {

        public $id;
        public $Kd_Akrual_1;
        public $Nm_Akrual_1;

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function get_data_a()
        {
                $this->db->select('*');
                $this->db->from(TBL_CONFIG_REK_1);
                $this->db->where_in('Kd_Rek_1', [5,7]);
                $query = $this->db->get();
       
                return $query->result();
        }

}
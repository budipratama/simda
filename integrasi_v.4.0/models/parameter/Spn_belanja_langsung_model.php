<?php
/**
* Class Korolari Model
* @author Budi Pratama <irezpratama90@gmail.com>
*
*/
// error_reporting(E_ALL);
class Spn_belanja_langsung_model extends CI_Model {

        public $Kd_1;
        public $Kd_2;


        public function __construct()
        {
                parent::__construct();
        }
        public function getMaxId($field,$table,$where = null){
            
            if ($where == null) {
                $query = $this->db->query("SELECT MAX($field) as id FROM $table");
            }
            else
            {  
                $query = $this->db->query("SELECT MAX($field) as id FROM $table WHERE $where"); 
            }

            $row = $query->row();
            return $row;
        }

        public function belanja_langsung_PN($data){
            if(!$this->db->insert(TBL_PRIORITAS,$data))
            {
                return false;
            }
            return true;
        }

        public function udpate_belanja_langsung_PN($id,$data){
            $result = $this->db->update(TBL_PRIORITAS, $data, array('Kd_Prioritas' => $id));
            return $result;  
        }

        public function getData(){
            $query = $this->db->query("SELECT * FROM ".TBL_MS_STANDART_SATUAN);
            $row = $query->result();
            
            return $row;
        }

        public function dataTable()
        {   
            $query = $this->db->query("SELECT * FROM ".TBL_PRIORITAS." ORDER BY `id` DESC");
            $row = $query->result();
            
            return $row;
        }


        public function dataTableSatuan()
        {
            $query = $this->db->query("SELECT * FROM ".TBL_MS_STANDART_SATUAN);
            $row = $query->row();
            return $row;
        }

        public function updateData($id,$data){
               $result = $this->db->update(TBL_MS_STANDART_HARGA_1, $data, array('Kd_1' => $id));
               return $result;
        }

        public function updateData_table_2($Kd_1,$Kd_2,$data){
               $result = $this->db->update(TBL_MS_STANDART_HARGA_2, $data, array('Kd_1' => $Kd_1,'Kd_2' => $Kd_2));
               return $result;
        }

        public function update_satuan($id,$data){
               $result = $this->db->update(Ms_Standart_Satuan, $data, array('id' => $id));
               return $result;
        }

        public function dataDetail($table,$where){
            $query = $this->db->query("SELECT * FROM $table WHERE $where");
            $row = $query->row();
            return $row;
        }

        public function updateData_table_3($id,$data){
               $result = $this->db->update(TBL_MS_STANDART_HARGA_3, $data, array('id' => $id));
               // echo $this->db->last_query();
               return $result;
        }

        public function save($data)
        {
            if(!$this->db->insert(TBL_MS_STANDART_HARGA_1,$data))
            {
                return false;
            }
            return true;
        }

        public function save_tbl_2($data)
        {
                if(!$this->db->insert(TBL_MS_STANDART_HARGA_2,$data))
                {
                    return false;
                }
                return true;
        }

        public function save_tbl_3($data)
        {
                if(!$this->db->insert(TBL_MS_STANDART_HARGA_3,$data))
                {
                    return false;
                }
                return true;
        }

        public function delete($data)
        {
                $this->db->select("*");
                $this->db->from(TBL_PRIORITAS);
                $this->db->where($data);
                $query = $this->db->get();

                $row = $query->row();
                if ($this->db->delete(TBL_PRIORITAS, array('id' => $row->id))) 
                        return "1";
                else
                        return "0";

        }

        public function delete2($data)
        {
                if ($this->db->delete(TBL_MS_STANDART_HARGA_2, $_POST)) 
                        return "1";
                else
                        return "0";

        }

        public function delete3($data)
        {
                if ($this->db->delete(TBL_MS_STANDART_HARGA_3, $_POST)) 
                        return "1";
                else
                        return "0";

        }

         public function delete4($data)
        {
                if ($this->db->delete(TBL_MS_STANDART_SATUAN, $_POST)) 
                        return "1";
                else
                        return "0";

        }

        public function select_optoin()
        {
            $this->db->select("*");
            $this->db->from(TBL_MS_STANDART_SATUAN);
            $query = $this->db->get();
            $row = $query->result();
            return $row;
        }

        public function add_satuan($data)
        {
            if(!$this->db->insert(TBL_MS_STANDART_SATUAN,$data))
            {
                return false;
            }
            return true;
        }

}
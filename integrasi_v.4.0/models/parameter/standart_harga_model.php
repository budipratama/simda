<?php
/**
* Class Korolari Model
* @author Budi Pratama <irezpratama90@gmail.com>
*
*/
// error_reporting(E_ALL);
class standart_harga_model extends CI_Model {

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

        public function getData(){
            $query = $this->db->query("SELECT * FROM ".TBL_MS_STANDART_SATUAN);
            $row = $query->result();
            
            return $row;
        }

        public function dataTableKode1()
        {   
            $query = $this->db->query("SELECT * FROM ".TBL_MS_STANDART_HARGA_1." ORDER BY `id` DESC");
            $row = $query->result();
            
            return $row;
        }

        public function dataTableKode2()
        {
            // echo "gagah perkasa ".$this->Kd_1;
            $query = $this->db->query("SELECT * FROM ".TBL_MS_STANDART_HARGA_2." WHERE `Kd_1` = {$this->Kd_1} ORDER BY id DESC");
            // echo $this->db->last_query();
            $row = $query->result();
            return $row;
        }

        public function dataTableKode3()
        {
            $query = $this->db->query("SELECT * FROM ".TBL_MS_STANDART_HARGA_3." WHERE `Kd_1` = {$this->Kd_1} AND `Kd_2` = {$this->Kd_2} ORDER BY id DESC");
            $row = $query->row();
            // echo $this->db->last_query();die();
            return $row;
        }

        public function updateData($id,$data){
               $result = $this->db->update(TBL_MS_STANDART_HARGA_1, $data, array('Kd_1' => $id));
               return $result;
        }

        public function updateData_table_2($Kd_1,$Kd_2,$data){
               $result = $this->db->update(TBL_MS_STANDART_HARGA_2, $data, array('Kd_1' => $Kd_1,'Kd_2' => $Kd_2));
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
                $this->db->from(TBL_MS_STANDART_HARGA_1);
                $this->db->where($data);
                $query = $this->db->get();

                $row = $query->row();
                if ($this->db->delete(TBL_MS_STANDART_HARGA_1, array('id' => $row->id))) 
                        return "1";
                else
                        return "0";

        }

}
<?php
/**
* Class Korolari Model
* @author Budi Pratama <irezpratama90@gmail.com>
*
*/
// error_reporting(E_ALL);
class Mapping_rekening_sap_model extends CI_Model {

        public $Kd_Rek_1;
        public $Kd_Rek_2;
        public $Kd_Rek_3;
        public $Kd_Rek_4;

        public function __construct()
        {
                parent::__construct();
        }

        public function showData()
        {
                $query = $this->db->query("SELECT * FROM ".TBL_MS_LRA_REK." ORDER BY id DESC");
                $row = $query->row();
                
                return $row;
        }

        public function update($id)
        {
                $query = $this->db->query("SELECT * FROM ".TBL_MS_LRA_REK." WHERE `id`= $id");
                $row = $query->row();
                
                return $row;
        }

        public function updateData($id){
               return $this->db->update(TBL_MS_LRA_REK, $_POST, array('id' => $id));

        }

        public function getDetailRek4($Kd_Rek_1,$Kd_Rek_2,$Kd_Rek_3,$Kd_Rek_4)
        {
                $this->db->select('*');
                $this->db->from(TBL_CONFIG_REK_4);
                $this->db->where('Kd_Rek_1', $Kd_Rek_1);
                $this->db->where('Kd_Rek_2', $Kd_Rek_2);
                $this->db->where('Kd_Rek_3', $Kd_Rek_3);
                $this->db->where('Kd_Rek_4', $Kd_Rek_4);
                $query = $this->db->get();
                // echo $this->db->last_query();
                return $query->row();
        }

        public function getDetailRek4LRA($Kd_Rek_1,$Kd_Rek_2,$Kd_Rek_3,$Kd_Rek_4)
        {
                $this->db->select('*');
                $this->db->from(TBL_CONFIG_REK_4);
                $this->db->where('Kd_Rek_1', $Kd_Rek_1);
                $this->db->where('Kd_Rek_2', $Kd_Rek_2);
                $this->db->where('Kd_Rek_3', $Kd_Rek_3);
                $this->db->where('Kd_Rek_4', $Kd_Rek_4);
                $query = $this->db->get();
                // echo $this->db->last_query();
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
                if ($this->Kd_Rek_1 == 5) {
                        $this->db->where('Kd_Rek_2',2);
                }
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

                if ($this->Kd_Rek_1 == 5) {
                        $this->db->where('Kd_Rek_3',3);
                }

                $query = $this->db->get();
                // echo $this->db->last_query();
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

        public function allData()
        {
                $this->db->select('*');
                $this->db->from(TBL_MS_LRA_REK);

                $query = $this->db->get();

                return $query->result(); 
        }

        public function save($data)
        {
                if(!$this->db->insert(TBL_MS_LRA_REK,$data))
                {
                        // echo $error = $this->db->error();
                        // echo "hai";
                        // die();

                        return false;
                }
                return true;
        }

        public function delete($data)
        {
                $this->db->select("*");
                $this->db->from(TBL_MS_LRA_REK);
                $this->db->where($data);
                $query = $this->db->get();

                $row = $query->row();
                // echo "hapus ".$this->db->delete(TBL_KOROLARI, array('id' => $row->id));
                if ($this->db->delete(TBL_MS_LRA_REK, array('id' => $row->id))) 
                        return "1";
                else
                        return "0";
                // echo $this->db->last_query();

        }

}
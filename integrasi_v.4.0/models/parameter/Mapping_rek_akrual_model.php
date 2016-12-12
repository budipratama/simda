<?php
/**
* Class Korolari Model
* @author Budi Pratama <irezpratama90@gmail.com>
*
*/
// error_reporting(E_ALL);
class Mapping_rek_akrual_model extends CI_Model {

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
                $query = $this->db->query("SELECT * FROM ".TBL_AKRUAL." ORDER BY id DESC");
                $row = $query->row();
                
                return $row;
        }

        public function getDetailMsAkrual5($Kd_Akrual_1,$Kd_Akrual_2,$Kd_Akrual_3,$Kd_Akrual_4,$Kd_Akrual_5)
        {
                $this->db->select('*');
                $this->db->from(TBL_MS_AKRUAL5);
                $this->db->where('Kd_Akrual_1', $Kd_Akrual_1);
                $this->db->where('Kd_Akrual_2', $Kd_Akrual_2);
                $this->db->where('Kd_Akrual_3', $Kd_Akrual_3);
                $this->db->where('Kd_Akrual_4', $Kd_Akrual_4);
                $this->db->where('Kd_Akrual_5', $Kd_Akrual_5);
                $query = $this->db->get();
                // echo $this->db->last_query();
                return $query->row();
        }

        public function update($id)
        {
                $query = $this->db->query("SELECT * FROM ".TBL_AKRUAL." WHERE `id`= $id");
                $row = $query->row();
                
                return $row;
        }

        public function getDetailRek5($Kd_Rek_1,$Kd_Rek_2,$Kd_Rek_3,$Kd_Rek_4,$Kd_Rek_5)
        {
                $this->db->select('*');
                $this->db->from(TBL_CONFIG_REK_5);
                $this->db->where('Kd_Rek_1', $Kd_Rek_1);
                $this->db->where('Kd_Rek_2', $Kd_Rek_2);
                $this->db->where('Kd_Rek_3', $Kd_Rek_3);
                $this->db->where('Kd_Rek_4', $Kd_Rek_4);
                $this->db->where('Kd_Rek_5', $Kd_Rek_5);
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
                /*if ($this->Kd_Rek_1 == 5) {
                        $this->db->where('Kd_Rek_2',2);
                }*/
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

        public function get_akun_akrual($where)
        {

                $this->db->select('*');
                $this->db->from(TBL_MS_AKRUAL_1);
                $this->db->where_in('Kd_Akrual_1',$where);
                $query = $this->db->get();
       
                return $query->result();
        }

        public function get_kelompok_akrual()
        {
                $this->db->select('*');
                $this->db->from(TBL_MS_AKRUAL_2);
                $this->db->where('Kd_Akrual_1', $this->Kd_Akrual_1);

                $query = $this->db->get();

                return $query->result(); 
        }

        public function get_jenis_akrual()
        {
                $this->db->select('*');
                $this->db->from(TBL_MS_AKRUAL_3);
                $this->db->where('Kd_Akrual_1', $this->Kd_Akrual_1);
                $this->db->where('Kd_Akrual_2', $this->Kd_Akrual_2);
                $query = $this->db->get();
                return $query->result();
        }

        public function get_obyek_akrual()
        {
                $this->db->select('*');
                $this->db->from(TBL_MS_AKRUAL_4);
                $this->db->where('Kd_Akrual_1', $this->Kd_Akrual_1);
                $this->db->where('Kd_Akrual_2', $this->Kd_Akrual_2);
                $this->db->where('Kd_Akrual_3', $this->Kd_Akrual_3);

                $query = $this->db->get();

                return $query->result(); 
        }

        public function get_rincian_akrual()
        {
                $this->db->select('*');
                $this->db->from(TBL_MS_AKRUAL_5);
                $this->db->where('Kd_Akrual_1', $this->Kd_Akrual_1);
                $this->db->where('Kd_Akrual_2', $this->Kd_Akrual_2);
                $this->db->where('Kd_Akrual_3', $this->Kd_Akrual_3);
                $this->db->where('Kd_Akrual_4', $this->Kd_Akrual_4);
                $query = $this->db->get();

                return $query->result(); 
        }

        public function allData()
        {
                $this->db->select('*');
                $this->db->from(TBL_AKRUAL);

                $query = $this->db->get();

                return $query->result(); 
        }

        public function updateData($id){
               return $this->db->update(TBL_AKRUAL, $_POST, array('id' => $id));

        }
        public function save($data)
        {

                if(!$this->db->insert(TBL_AKRUAL,$data))
                {
                        return false;
                }

                return true;
        }

        public function delete($data)
        {
                $this->db->select("*");
                $this->db->from(TBL_AKRUAL);
                $this->db->where($data);
                $query = $this->db->get();
                $row = $query->row();
                
                if ($this->db->delete(TBL_AKRUAL, array('id' => $row->id))) 
                        echo "1";
                else
                        echo "0";

        }

}
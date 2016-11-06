<?php
class Rup_model extends CI_Model  {

	function __contsruct(){
        parent::Model();
    }
	
	function insert($data){
       return $this->db->insert("rka", $data);
	}
	
	public function get_task ($list_id,$active = true){
        $this->db->select('*');
		$this->db->order_by('rup.kode','ASC');
        $this->db->from('rup');
	  //$this->db->join('tipe', 'tipe.tipe_kode = rka.sumber');
        $this->db->where('rup.anggaran_kode',$list_id);
        if($active == true){
            $this->db->where('rup.tipe_rup',1);
        } else {
            $this->db->where('rup.tipe_rup',2);
        }
        $query = $this->db->get();
        if($query->num_rows() < 1){
            return FALSE;
        }
        return $query->result();        
    }
	
}
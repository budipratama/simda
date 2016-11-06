<?php
class Tipe_model extends CI_Model  {

	function __contsruct(){
        parent::Model();
    }
	
	public function get_all_lists(){ 
		$this->db->where('tipe.tipe_sort',1);
        $query = $this->db->get('tipe');
        return $query->result();
    }
	
	public function get_list($id){
        $this->db->select('*');
        $this->db->from('tipe');
        $this->db->where('tipe_kode',$id);
        $query = $this->db->get();
         if($query->num_rows() != 1){
            return FALSE;
        }
        return $query->row();
    }
	
	public function grid_all($select="", $sidx="", $sord="", $limit="", $start="", $where="", $like=""){
		$this->db->select($select);
		$this->db->from("tipe");
		if ($where){$this->db->where($where);}
		if ($like){
			foreach($like as $key => $value){ 
			$this->db->like($key, $value); 
			}
		}
		if ($sidx && $sord) {$this->db->order_by($sidx,$sord);}
		if (!empty($limit)) {$this->db->limit($limit,$start);}
		$query = $this->db->get();
		if ($query->num_rows() > 0){
			return $query->result();
		} else {
			return false;
		}
	}
	
}
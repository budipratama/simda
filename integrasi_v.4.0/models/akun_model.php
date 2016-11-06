<?php
class Akun_model extends CI_Model  {

	function __contsruct(){
        parent::Model();
    }
	
	function insert($data){
       return $this->db->insert("akun", $data);
	}
	
	function update($data, $kode){
		return $this->db->update("akun", $data, array('kode' => $kode));	
	}
	
	function delete($kode){
		return $this->db->delete("akun", array('kode' => $kode));	
	}
	
	public function get_rekening(){ 
		$this->db->where('akun.akun_sort',1);
        $query = $this->db->get('akun');
        return $query->result();
    }
	
	public function get_belanja(){ 
		$this->db->where('akun.kode',5);
        $query = $this->db->get('akun');
        return $query->result();
    }
	
	public function get_akrual(){ 
		$this->db->where('akun.akun_sort',2);
        $query = $this->db->get('akun');
        return $query->result();
    }
	
	public function get_list($id){
        $this->db->select('*');
        $this->db->from('akun');
        $this->db->where('kode',$id);
        $query = $this->db->get();
         if($query->num_rows() != 1){
            return FALSE;
        }
        return $query->row();
    }
	
	public function grid_all($select="", $sidx="", $sord="", $limit="", $start="", $where="", $like=""){
		$this->db->select($select);
		$this->db->from("akun");
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
	
	public function grid_alli($select="", $sidx="", $sord="", $limit="", $start="", $where="", $like=""){
		$this->db->select($select);
		$this->db->from("akun_");
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
	
	public function count_all($where="", $like=""){
		$this->db->select("kode");
		$this->db->from("akun");
		if ($where){$this->db->where($where);}
		if ($like){
			foreach($like as $key => $value){ 
			$this->db->like($key, $value); 
			}
		}
		$query = $this->db->get();
		return $query->num_rows();
	}
}
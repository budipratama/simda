<?php
class Kelompok_model extends CI_Model  {

	function __contsruct(){
        parent::Model();
    }
	
	function insert($data){
       return $this->db->insert("kelompok", $data);
	}
	
	function update($data, $kode){
		return $this->db->update("kelompok", $data, array('kode' => $kode));	
	}
	
	function delete($kode){
		return $this->db->delete("kelompok", array('kode' => $kode));	
	}
	
	public function get_task($id){
        $this->db->where('kode',$id);
        $query = $this->db->get('kelompok');
        return $query->row();
    }
	
	public function get_list($id){
        $this->db->select('*');
        $this->db->from('kelompok');
        $this->db->where('kode',$id);
        $query = $this->db->get();
         if($query->num_rows() != 1){
            return FALSE;
        }
        return $query->row();
    }
	
	public function get_list_tasks($list_id,$active = true){
        $this->db->select('
            kelompok.kelompok_nama,
            kelompok.no,
            kelompok.kode as task_id,
            akun.akun_nama
            ');
        $this->db->from('kelompok');
        $this->db->join('akun', 'akun.kode = kelompok.akun');
        $this->db->where('kelompok.akun',$list_id);
        if($active == true){
            $this->db->where('kelompok.akun_sort',1);
        } else {
            $this->db->where('kelompok.akun_sort',2);
        }
        $query = $this->db->get();
        if($query->num_rows() < 1){
            return FALSE;
        }
        return $query->result();        
    }
	
	public function get($select="", $where=""){
		$this->db->select($select);
		$this->db->from("kelompok");
		$this->db->join("akun", "kelompok.akun=akun.kode", "left");
		if ($where){$this->db->where($where);}
		$this->db->order_by('kelompok.kode','DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1){
			return $query->row();
		} else {
			return false;
		}
	}
	
	public function grid_all($select="", $sidx="", $sord="", $limit="", $start="", $where="", $like=""){
		$this->db->select($select);
		$this->db->from("kelompok");
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
		$this->db->from("kelompok_");
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
		$this->db->from("kelompok");
		$this->db->join("akun", "kelompok.akun=akun.kode", "left");
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
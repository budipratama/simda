<?php
class Obyek_model extends CI_Model  {

	function __contsruct(){
        parent::Model();
    }
	
	function insert($data){
       return $this->db->insert("obyek", $data);
	}
	
	function update($data, $kode){
		return $this->db->update("obyek", $data, array('kode' => $kode));	
	}
	
	function delete1($kode){
		return $this->db->delete("obyek", array('kode' => $kode));	
	}
	
	function delete2($kode){
		return $this->db->join("rincian", "obyek.kode = rincian.kode")
					->where("rincian.obyek", $kode)
					->delete("rincian");	
	}
	
	public function get_obyek(){ 
		$this->db->where('obyek.jenis',65);
        $query = $this->db->get('obyek');
        return $query->result();
    }
	
	public function get_task($id){
        $this->db->where('kode',$id);
        $query = $this->db->get('obyek');
        return $query->row();
    }
	
	public function get_task_data($id){
        $this->db->where('kode',$id);
        $query = $this->db->get('obyek');
        return $query->row();
    }
  
	public function completed($id,$active = true){
        $this->db->select('obyek.no');
		$this->db->order_by('obyek.kode','DESC');
        $this->db->from('obyek');
        $this->db->where('obyek.jenis',$id);
        if($active == true){
            $this->db->where('obyek.akun_sort',1);
        } else {
            $this->db->where('obyek.akun_sort',2);
        }
        $query = $this->db->get();
        if($query->num_rows() < 1){
            return FALSE;
        }
        return $query->row();
    }
	
	public function uncompleted($id,$active = true){
        $this->db->select('obyek.no');
		$this->db->order_by('obyek.kode','DESC');
        $this->db->from('obyek');
        $this->db->where('obyek.jenis',$id);
        if($active == true){
            $this->db->where('obyek.akun_sort',2);
        } else {
            $this->db->where('obyek.akun_sort',1);
        }
        $query = $this->db->get();
        if($query->num_rows() < 1){
            return FALSE;
        }
        return $query->row();
    }
	
	public function get_list($id){
        $this->db->select('*');
        $this->db->from('obyek');
        $this->db->where('kode',$id);
		$this->db->order_by('obyek.kode','DESC');
        $query = $this->db->get();
         if($query->num_rows() != 1){
            return FALSE;
        }
        return $query->row();
    }
	
	public function get_list_tasks($id,$active = true){
        $this->db->select('
            obyek.obyek_nama,
			obyek.no,
            obyek.akun,
            obyek.kode as task_id,
            kelompok.no as kelompok_id,
            akun.no as akun_id
            ');
		$this->db->order_by('obyek.kode','ASC');
        $this->db->from('obyek');
		$this->db->join('akun', 'akun.kode = obyek.akun');
        $this->db->join('kelompok', 'kelompok.kode = obyek.kelompok');
        $this->db->join('jenis', 'jenis.kode = obyek.jenis');
        $this->db->where('obyek.jenis',$id);
        if($active == true){
            $this->db->where('obyek.akun_sort',1);
        } else {
            $this->db->where('obyek.akun_sort',2);
        }
        $query = $this->db->get();
        if($query->num_rows() < 1){
            return FALSE;
        }
        return $query->result();
    }
	
	public function get($select="", $where=""){
		$this->db->select($select);
		$this->db->from("obyek");
		$this->db->join("jenis", "obyek.jenis=jenis.kode", "left");
		if ($where){$this->db->where($where);}
		$this->db->order_by('obyek.kode','DESC');
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
		$this->db->from("obyek");
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
		$this->db->from("obyek");
		$this->db->join("jenis", "obyek.jenis=jenis.kode", "left");
		if ($where){$this->db->where($where);}
		if ($like){
			foreach($like as $key => $value){ 
			$this->db->like($key, $value); 
			}
		}
		$query = $this->db->get();
		return $query->num_rows();
	}
	
	public function getOnly($select="", $where="", $like=""){
		$this->db->select($select);
		$this->db->from("obyek");
		if ($where){$this->db->where($where);}
		if ($like){
			foreach($like as $key => $value){ 
			$this->db->like($key, $value); 
			}
		}
		$this->db->order_by('kode','DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1){
			return $query->row();
		} else {
			return false;
		}
	}
}
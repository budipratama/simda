<?php
class Jenis_model extends CI_Model  {

	function __contsruct(){
        parent::Model();
    }
	
	function insert($data){
       return $this->db->insert("jenis", $data);
	}
	
	function update($data, $kode){
		return $this->db->update("jenis", $data, array('kode' => $kode));	
	}
	
	function delete($kode){
		return $this->db->delete("jenis", array('kode' => $kode));	
	}
	
	function delete1($kode){
		return $this->db->join("obyek", "jenis.kode = obyek.kode")
					->where("obyek.jenis", $kode)
					->delete("obyek");	
	}
	
	function delete2($kode){
		return $this->db->join("rincian", "jenis.kode = rincian.kode")
					->where("rincian.jenis", $kode)
					->delete("rincian");	
	}
	
	public function get_task($id){
        $this->db->where('kode',$id);
        $query = $this->db->get('jenis');
        return $query->row();
    }
	
	public function get_task_data($id){
        $this->db->where('kode',$id);
        $query = $this->db->get('jenis');
        return $query->row();
    }
	
	public function get_list($id){
        $this->db->select('*');
        $this->db->from('jenis');
        $this->db->where('kode',$id);
		$this->db->order_by('jenis.kode','DESC');
        $query = $this->db->get();
         if($query->num_rows() != 1){
            return FALSE;
        }
        return $query->row();
    }
	
	public function completed($list_id,$active = true){
        $this->db->select('jenis.no');
		$this->db->order_by('jenis.kode','DESC');
        $this->db->from('jenis');
        $this->db->join('tipe', 'tipe.tipe_kode = jenis.saldo_normal');
        $this->db->join('kelompok', 'kelompok.kode = jenis.kelompok');
        $this->db->where('jenis.kelompok',$list_id);
        if($active == true){
            $this->db->where('jenis.akun_sort',1);
        } else {
            $this->db->where('jenis.akun_sort',2);
        }
        $query = $this->db->get();
        if($query->num_rows() < 1){
            return FALSE;
        }
        return $query->row();
    }
	
	public function uncompleted($list_id,$active = true){
        $this->db->select('jenis.no');
		$this->db->order_by('jenis.kode','DESC');
        $this->db->from('jenis');
        $this->db->join('tipe', 'tipe.tipe_kode = jenis.saldo_normal');
        $this->db->join('kelompok', 'kelompok.kode = jenis.kelompok');
        $this->db->where('jenis.kelompok',$list_id);
        if($active == true){
            $this->db->where('jenis.akun_sort',2);
        } else {
            $this->db->where('jenis.akun_sort',1);
        }
        $query = $this->db->get();
        if($query->num_rows() < 1){
            return FALSE;
        }
        return $query->row();
    }
	
	public function get_list_tasks($list_id,$active = true){
        $this->db->select('
            jenis.jenis_nama,
            jenis.no,
            jenis.akun,
            jenis.saldo_normal,
            jenis.kode as task_id,
            tipe.tipe_nama as saldo_id,
			akun.no as akun_id
            ');
		$this->db->order_by('jenis.kode','ASC');
        $this->db->from('jenis');
		$this->db->join('akun', 'akun.kode = jenis.akun');
        $this->db->join('tipe', 'tipe.tipe_kode = jenis.saldo_normal');
        $this->db->join('kelompok', 'kelompok.kode = jenis.kelompok');
        $this->db->where('jenis.kelompok',$list_id);
        if($active == true){
            $this->db->where('jenis.akun_sort',1);
        } else {
            $this->db->where('jenis.akun_sort',2);
        }
        $query = $this->db->get();
        if($query->num_rows() < 1){
            return FALSE;
        }
        return $query->result();
    }
	
	public function get($select="", $where=""){
		$this->db->select($select);
		$this->db->from("jenis");
		$this->db->join("akun", "jenis.akun=akun.kode", "left");
		$this->db->join("kelompok", "jenis.kelompok=kelompok.kode", "left");
		if ($where){$this->db->where($where);}
		$this->db->order_by('jenis.kode','DESC');
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
		$this->db->from("jenis");
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
		$this->db->from("jenis_");
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
		$this->db->from("jenis");
		$this->db->join("kelompok", "jenis.kelompok=kelompok.kode", "left");
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
		$this->db->from("jenis");
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
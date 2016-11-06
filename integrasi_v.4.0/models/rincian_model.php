<?php
class Rincian_model extends CI_Model  {

	function __contsruct(){
        parent::Model();
    }
	
	function insert($data){
       return $this->db->insert("rincian", $data);
	}
	
	function update($data, $kode){
		return $this->db->update("rincian", $data, array('kode' => $kode));	
	}
	
	function delete2($kode){
		return $this->db->delete("rincian", array('kode' => $kode));	
	}
	
	public function get_task($id){
        $this->db->where('kode',$id);
        $query = $this->db->get('rincian');
        return $query->row();
    }
	
	public function get_list($id){
        $this->db->select('*');
        $this->db->from('rincian');
        $this->db->where('kode',$id);
        $query = $this->db->get();
         if($query->num_rows() != 1){
            return FALSE;
        }
        return $query->row();
    }
	
	public function get_task_list_id($id){
        $this->db->where('kode',$id);
        $query = $this->db->get('rincian');
        return $query->row()->obyek;
    }
	
	public function get_task_data($id){
        $this->db->where('kode',$id);
        $query = $this->db->get('rincian');
        return $query->row();
    }
	
	public function completed($id,$active = true){
        $this->db->select('rincian.no');
		$this->db->order_by('rincian.kode','DESC');
        $this->db->from('rincian');
        $this->db->where('rincian.obyek',$id);
        if($active == true){
            $this->db->where('rincian.akun_sort',1);
        } else {
            $this->db->where('rincian.akun_sort',2);
        }
        $query = $this->db->get();
        if($query->num_rows() < 1){
            return FALSE;
        }
        return $query->row();
    }
	
	public function uncompleted($id,$active = true){
        $this->db->select('rincian.no');
		$this->db->order_by('rincian.kode','DESC');
        $this->db->from('rincian');
        $this->db->where('rincian.obyek',$id);
        if($active == true){
            $this->db->where('rincian.akun_sort',2);
        } else {
            $this->db->where('rincian.akun_sort',1);
        }
        $query = $this->db->get();
        if($query->num_rows() < 1){
            return FALSE;
        }
        return $query->row();
    }
	
	public function get_list_tasks($list_id,$active = true){
        $this->db->select('
            rincian.rincian_nama,
            rincian.no,
            rincian.akun,
            rincian.peraturan,
            rincian.kode as task_id,
			kelompok.no as kelompok_id,
            jenis.no as jenis_id,
            obyek.no as obyek_id,
			akun.no as akun_id			
            ');
        $this->db->from('rincian');
		$this->db->join('akun', 'akun.kode = rincian.akun');
		$this->db->join('kelompok', 'kelompok.kode = rincian.kelompok');
		$this->db->join('jenis', 'jenis.kode = rincian.jenis');
        $this->db->join('obyek', 'obyek.kode = rincian.obyek');
        $this->db->where('rincian.obyek',$list_id);
        if($active == true){
            $this->db->where('rincian.akun_sort',1);
        } else {
            $this->db->where('rincian.akun_sort',2);
        }
        $query = $this->db->get();
        if($query->num_rows() < 1){
            return FALSE;
        }
        return $query->result();
    }
	
	public function get($select="", $where=""){
		$this->db->select($select);
		$this->db->from("rincian");
		$this->db->join("obyek", "rincian.obyek=obyek.kode", "left");
		if ($where){$this->db->where($where);}
		$this->db->order_by('rincian.kode','DESC');
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
		$this->db->from("rincian");
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
	
	public function getOnly($select="", $where="", $like=""){
		$this->db->select($select);
		$this->db->from("rincian");
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
<?php
class Sub_model extends CI_Model  {

	function __contsruct(){
        parent::Model();
    }
	
	function insert($data){
       return $this->db->insert("sub", $data);
	}
	
	function update($data, $kode){
		return $this->db->update("sub", $data, array('kode' => $kode));	
	}
	
	function delete($kode){
		return $this->db->delete("sub", array('kode' => $kode));	
	}
	
	public function get_task_data($id){
        $this->db->where('kode',$id);
        $query = $this->db->get('sub');
        return $query->row();
    }
	
	public function get_list($id){
        $this->db->select('*');
        $this->db->from('sub');
        $this->db->where('kode',$id);
		$this->db->order_by('sub.kode','DESC');
        $query = $this->db->get();
         if($query->num_rows() != 1){
            return FALSE;
        }
        return $query->row();
    }
	
	public function completed($list_id,$active = true){
        $this->db->select('sub.no, sub.skpd');
		$this->db->order_by('sub.kode','DESC');
		$this->db->from('sub');
        $this->db->join('tipe', 'tipe.tipe_kode = sub.tipe');
        $this->db->join('urusan', 'urusan.kode = sub.urusan');
        $this->db->join('skpd', 'skpd.skpd_kode = sub.skpd');
        $this->db->where('sub.skpd',$list_id);
        if($active == true){
            $this->db->where('sub.tipe_sort',1);
        } else {
            $this->db->where('sub.tipe_sort',2);
        }
        $query = $this->db->get();
        if($query->num_rows() < 1){
            return FALSE;
        }
        return $query->row();
    }
	
		public function uncompleted($list_id,$active = true){
        $this->db->select('sub.no');
		$this->db->order_by('sub.kode','DESC');
		$this->db->from('sub');
        $this->db->join('rincian', 'rincian.kode = sub.rincian');
        $this->db->where('sub.rincian',$list_id);
        if($active == true){
            $this->db->where('sub.tipe_sort',2);
        } else {
            $this->db->where('sub.tipe_sort',1);
        }
        $query = $this->db->get();
        if($query->num_rows() < 1){
            return FALSE;
        }
        return $query->row();
    }
	
	public function get_organisasi($list_id,$active = true){
        $this->db->select('
            sub.sub_nama,
            sub.no,
            sub.tipe,
            sub.urusan,
            sub.kode as task_id,
			tipe.no as tipe_id,
            urusan.no as urusan_id
            ');
		$this->db->order_by('sub.no','ASC');
        $this->db->from('sub');
		$this->db->join('tipe', 'tipe.tipe_kode = sub.tipe');
        $this->db->join('urusan', 'urusan.kode = sub.urusan');
        $this->db->join('skpd', 'skpd.skpd_kode = sub.skpd');
        $this->db->where('sub.skpd',$list_id);
        if($active == true){
            $this->db->where('sub.tipe_sort',1);
        } else {
            $this->db->where('sub.tipe_sort',2);
        }
        $query = $this->db->get();
        if($query->num_rows() < 1){
            return FALSE;
        }
        return $query->result();
    }
	
	public function get_rekening($list_id,$active = true){
        $this->db->select('
            sub.sub_nama,           
            sub.no,
			sub.kode as task_id,
			obyek.no as obyek_id
            ');
		$this->db->order_by('sub.no','ASC');
        $this->db->from('sub');
		$this->db->join('obyek', 'obyek.kode = sub.obyek');
        $this->db->where('sub.rincian',$list_id);
        if($active == true){
            $this->db->where('sub.tipe_sort',2);
        } else {
            $this->db->where('sub.tipe_sort',1);
        }
        $query = $this->db->get();
        if($query->num_rows() < 1){
            return FALSE;
        }
        return $query->result();
    }
	
	public function grid_all($select="", $sidx="", $sord="", $limit="", $start="", $where="", $like=""){
		$this->db->select($select);
		$this->db->from("sub");
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
	
	public function getOnlys($select="", $where="", $like=""){
		$this->db->select($select);
		$this->db->from("sub");
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
			return FALSE;
		}
	}
	
}
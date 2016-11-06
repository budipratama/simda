<?php
class Rka_model extends CI_Model  {

	function __contsruct(){
        parent::Model();
    }
	
	function insert($data){
       return $this->db->insert("rka", $data);
	}
	
	function insertr($data){
       return $this->db->insert("rka_rincian", $data);
	}
	
	function inserts($data){
       return $this->db->insert("rka_sub", $data);
	}
	
	public function create_task($data){
	$insert = $this->db->insert('rka_sub', $data);
	return $insert;
    }
	
	function update($data, $kode){
		return $this->db->update("rka", $data, array('kode' => $kode));	
	}
	
	function updater($data, $kode){
		return $this->db->update("rka_rincian", $data, array('kode' => $kode));	
	}
	
	function updates($data, $kode){
		return $this->db->update("rka_sub", $data, array('kode' => $kode));	
	}
	
	function delete0($kode){
		return $this->db->delete("rka", array('kode' => $kode));	
	}
	
	function delete1($kode){
		return $this->db->join("rka_rincian", "rka.kode = rka_rincian.rka")
					->where("rka_rincian.rka", $kode)
					->delete("rka_rincian");	
	}
	
	function delete2($kode){
		return $this->db->join("rka_sub", "rka.kode = rka_sub.rka")
					->where("rka_sub.rka", $kode)
					->delete("rka_sub");	
	}
	
	function delete3($kode){
		return $this->db->delete("rka_rincian", array('rka' => $kode));	
	}
	
	function delete4($kode){
		return $this->db->delete("rka_sub", array('rka' => $kode));	
	}
	
	public function get_list_name($list_id){
        $this->db->where('kode',$list_id);
        $query = $this->db->get('rka_rincian');
        return $query->row()->kode;
    }
	
	public function get_bl($list_id,$active = true){
        $this->db->select('rka.kode as task_id, rka.no');
		$this->db->order_by('rka.kode','DESC');
        $this->db->from('rka');
        $this->db->where('rka.anggaran_kode',$list_id);
        if($active == true){
            $this->db->where('rka.tipe_kode',1);
        } else {
            $this->db->where('rka.tipe_kode',2);
        }
        $query = $this->db->get();
        if($query->num_rows() < 1){
            return FALSE;
        }
        return $query->row();        
    }
	
	public function bl($id){
		$this->db->select('rka.kode as task_id,
		rka.no, rka.program, rka.anggaran_kode,
		skpd.skpd_nama as id_skpd,
		skpd.urusan as id_urusan,
		skpd.skpd_alamat as id_alamat,		
		tipe.no as id_tipe,
		akun.no as id_akun,
		akun.akun_nama as nama_akun,
		anggaran.kegiatan as id_kegiatan,
		anggaran.tahun as id_tahun,
		program.program as id_program,
		kelompok.no as id_kelompok,
		jenis.no as id_jenis,
		obyek.no as id_obyek,
		rincian.no as id_rincian,
		rincian.rincian_nama as nama_rincian');
		$this->db->order_by('rka.kode','DESC');
        $this->db->from('rka');
		$this->db->join('skpd', 'skpd.skpd_kode = rka.skpd');
		$this->db->join('tipe', 'tipe.tipe_kode = rka.sumber');
		$this->db->join('anggaran', 'anggaran.kode = rka.anggaran_kode');
		$this->db->join('program', 'program.kode = rka.program');
		$this->db->join('akun', 'akun.kode = rka.akun');
		$this->db->join('kelompok', 'kelompok.kode = rka.kelompok');
		$this->db->join('jenis', 'jenis.kode = rka.jenis');
		$this->db->join('obyek', 'obyek.kode = rka.obyek');
		$this->db->join('rincian', 'rincian.kode = rka.rincian');
        $this->db->where('rka.kode',$id);
        $query = $this->db->get();
         if($query->num_rows() != 1){
            return FALSE;
        }
        return $query->row();
    }
	
	public function belanja($list_id,$active = true){
        $this->db->select('rka.kode as task_id,		
		rka.no,	tipe.no as id_tipe,
		akun.no as id_akun,
		anggaran.kegiatan as id_kegiatan,
		program.program as id_program,
		kelompok.no as id_kelompok,
		jenis.no as id_jenis,
		obyek.no as id_obyek,
		rincian.no as id_rincian,
		rincian.rincian_nama as nama_rincian');
		$this->db->order_by('rka.kode','ASC');
        $this->db->from('rka');
		$this->db->join('tipe', 'tipe.tipe_kode = rka.sumber');
		$this->db->join('anggaran', 'anggaran.kode = rka.anggaran_kode');
		$this->db->join('program', 'program.kode = rka.program');
		$this->db->join('akun', 'akun.kode = rka.akun');
		$this->db->join('kelompok', 'kelompok.kode = rka.kelompok');
		$this->db->join('jenis', 'jenis.kode = rka.jenis');
		$this->db->join('obyek', 'obyek.kode = rka.obyek');
		$this->db->join('rincian', 'rincian.kode = rka.rincian');
        $this->db->where('rka.anggaran_kode',$list_id);
        if($active == true){
            $this->db->where('rka.tipe_kode',1);
        } else {
            $this->db->where('rka.tipe_kode',2);
        }
        $query = $this->db->get();
        if($query->num_rows() < 1){
            return FALSE;
        }
        return $query->result();        
    }
	
	public function rka($list_id,$active = true){
        $this->db->select('rka.kode as task_id,		
		rka.no,	anggaran.kegiatan as id_kegiatan,
		program.program as id_program,
		tipe.no as id_tipe,
		akun.no as id_akun,
		akun.akun_nama as nama_akun,
		kelompok.no as id_kelompok,
		kelompok.kelompok_nama as nama_kelompok,
		jenis.no as id_jenis,
		jenis.jenis_nama as nama_jenis,
		obyek.nomor as id_obyek,
		obyek.obyek_nama as nama_obyek,
		rincian.nomor as id_rincian,
		rincian.rincian_nama as nama_rincian');
		$this->db->order_by('rka.kode','ASC');
        $this->db->from('rka');
		$this->db->join('tipe', 'tipe.tipe_kode = rka.sumber');
		$this->db->join('anggaran', 'anggaran.kode = rka.anggaran_kode');
		$this->db->join('program', 'program.kode = rka.program');
		$this->db->join('akun', 'akun.kode = rka.akun');
		$this->db->join('kelompok', 'kelompok.kode = rka.kelompok');
		$this->db->join('jenis', 'jenis.kode = rka.jenis');
		$this->db->join('obyek', 'obyek.kode = rka.obyek');
		$this->db->join('rincian', 'rincian.kode = rka.rincian');
        $this->db->where('rka.anggaran_kode',$list_id);
        if($active == true){
            $this->db->where('rka.tipe_kode',1);
        } else {
            $this->db->where('rka.tipe_kode',2);
        }
        $query = $this->db->get();
        if($query->num_rows() < 1){
            return FALSE;
        }
        return $query->result();        
    }
	
	public function get_rka($list_id,$active = true){
        $this->db->select('rka.kode as task_id,		
		rka.no,	anggaran.kegiatan as id_kegiatan,
		program.program as id_program,
		tipe.no as id_tipe,
		akun.no as id_akun,
		akun.akun_nama as nama_akun,
		kelompok.no as id_kelompok,
		kelompok.kelompok_nama as nama_kelompok,
		jenis.no as id_jenis,
		jenis.jenis_nama as nama_jenis,
		obyek.nomor as id_obyek,
		obyek.obyek_nama as nama_obyek,
		rincian.nomor as id_rincian,
		rincian.rincian_nama as nama_rincian');
		$this->db->order_by('rka.kode','ASC');
        $this->db->from('rka');
		$this->db->join('tipe', 'tipe.tipe_kode = rka.sumber');
		$this->db->join('anggaran', 'anggaran.kode = rka.anggaran_kode');
		$this->db->join('program', 'program.kode = rka.program');
		$this->db->join('akun', 'akun.kode = rka.akun');
		$this->db->join('kelompok', 'kelompok.kode = rka.kelompok');
		$this->db->join('jenis', 'jenis.kode = rka.jenis');
		$this->db->join('obyek', 'obyek.kode = rka.obyek');
		$this->db->join('rincian', 'rincian.kode = rka.rincian');
        $this->db->where('rka.anggaran_kode',$list_id);
        if($active == true){
            $this->db->where('rka.tipe_kode',1);
        } else {
            $this->db->where('rka.tipe_kode',2);
        }
        $query = $this->db->get();
        if($query->num_rows() < 1){
            return FALSE;
        }
        return $query->row();        
    }
	
	public function blr($list_id,$active = true){
        $this->db->select('rka_rincian.rka as task_id,		
		rka_rincian.no, rka_rincian.rka, rka_rincian.uraian, rka_rincian.anggaran_kode');
		$this->db->order_by('rka_rincian.kode','DESC');
        $this->db->from('rka_rincian');
        $this->db->where('rka_rincian.rka',$list_id);
        if($active == true){
            $this->db->where('rka_rincian.tipe_kode',1);
        } else {
            $this->db->where('rka_rincian.tipe_kode',2);
        }
        $query = $this->db->get();
        if($query->num_rows() < 1){
            return FALSE;
        }
        return $query->row();        
    }
	
	public function rincian($list_id,$active = true){
        $this->db->select('rka_rincian.kode, rka_rincian.rka as task_id,		
		rka_rincian.no, rka_rincian.rka, rka_rincian.uraian');
		$this->db->order_by('rka_rincian.kode','ASC');
        $this->db->from('rka_rincian');
        $this->db->where('rka_rincian.rka',$list_id);
        if($active == true){
            $this->db->where('rka_rincian.tipe_kode',1);
        } else {
            $this->db->where('rka_rincian.tipe_kode',2);
        }
        $query = $this->db->get();
        if($query->num_rows() < 1){
            return FALSE;
        }
        return $query->result();        
    }
	
	public function get_rincian($list_id,$active = true){
        $this->db->select('rka_rincian.rka as task_id,		
		rka_rincian.no, rka_rincian.rka, rka_rincian.uraian');
		$this->db->order_by('rka_rincian.kode','ASC');
        $this->db->from('rka_rincian');
        $this->db->where('rka_rincian.anggaran_kode',$list_id);
        if($active == true){
            $this->db->where('rka_rincian.tipe_kode',1);
        } else {
            $this->db->where('rka_rincian.tipe_kode',2);
        }
        $query = $this->db->get();
        if($query->num_rows() < 1){
            return FALSE;
        }
        return $query->result();        
    }
	
	public function bls($list_id,$active = true){
        $this->db->select('rka_sub.rka as task_id,
		rka_sub.no, rka_sub.uraian');
		$this->db->order_by('rka_sub.kode','DESC');
        $this->db->from('rka_sub');
        $this->db->where('rka_sub.rka',$list_id);
        if($active == true){
            $this->db->where('rka_sub.tipe_kode',1);
        } else {
            $this->db->where('rka_sub.tipe_kode',2);
        }
        $query = $this->db->get();
        if($query->num_rows() < 1){
            return FALSE;
        }
        return $query->row();        
    }
	
	public function sub($list_id,$active = true){
        $this->db->select('rka_sub.rka as task_id,		
		rka_sub.no, rka_sub.uraian, rka_sub.satuan, 
		rka_sub.volume, rka_sub.harga, rka_sub.total');
		$this->db->order_by('rka_sub.kode','DESC');
        $this->db->from('rka_sub');
        $this->db->where('rka_sub.rka_rincian',$list_id);
        if($active == true){
            $this->db->where('rka_sub.tipe_kode',1);
        } else {
            $this->db->where('rka_sub.tipe_kode',2);
        }
        $query = $this->db->get();
        if($query->num_rows() < 1){
            return FALSE;
        }
        return $query->result();        
    }
	
	public function get_sub($list_id,$active = true){
        $this->db->select('rka_sub.rka as task_id,		
		rka_sub.no, rka_sub.uraian, rka_sub.satuan, 
		rka_sub.volume, rka_sub.harga, rka_sub.total,
		rka_rincian.uraian as id_rka_rincian
		');
		$this->db->order_by('rka_sub.kode','ASC');
        $this->db->from('rka_sub');
		$this->db->join('rka_rincian', 'rka_rincian.kode = rka_sub.rka');
        $this->db->where('rka_sub.anggaran_kode',$list_id);
        if($active == true){
            $this->db->where('rka_sub.tipe_kode',1);
        } else {
            $this->db->where('rka_sub.tipe_kode',2);
        }
        $query = $this->db->get();
        if($query->num_rows() < 1){
            return FALSE;
        }
        return $query->result();        
    }
	
	public function sum($list_id,$active = true){
        $this->db->select('rka_sub.rka as task_id,		
		rka_sub.no, rka_sub.uraian, rka_sub.total');
		$this->db->select_sum('total');
		$this->db->order_by('rka_sub.kode','ASC');
        $this->db->from('rka_sub');
        $this->db->where('rka_sub.rka',$list_id);
        if($active == true){
            $this->db->where('rka_sub.tipe_kode',1);
        } else {
            $this->db->where('rka_sub.tipe_kode',2);
        }
        $query = $this->db->get();
        if($query->num_rows() < 1){
            return FALSE;
        }
        return $query->result();        
    }
	
	public function get_sum($list_id){
		$this->db->select_sum('total');		
		$this->db->from('rka_sub');
		$this->db->where('rka_sub.rka',$list_id);
		$query = $this->db->get();
		return $query->row()->total;
    }
	
	public function jum($list_id,$active = true){
		$where = ('anggaran_kode AND rka');
        $this->db->select('rka_sub.rka as task_id,		
		rka_sub.no, rka_sub.uraian, rka_sub.total');
		$this->db->select_sum('total');
		$this->db->order_by('rka_sub.kode','ASC');
        $this->db->from('rka_sub');
		$this->db->where($where);
        if($active == true){
            $this->db->where('rka_sub.tipe_kode',1);
        } else {
            $this->db->where('rka_sub.tipe_kode',2);
        }
        $query = $this->db->get();
        if($query->num_rows() < 1){
            return FALSE;
        }
        return $query->result();        
    }
	
	public function get($select="", $where=""){
		$this->db->select($select);
		$this->db->from("rka");
		if ($where){$this->db->where($where);}
		$this->db->order_by('rka.kode','DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1){
			return $query->row();
		} else {
			return false;
		}
	}
	
	public function getr($select="", $where=""){
		$this->db->select($select);
		$this->db->from("rka_rincian");
		if ($where){$this->db->where($where);}
		$this->db->order_by('rka_rincian.kode','DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1){
			return $query->row();
		} else {
			return false;
		}
	}
	
	public function gets($select="", $where=""){
		$this->db->select($select);
		$this->db->from("rka_sub");
		if ($where){$this->db->where($where);}
		$this->db->order_by('rka_sub.kode','DESC');
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
		$this->db->from("rka");
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
	
	public function view($list_id,$active = true){
        $this->db->select('program.program as id_program, program.nomor as no_program, skpd.skpd_nama as id_skpd, 
		skpd.urusan as id_urusan, urusan.urusan as nama_urusan, urusan.jenis as jenis_urusan, skpd.skpd_nomor as no_skpd,
		skpd.skpd_alamat as alamat_skpd, skpd.skpd_status as status_skpd, anggaran.kegiatan as id_anggaran, anggaran.nomor as no_anggaran,
		anggaran_bl.hp_ukur as hpu_anggaran, anggaran_bl.hp_target as hpt_anggaran, anggaran_bl.hp_satuan as hps_anggaran,
		anggaran_bl.kh_ukur as khu_anggaran, anggaran_bl.kh_target as kht_anggaran, anggaran_bl.kh_satuan as khs_anggaran,
		anggaran_bl.hk_ukur as hku_anggaran, anggaran_bl.hk_target as hkt_anggaran, anggaran_bl.hk_satuan as hks_anggaran');
        $this->db->from('rka');
		$this->db->join('skpd', 'skpd.skpd_kode = rka.skpd');
		$this->db->join('urusan', 'urusan.kode = rka.urusan');
		$this->db->join('program', 'program.kode = rka.program');
		$this->db->join('anggaran', 'anggaran.kode = rka.anggaran_kode');
		$this->db->join('anggaran_bl', 'anggaran_bl.kode = rka.anggaran_kode');
		$this->db->where('sumber AND skpd');
		$query = $this->db->get('');
        return $query->row();        
    }
	
	public function getOnly($select="", $where="", $like=""){
		$this->db->select($select);
		$this->db->from("rka");
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
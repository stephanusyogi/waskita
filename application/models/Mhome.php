<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhome extends CI_Model {

	function get_data_berita(){
        $this->db->from('tb_berita');
		$this->db->join('tbw_kategori', 'tb_berita.id_kategori = tbw_kategori.id_kategori');
        $this->db->order_by("id_berita", "desc");
        $this->db->limit(3);
		$query = $this->db->get(); 
		return $query->result();
    }

    function get_data_beritan(){
        $this->db->from('tb_berita');
		$this->db->join('tbw_kategori', 'tb_berita.id_kategori = tbw_kategori.id_kategori');
        $this->db->order_by("id_berita", "desc");
        $this->db->limit(5);
		$query = $this->db->get(); 
		return $query->result();
    }
    
    function detailnews($where){
        // $this->db->from('tb_berita');
		// $this->db->join('tbw_kategori', 'tb_berita.id_kategori = tbw_kategori.id_kategori');
        $query = $this->db->get_where('tb_berita', $where); 
		return $query->result();
		// return $this->db->get_where($table, $where);
    }
    
}
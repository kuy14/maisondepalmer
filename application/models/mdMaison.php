<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mdMaison extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function cek_login($table,$where)
    {
        return $this->db->get_where($table,$where);
    }

    public function tampil_admin()
    {
        return $this->db->get('admin');
    }

    public function tampil_slider()
    {
        return $this->db->get('slider');
    }

    public function tampil_produk()
    {
        return $this->db->get('produk');
    }

    public function input_booking($data,$table)
    {
        return $this->db->insert($table,$data);
    }

    public function edit($where,$table)
    {
        return $this->db->get_where($table,$where);
    }

    public function hapus($where,$table)
    {
        $this->db->where($where);
		$this->db->delete($table);
    }

    public function update_data($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function search_produk($name)
	{
        $this->db->where("nama",$name);

		return $this->db->get('produk')->result();
    }

    public function get_produk($nama_url = FALSE)
    {
        if($slug === FALSE){
            $query = $this->db->get('produk');
            return $query->result_array();
        }

        $query = $this->db->get_where('produk', array('url' => $nama_url));
        return $query->row_array();
    }

    public function search($keyword)
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->like('nama',$keyword);

		return $this->db->get()->result();
	}
}

?>
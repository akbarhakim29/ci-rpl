<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model extends CI_Model {

	public function towait($file)
    {
        $sql = "INSERT INTO waitinglist (username, password, npwp, nama_perusahaan, alamat, provinsi,
                kota, kode_pos, telepon, faxsimile, email, nama_pengurus, jabatan, file_upload)
                VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $data = array(
                $this->input->post('username'),
                $this->input->post('password'),
                $this->input->post('npwp'),
                $this->input->post('perusahaan'),
                $this->input->post('alamat'),
                $this->input->post('propinsi'),
                $this->input->post('kota'),
                $this->input->post('pos'),
                $this->input->post('telp'),
                $this->input->post('fax'),
                $this->input->post('email'),
                $this->input->post('pengurus'),
                $this->input->post('jabatan'),
                $file
                );
        $query = $this->db->query($sql, $data);
    }
    
    public function checkMember()
    {
        $sql = "SELECT * FROM member WHERE username=? AND password=?";
        $data = array(
                $this->input->post('username'),
                $this->input->post('password')
                );
        $query = $this->db->query($sql, $data);
        if($query->num_rows() > 0) return "true";
        else return "false";
    }
    
    public function getAllBarang()
    {
        $sql = "SELECT * FROM baranglelang";
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    public function getBarangMember()
    {
        $sql = "SELECT baranglelang.nomorlelang, tab1.username FROM baranglelang
                LEFT OUTER JOIN 
                (SELECT * FROM historimember WHERE username = '".$this->session->userdata('username')."') as tab1
                ON baranglelang.nomorlelang = tab1.nomorlelang";
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    public function get1Barang()
    {
        $sql = "SELECT * FROM baranglelang WHERE nomorlelang = '".$this->input->get('nomorlelang')."'";
        $query = $this->db->query($sql);
        $hasil = $query->row_array();
        return $hasil;
    }
    
    public function get1Member()
    {
        $sql = "SELECT * FROM member WHERE username = ?";
        if($this->session->userdata('mode') == null)
            $data = array($this->session->userdata('username'));
        else
            $data = array($this->input->get('username'));
        $query = $this->db->query($sql, $data);
        $hasil = $query->row_array();
        return $hasil;
    }
    
    public function ikutLelang($gambar)
    {
        $sql = "INSERT INTO historimember (nomorlelang, username, nama_perusahaan, npwp, namalelang, tawaran, desk_tawaran, gambar)
                VALUES (?,?,?,?,?,?,?,?)";
        $user = $this->model->get1Member();
        $data = array(
                $this->input->post('nomorlelang'),
                $user['username'],
                $user['nama_perusahaan'],
                $user['npwp'],
                $this->input->post('namalelang'),
                $this->input->post('tawaran'),
                $this->input->post('desk_tawaran'),
                $gambar
                );
        $query = $this->db->query($sql, $data);
    }
    
    public function getPemenang()
    {
        $sql = "SELECT * FROM historimember WHERE username = '".$this->session->userdata('username')."'
                AND keterangan = 'pemenang'";
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    public function getHistori()
    {
        $sql = "SELECT * FROM historimember WHERE username = '".$this->session->userdata('username')."'";
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    public function simpanProfil($file)
    {
        $sql = "UPDATE member SET password=?, nama_perusahaan=?, alamat=?, provinsi=?,
                kota=?, kode_pos=?, telepon=?, faxsimile=?, email=?, nama_pengurus=?, jabatan=?, file_upload=?
                WHERE username=? AND npwp=?";
        $data = array(
                $this->input->post('password'),
                $this->input->post('perusahaan'),
                $this->input->post('alamat'),
                $this->input->post('propinsi'),
                $this->input->post('kota'),
                $this->input->post('pos'),
                $this->input->post('telp'),
                $this->input->post('fax'),
                $this->input->post('email'),
                $this->input->post('pengurus'),
                $this->input->post('jabatan'),
                $file,
                $this->input->post('username'),
                $this->input->post('npwp')
                );
        $query = $this->db->query($sql, $data);
    }
    
    public function checkAdmin()
    {
        $sql = "SELECT * FROM akun WHERE username=? AND password=?";
        $data = array(
                $this->input->post('username'),
                $this->input->post('password')
                );
        $query = $this->db->query($sql, $data);
        if($query->num_rows() > 0) return "true";
        else return "false";
    }
    
    public function simpanLelang()
    {
        $sql = "INSERT INTO baranglelang (nomorlelang, namalelang, deskripsi, hargalelang, waktuawal, waktuakhir)
                VALUES (?,?,?,?,?,?)";
        $data = array(
                $this->input->post('nomor'),
                $this->input->post('namalelang'),
                $this->input->post('deskripsi'),
                $this->input->post('harga'),
                $this->input->post('from'),
                $this->input->post('to')
                );
        $query = $this->db->query($sql, $data);
    }
    
    public function getRanking()
    {
        $sql = "SELECT * FROM historimember WHERE nomorlelang = '".$this->input->get('nomorlelang')."'
                ORDER BY (tawaran+0)";
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    public function pilihPemenang()
    {
        $sql = "UPDATE historimember SET keterangan='pemenang'
                WHERE username=? AND nomorlelang=?";
        $data = array(
                $this->input->get('username'),
                $this->input->get('nomorlelang')
                );
        $query = $this->db->query($sql, $data);
    }
    
    public function getWaitingList()
    {
        $sql = "SELECT * FROM waitinglist";
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    public function get1WL()
    {
        $sql = "SELECT * FROM waitinglist WHERE username = '".$this->input->get('username')."'";
        $query = $this->db->query($sql);
        $hasil = $query->row_array();
        return $hasil;
    }
    
    public function accept()
    {
        $sql = "INSERT INTO member
                (username, password, npwp, nama_perusahaan, alamat, provinsi, kota, kode_pos,
                telepon, faxsimile, email, nama_pengurus, jabatan, file_upload) 
                SELECT * FROM waitinglist WHERE username = '".$this->input->get('username')."'";
        $query = $this->db->query($sql);
        $sql = "DELETE FROM waitinglist WHERE username = '".$this->input->get('username')."'";
        $query = $this->db->query($sql);
    }
    
    public function decline()
    {
        $sql = "DELETE FROM waitinglist WHERE username = '".$this->input->get('username')."'";
        $query = $this->db->query($sql);
    }
    
    public function getAllMember()
    {
        $sql = "SELECT * FROM member";
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    public function hapus()
    {
        $sql = "DELETE FROM member WHERE username = '".$this->input->get('username')."'";
        $query = $this->db->query($sql);
    }
}
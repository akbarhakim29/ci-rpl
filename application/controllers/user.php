<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
    {
        $data['sts'] = $this->session->userdata('status');
        $data['username'] = $this->session->userdata('username');
        
        $this->load->view('header1', $data);
        $this->load->view('home');
        $this->load->view('footer');
    }
    
    public function registrasi()
    {
        $data['sts'] = $this->session->userdata('status');
        $data['username'] = $this->session->userdata('username');
        
        $this->load->view('header1', $data);
        $this->load->view('register1');
        $this->load->view('footer');
    }
    
    public function towait()
    {
        if($this->input->post('password') == $this->input->post('konfirmpass'))
        {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'rar|zip';
            $config['file_name'] = 'file_'.$this->input->post('username');
            $config['max_size'] = '200000';
            
            $this->load->library('upload', $config);
            
            if ( ! $this->upload->do_upload())
            {
                echo $this->upload->display_errors();
                //redirect("user/registrasi");
            }
            else
            {
                $upload_data = $this->upload->data();
                foreach($upload_data as $item => $value)
                {
                    if($item == "full_path") $file = $value;
                }
                $this->model->towait($file);
                redirect("user/index");
            }
        }
        else
        {
            redirect("user/registrasi");
        }
    }
    
    public function login()
    {
        $username = $this->input->post('username');
        $validity = $this->model->checkMember();
        if($validity == "true")
        {
            $this->session->set_userdata('status','true');
            $this->session->set_userdata('username',$username);
        }
        else
        {
            $this->session->set_userdata('status','false');
        }
        redirect("user/index");
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect("user/index");
    }
    
    public function howto()
    {
        $data['sts'] = $this->session->userdata('status');
        $data['username'] = $this->session->userdata('username');
        
        $this->load->view('header1', $data);
        $this->load->view('howto');
        $this->load->view('footer');
    }
    
    public function syarat()
    {
        $data['sts'] = $this->session->userdata('status');
        $data['username'] = $this->session->userdata('username');
        
        $this->load->view('header1', $data);
        $this->load->view('syarat');
        $this->load->view('footer');
    }
    
    public function daftarlelang()
    {
        $data['sts'] = $this->session->userdata('status');
        $data['username'] = $this->session->userdata('username');
        
        $this->load->view('header1', $data);
        $data['query'] = $this->model->getAllBarang();
        if($data['sts'] == "true")
            $data['query2'] = $this->model->getBarangMember();
        else
            $data['query2'] = $data['query'];
        $this->load->view('daftarlelang', $data);
        $this->load->view('footer');
    }
    
    public function policy()
    {
        $data['sts'] = $this->session->userdata('status');
        $data['username'] = $this->session->userdata('username');
        
        $this->load->view('header1', $data);
        $this->load->view('policy');
        $this->load->view('footer');
    }
    
    public function aboutus()
    {
        $data['sts'] = $this->session->userdata('status');
        $data['username'] = $this->session->userdata('username');
        
        $this->load->view('header1', $data);
        $this->load->view('aboutus');
        $this->load->view('footer');
    }
    
    public function deskripsi()
    {
        $data['sts'] = $this->session->userdata('status');
        $data['username'] = $this->session->userdata('username');
        
        $this->load->view('header1', $data);
        $data1 = $this->model->get1Barang();
        $this->load->view('deskripsi', $data1);
        $this->load->view('footer');
    }
    
    public function pilihlelang()
    {
        $data['sts'] = $this->session->userdata('status');
        $data['username'] = $this->session->userdata('username');
        
        $this->load->view('header1', $data);
        $data1 = $this->model->get1Barang();
        $this->load->view('ikutlelang', $data1);
        $this->load->view('footer');
    }
    
    public function ikutlelang()
    {
        $config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = 'gambar_'.$this->input->post('nomorlelang')."_".$this->session->userdata('username');
        $config['max_size'] = '2000';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			echo $this->upload->display_errors();
            //redirect("user/pilihlelang?nomorlelang=".$this->input->post('nomorlelang'));
		}
		else
		{
			$upload_data = $this->upload->data();
            foreach($upload_data as $item => $value)
            {
                if($item == "full_path") $gambar = $value;
            }
            $this->model->ikutLelang($gambar);
            redirect("user/daftarlelang");
		}
    }
    
    public function pengumuman()
    {
        $data['sts'] = $this->session->userdata('status');
        $data['username'] = $this->session->userdata('username');
        
        $this->load->view('header1', $data);
        $data1['query'] = $this->model->getPemenang();
        $this->load->view('pengumuman', $data1);
        $this->load->view('footer');
    }
    
    public function histori()
    {
        $data['sts'] = $this->session->userdata('status');
        $data['username'] = $this->session->userdata('username');
        
        $this->load->view('header1', $data);
        $data1['query'] = $this->model->getHistori();
        $this->load->view('historilelang', $data1);
        $this->load->view('footer');
    }
    
    public function updateprofil()
    {
        $data['sts'] = $this->session->userdata('status');
        $data['username'] = $this->session->userdata('username');
        
        $this->load->view('header1', $data);
        $data1 = $this->model->get1Member();
        $this->load->view('updateprofil', $data1);
        $this->load->view('footer');
    }
    
    public function simpanprofil()
    {
        if($this->input->post('password') == $this->input->post('konfirmpass'))
        {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'rar|zip';
            $config['file_name'] = 'file_'.$this->input->post('username');
            $config['max_size'] = '200000';
            
            $this->load->library('upload', $config);
            
            if ( ! $this->upload->do_upload())
            {
                $file = $this->input->post('oldfile');
            }
            else
            {
                $upload_data = $this->upload->data();
                foreach($upload_data as $item => $value)
                {
                    if($item == "full_path") $file = $value;
                }
            }
            $this->model->simpanProfil($file);
            redirect("user/index");
        }
        else
        {
            redirect("user/updateprofil");
        }
    }
}
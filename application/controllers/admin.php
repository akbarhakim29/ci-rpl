<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$sts = $this->session->userdata('status');
        if(!isset($sts) || $sts != "true")
        {
            $this->load->view('header3');
            $this->load->view('admin');
            $this->load->view('footer3');
        }
        else
            echo "Anda sudah login";
	}
    
    public function admlogin()
    {
        $validity = $this->model->checkAdmin();
        if($validity == "true")
        {
            $this->session->set_userdata('status','true');
            if($this->input->post('username') == "admin")
                $this->session->set_userdata('mode','admin');
            else
            {
                $this->session->set_userdata('username',$username);
                $this->session->set_userdata('mode','staff');
            }
            redirect("admin/admindex");
        }
        else
        {
            $this->session->set_userdata('status','false');
            redirect("admin");
        }
    }
    
    public function admlogout()
    {
        $this->session->sess_destroy();
        redirect("admin");
    }
    
    public function admindex()
    {
        $sts = $this->session->userdata('status');
        if($sts == "true")
        {
        $this->load->view('header2');
        $this->load->view('adminhome');
        $this->load->view('footer');
        }
        else echo "Anda belum login";
    }
    
    public function buatlelang()
    {
        $sts = $this->session->userdata('status');
        if($sts == "true")
        {
        $this->load->view('header2');
        $this->load->view('buatlelang');
        $this->load->view('footer');
        }
        else echo "Anda belum login";
    }
    
    public function simpanlelang()
    {
        $this->model->simpanLelang();
        redirect("admin/admindex");
    }
    
    public function lihatlelang()
    {
        $sts = $this->session->userdata('status');
        if($sts == "true")
        {
        $this->load->view('header2');
        $data['query'] = $this->model->getAllBarang();
        $this->load->view('lihatlelang', $data);
        $this->load->view('footer');
        }
        else echo "Anda belum login";
    }
    
    public function admdeskripsi()
    {
        $sts = $this->session->userdata('status');
        if($sts == "true")
        {
        $this->load->view('header2');
        $data1 = $this->model->get1Barang();
        $this->load->view('deskripsi', $data1);
        $this->load->view('footer');
        }
        else echo "Anda belum login";
    }
    
    public function ranking()
    {
        $sts = $this->session->userdata('status');
        if($sts == "true")
        {
        $this->load->view('header2');
        $data['query'] = $this->model->getRanking();
        $this->load->view('ranking', $data);
        $this->load->view('footer');
        }
        else echo "Anda belum login";
    }
    
    public function member()
    {
        $sts = $this->session->userdata('status');
        if($sts == "true")
        {
        $this->load->view('header2');
        $data = $this->model->get1Member();
        $this->load->view('member', $data);
        $this->load->view('footer');
        }
        else echo "Anda belum login";
    }
    
    public function pilihpemenang()
    {
        $this->model->pilihPemenang();
        redirect("admin/ranking?nomorlelang=".$this->input->get('nomorlelang'));
    }
    
    public function waitinglist()
    {
        $sts = $this->session->userdata('status');
        if($sts == "true")
        {
        $this->load->view('header2');
        $data['query'] = $this->model->getWaitingList();
        $this->load->view('waitingmember', $data);
        $this->load->view('footer');
        }
        else echo "Anda belum login";
    }
    
    public function detailw()
    {
        $sts = $this->session->userdata('status');
        if($sts == "true")
        {
        $this->load->view('header2');
        $data = $this->model->get1WL();
        $this->load->view('detailwm', $data);
        $this->load->view('footer');
        }
        else echo "Anda belum login";
    }
    
    public function accept()
    {
        $this->model->accept();
        redirect("admin/waitinglist");
    }
    
    public function decline()
    {
        $this->model->decline();
        redirect("admin/waitinglist");
    }
    
    public function lihatmember()
    {
        $sts = $this->session->userdata('status');
        if($sts == "true")
        {
        $data['mode'] = $this->session->userdata('mode');
        
        $this->load->view('header2');
        $data['query'] = $this->model->getAllMember();
        $this->load->view('lihatmember', $data);
        $this->load->view('footer');
        }
        else echo "Anda belum login";
    }
    
    public function detailm()
    {
        $sts = $this->session->userdata('status');
        if($sts == "true")
        {
        $this->load->view('header2');
        $data = $this->model->get1Member();
        $this->load->view('detailm', $data);
        $this->load->view('footer');
        }
        else echo "Anda belum login";
    }
    
    public function hapus()
    {
        $this->model->hapus();
        redirect("admin/lihatmember");
    }
}
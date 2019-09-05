<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminLogin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mdMaison');
    }

    public function index()
    {
        $this->load->view('admin/login');
    }

    public function login_proses()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password);
        
        $cek = $this->mdMaison->cek_login("admin",$where)->num_rows();

        if ($cek > 0) {
            $data_session = array('status' => 'Login');

            $this->session->set_userdata($data_session);

            redirect('ConfigAdmin');
        } else {
            echo "<script language='javascript'>";
		    echo "alert('username dan atau password salah!');";
		    echo "</script>";
		    echo "<script language='javascript'>";
		    echo "window.location = 'index';";
		    echo "</script>";
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('AdminLogin'));
    }
}

?>
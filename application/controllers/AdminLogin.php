<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminLogin extends CI_Controller
{
    public function __construck()
    {
        parent::__construck();
        $this->load-model('dbMaison');
    }

    public function index()
    {
        $This->load->model('admin/login');
    }

    public function login_proses()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' = $username,
            'password' = $password);

        $cek = $this->dbModel->cek_login("admin",$where)->num_rows();

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
}

?>
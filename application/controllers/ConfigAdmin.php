<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConfigAdmin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mdMaison');
        $this->load->helper(array('form','url'));
        $this->load->library('upload');

        if($this->session->userdata('status') != "Login"){
            redirect(base_url('AdminLogin'));
        }
    }

    public function index()
    {
        $data['slider'] = $this->mdMaison->tampil_slider();

        $this->load->view('admin/v_slider_admin',$data);
    }

    public function edit_gambar($id)
    {
        $i = $this->input;
        $slide1 = $i->post('slide1');
        $slide2 = $i->post('slide2');
        $slide3 = $i->post('slide3');
        $slide4 = $i->post('slide4');

        $where = array('id_slider' => $id);
        $data['slider'] = $this->mdMaison->edit($where,'slider')->result();

        if (isset($slide1)) {
            $this->load->view('admin/v_slider_edit',$data);
        } if (isset($slide2)) {
            $this->load->view('admin/v_slider_edit2',$data);
        } if (isset($slide3)) {
            $this->load->view('admin/v_slider_edit3',$data);
        } if (isset($slide4)) {
            $this->load->view('admin/v_slider_edit4',$data);
        }
        
    }

    public function update_gambar()
    {
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'png|jpeg|jpg';

        $this->upload->initialize($config); 

        $i = $this->input;
        $id = $i->post('id');
        $where = array('id_slider' => $id);

        $save1 = $i->post('save1');
        $save2 = $i->post('save2');
        $save3 = $i->post('save3');
        $save4 = $i->post('save4');

        $title1 = $i->post('title1');
        $gambars1 = $i->post('gambars1');
        $title2 = $i->post('title2');
        $gambars2 = $i->post('gambars2');
        $title3 = $i->post('title3');
        $gambars3 = $i->post('gambars3');
        $title4 = $i->post('title4');
        $gambars4 = $i->post('gambars4');

        if (isset($save1)) {              
            if(!empty($_FILES['gbr1']['name']))
            {    
                if ($this->upload->do_upload('gbr1')) {
                    $gbr1 = $this->upload->data();
                    $gambar1 = $gbr1['file_name'];

                    $data = array(
                        'title1' => $title1,
                        'gambar1' => $gambar1);
                    
                    $this->mdMaison->update_data($where,$data,'slider');
                    if($gambars1 != "")
                    {
                        unlink('./assets/images/'.$gambars1);
                    }
                    redirect('ConfigAdmin');
                }
                    echo '<script language="javascript">';
				    echo 'alert("Gagal mengubah gambar, pastikan gambar yang anda masukkan benar :(")';
                    echo '</script>';
            }
        } else if (isset($save2)) {
            if(!empty($_FILES['gbr2']['name']))
            {                
                if ($this->upload->do_upload('gbr2')) {
                    $gbr2 = $this->upload->data();
                    $gambar2 = $gbr2['file_name'];

                    $data = array(
                        'title2' => $title2,
                        'gambar2' => $gambar2);
                    
                    $this->mdMaison->update_data($where,$data,'slider');
                    
                    if($gambars2 != "")
                    {
                        unlink('./assets/images/'.$gambars2);
                    }
                    redirect('ConfigAdmin');
                }
                    echo '<script language="javascript">';
				    echo 'alert("Gagal mengubah gambar, pastikan gambar yang anda masukkan benar :(")';
                    echo '</script>';
            }
        } else if (isset($save3)) {
            if(!empty($_FILES['gbr3']['name']))
            {      
                if ($this->upload->do_upload('gbr3')) {
                    $gbr3 = $this->upload->data();
                    $gambar3 = $gbr3['file_name'];

                    $data = array(
                        'title3' => $title3,
                        'gambar3' => $gambar3);
                    
                    $this->mdMaison->update_data($where,$data,'slider');
                    
                    if($gambars3 != "")
                    {
                        unlink('./assets/images/'.$gambars3);
                    }
                    redirect('ConfigAdmin');
                }
                    echo '<script language="javascript">';
				    echo 'alert("Gagal mengubah gambar, pastikan gambar yang anda masukkan benar :(")';
                    echo '</script>';
            }
        } else if (isset($save4)) {
            if(!empty($_FILES['gbr4']['name']))
            {      
                if ($this->upload->do_upload('gbr4')) {
                    $gbr4 = $this->upload->data();
                    $gambar4 = $gbr4['file_name'];

                    $data = array(
                        'title4' => $title4,
                        'gambar4' => $gambar4);
                    
                    $this->mdMaison->update_data($where,$data,'slider');
                    
                    if($gambars4 != "")
                    {
                        unlink('./assets/images/'.$gambars4);
                    }
                    redirect('ConfigAdmin');
                }
                    echo '<script language="javascript">';
				    echo 'alert("Gagal mengubah gambar, pastikan gambar yang anda masukkan benar :(")';
                    echo '</script>';
            }
        }
    }
}
?>
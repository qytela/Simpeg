<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Karyawan_model', 'karyawan');
        if ($this->session->userdata('nik') !== null) {
            redirect(base_url().'karyawan');
        }
    }
    
    public function messageAlert($type, $title) {
        $messageAlert = "
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000
        });
    
        Toast.fire({
            type: '".$type."',
            title: '".$title."'
        });
        ";
        return $messageAlert;
    }

    public function login() {
        $this->load->view('admin/Login');
    }

    public function loginKaryawan() {
        $nik = $this->input->post('nik');
        $password = md5($this->input->post('password'));
        if ($nik && $password) {
            $loginKaryawan = $this->karyawan->loginKaryawan($nik, $password);
            if ($loginKaryawan[0]->id !== null) {
                $getDataKaryawan = $this->karyawan->getDataKaryawanByNik($nik);
                $this->session->set_userdata('id', $getDataKaryawan[0]->id);
                $this->session->set_userdata('name', $getDataKaryawan[0]->name);
                $this->session->set_userdata('nik', $nik);
                $this->session->set_userdata('level', $loginKaryawan[0]->level);
                redirect(base_url().'karyawan');
            }else{
                $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Login gagal'));
                redirect();
            }
        }else{
            $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Login gagal'));
            redirect();
        }
    }
}
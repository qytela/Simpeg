<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getAllDataKaryawan() {
        return $this->db->get('data_karyawan')->result();
    }

    public function getDataKaryawanById($id) {
        return $this->db->get_where('data_karyawan', array('id' => $id))->result();
    }

    public function getDataKaryawanByNik($nik) {
        return $this->db->get_where('data_karyawan', array('nik' => $nik))->result();
    }

    public function getAbsensiKaryawanById($id) {
        return $this->db->get_where('absensi_karyawan', array('id' => $id))->result();
    }

    public function getAbsensiKaryawanByName($name) {
        return $this->db->get_where('absensi_karyawan', array('nama' => $name))->result();
    }

    public function getAlasanKaryawanByName($name) {
        return $this->db->order_by('id', 'DESC')->get_where('alasan_karyawan', array('nama' => $name))->result();
    }

    public function changeInfoKaryawanById($id, $data) {
        return $this->db->set($data)->where('id', $id)->update('data_karyawan');
    }

    public function addDataKaryawan($data) {
        return $this->db->insert('data_karyawan', $data);
    }

    public function addAbsensiKaryawan($data) {
        return $this->db->insert('absensi_karyawan', $data);
    }

    public function updateAbsensiKaryawan($id, $kehadiran, $option, $jumlah) {
        return $this->db->set($kehadiran, $kehadiran.$option.$jumlah, FALSE)->where('id', $id)->update('absensi_karyawan');
    }

    public function addAlasanKaryawan($name, $alasan, $date) {
        return $this->db->insert('alasan_karyawan', array('nama' => $name, 'alasan' => $alasan, 'tanggal' => $date));
    }

    public function resetAbsen() {
        return $this->db->set('absen', '0', FALSE)->update('absensi_karyawan');
    }

    public function deleteKaryawan($id) {
        return $this->db->delete('data_karyawan', array('id' => $id));
    }
    
    public function loginKaryawan($nik, $password) {
        return $this->db->where('nik', $nik)->where('password', $password)->get('users_karyawan')->result();
    }

    public function addUserKaryawan($nik, $password) {
        return $this->db->insert('users_karyawan', array('nik' => $nik, 'password' => $password, 'level' => 'Karyawan'));
    }

    public function settingAbsensi($start, $end) {
        return $this->db->set('mulai_absen', $start)->set('selesai_absen', $end)->update('setting_absensi');
    }

    public function getSettingAbsensi() {
        return $this->db->get('setting_absensi')->result();
    }

    public function absenHarian($id) {
        return $this->db->set('absen', '1')->where('id', $id)->update('absensi_karyawan');
    }

    public function addHistory($name, $info, $tanggal) {
        return $this->db->insert('history_karyawan', array('nama' => $name, 'info' => $info, 'tanggal' => $tanggal));
    }

    public function uploadImage() {
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['remove_space'] = TRUE;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('upload_image')) {
            return array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
        }else{
            return array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
        }
    }
}
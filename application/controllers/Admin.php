<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->model('M_admin');

        if($this->session->userdata('status_adm') != 'login') {
			redirect("loginadm");
		}
    }

    public function index()
    {
        $title['title'] = 'Admin';
        $this->load->view('modul/head', $title);
        $this->load->view('materialize/style');
        $this->load->view('admin/dashboard');
        $this->load->view("materialize/script");
    }

    public function datamhs()
    {
        $title['title'] = 'Admin';
        $data['datamhs'] = $this->M_admin->tampil_data("mahasiswa");
        $this->load->view('modul/head', $title);
        $this->load->view('materialize/style');
        $this->load->view('admin/data_mahasiswa', $data);
        $this->load->view("materialize/script");
    }

    public function editdatamhs($id = null)
    {
        if(is_null($id)){
            $this->session->set_flashdata('message_id', '<div class="materialert pink">
		    <div class="material-icons">error_outline</div>
		    Data tidak ada
		</div>');
            redirect("admin/datamhs");
        } else {
            $where = array('npm' => $id);
            $data['title'] = 'Admin';
            $data['datamhs'] = $this->M_admin->edit_data("mahasiswa",$where)->row_array();
            $this->session->set_userdata($where);

            $this->load->view('modul/head', $data);
            $this->load->view('materialize/style');
            $this->load->view('admin/edit_data', $id);
            $this->load->view("materialize/script");
        }
    }

    public function updateDatamhs()
    {
        // $npm = $this->input->post("npm");
        $npm = $this->session->userdata("npm");
        $nama = $this->input->post("nama");
        $jurusan = $this->input->post("prodi");
        $kelas = $this->input->post("kelas");

        $data = array(
            'nama' => $nama,
            'jurusan' => $jurusan,
            'kelas' => $kelas
        );

        $where = array(
            'npm' => $npm
        );
        $this->M_admin->update('mahasiswa', $data, $where);
        redirect("admin/datamhs");
    }

    public function tambahMahasiswa()
    {
        $npm = $this->input->post("npm");
        $nama = $this->input->post("nama");
        $jurusan = $this->input->post("prodi");
        $kelas = $this->input->post("kelas");

        $data = array(
            'npm' => $npm,
            'nama' => $nama,
            'jurusan' => $jurusan,
            'kelas' => $kelas
        );

        $this->M_admin->tambah_data("mahasiswa", $data);
        $this->session->set_flashdata('message_hapus', '<div class="materialert teal accent-3" style="height:50px;">
                <div class="material-icons">check</div>
                Data berhasil diunggah
            </div>');
        redirect("admin");
    }


    public function hapus($id)
    {
        $where = array('npm' => $id);
        $this->M_admin->delete_data('mahasiswa', $where);
        $this->session->set_flashdata("message_hapus", '<div class="alert alert-succes" role="alert">Data berhasil dihapus</div>');
        redirect("admin/datamhs");
    }
}

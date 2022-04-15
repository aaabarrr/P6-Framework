<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Mahasiswa extends CI_Controller
{

    public function index()
    {


        $this->load->model('mahasiswa_model', 'mhs1');
        $this->mhs1->id = 1;
        $this->mhs1->nim = '010001';
        $this->mhs1->nama = 'Faiz Fikri';
        $this->mhs1->gender = 'L';
        $this->mhs1->ipk = 3.85;

        $this->load->model('mahasiswa_model', 'mhs2');

        $this->mhs2->id = 2;
        $this->mhs2->nim = '453423';
        $this->mhs2->nama = 'Budi Setiawan';
        $this->mhs2->gender = 'L';
        $this->mhs2->ipk = 3.65;

        $list_mahasiswa = [$this->mhs1, $this->mhs2];
        $data['list_mahasiswa'] = $list_mahasiswa;
        $this->load->view('view_mahasiswa', $data);
    }
}

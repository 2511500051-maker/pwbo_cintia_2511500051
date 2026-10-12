<?php

class home extends Controller {
    public function index() {

        $data['judul'] = 'Home';
        $data['nama'] = 'Diva';
        $data['pekerjaan'] = 'Mahasiswa';

        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
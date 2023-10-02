<?php

class Home extends Controller {
    public function index()
    {
        $data['nama'] = 'Aria';
        $data['pekerjaan'] = 'Pelajar';
        $data['judul'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer', $data);
    }

}


?>
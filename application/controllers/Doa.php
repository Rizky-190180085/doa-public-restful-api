<?php

class Doa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Doa_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['Hasil'] = $this->Doa_model->getAllDoa();
        $this->load->view('Doa/index', $data);
    }



    public function lihat($id)
    {
        $data['Hasil'] = $this->Doa_model->getDoaById($id);
        $this->load->view('Doa/lihat', $data);


    }

}

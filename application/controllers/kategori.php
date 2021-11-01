<?php

class Kategori extends CI_Controller
{
    public function totebag()
    {
        $data['totebag'] = $this->model_kategori->data_totebag()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('totebag', $data);
        $this->load->view('templates/footer');
    }

    public function slingbag()
    {
        $data['slingbag'] = $this->model_kategori->data_slingbag()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('slingbag', $data);
        $this->load->view('templates/footer');
    }

    public function clutch()
    {
        $data['clutch'] = $this->model_kategori->data_clutch()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('clutch', $data);
        $this->load->view('templates/footer');
    }

    public function pouch()
    {
        $data['pouch'] = $this->model_kategori->data_pouch()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pouch', $data);
        $this->load->view('templates/footer');
    }

    public function laptopbag()
    {
        $data['laptopbag'] = $this->model_kategori->data_laptopbag()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('laptopbag', $data);
        $this->load->view('templates/footer');
    }
}

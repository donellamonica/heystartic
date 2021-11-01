<?php

class Model_kategori extends CI_Model
{

    public function data_totebag()
    {
        return $this->db->get_where("barang", array('kategori' => 'totebag'));
    }

    public function data_slingbag()
    {
        return $this->db->get_where("barang", array('kategori' => 'slingbag'));
    }

    public function data_clutch()
    {
        return $this->db->get_where("barang", array('kategori' => 'clutch'));
    }

    public function data_pouch()
    {
        return $this->db->get_where("barang", array('kategori' => 'pouch'));
    }

    public function data_laptopbag()
    {
        return $this->db->get_where("barang", array('kategori' => 'laptopbag'));
    }
}

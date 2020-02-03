<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('Data/index');
        $this->load->view('template/footer');
    }

    public function User_profile()
    {
        $this->load->view('template/header');
        $this->load->view('Data/profile');
        $this->load->view('template/footer');
    }
}

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
        $url = "https://randomuser.me/api/";
        $get_url = file_get_contents($url);
        $data = json_decode($get_url, true);
        $data_array = [
            'name' => $data['results'][0]['name']['first'],
            'gender' => $data['results'][0]['gender'],
            'address' => $data['results'][0]['location']['city'],
            'state' => $data['results'][0]['location']['state'],
            'country' => $data['results'][0]['location']['country'],
            'email' => $data['results'][0]['email'],
            'phone' => $data['results'][0]['phone'],
            'picture' => $data['results'][0]['picture']['large']
        ];

        $this->load->view('template/header');
        $this->load->view('Data/profile', $data_array);
        $this->load->view('template/footer');
    }
}

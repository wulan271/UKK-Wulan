<?php

class Room extends CI_Controller
{
    function index()
    {
        $this->load->view('partial_home/header');
        $this->load->view('partial_home/navigasi');
        $this->load->view('partial_home/modals');
        $this->load->view('partial_home/js');
        $this->load->view('content/room');
        $this->load->view('partial_home/footer');
    }
}

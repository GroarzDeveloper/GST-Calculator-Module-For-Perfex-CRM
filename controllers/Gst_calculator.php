<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Gst_calculator extends AdminController
{
    public function index()
    {
        $this->load->view('gst_calculator/sidebar');
    }
}

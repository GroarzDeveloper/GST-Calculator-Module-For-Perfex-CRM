<?php

defined('BASEPATH') or exit('No direct script access allowed');

/*
Module Name: GST Calculator
Description: GST Calculator popup from top navbar
Version: 1.0.0
Author: Groarz
*/

hooks()->add_action('admin_init', 'gst_calculator_init');
hooks()->add_action('app_admin_footer', 'gst_calculator_load_modal');
hooks()->add_action('app_admin_head', 'gst_calculator_assets');

function gst_calculator_init()
{
    $CI = &get_instance();

    // Sidebar
    $CI->app_menu->add_sidebar_menu_item('gst-calculator', [
        'name'     => 'GST Calculator',
        'href'     => admin_url('gst_calculator'),
        'icon'     => 'fa fa-calculator',
        'position' => 40,
    ]);

    // // Top navbar icon
    // $CI->app_menu->add_top_right_menu_item('gst-calculator-icon', [
    //     'name'     => '<i class="fa fa-calculator"></i>',
    //     'href'     => '#',
    //     'position' => 5,
    //     'attributes' => [
    //         'onclick' => 'openGSTCalculator(); return false;',
    //         'title'   => 'GST Calculator',
    //     ],
    // ]);
}

function gst_calculator_assets()
{
    echo '<link href="' . module_dir_url('gst_calculator', 'assets/css/gst.css') . '" rel="stylesheet">';
    echo '<script src="' . module_dir_url('gst_calculator', 'assets/js/gst.js') . '"></script>';
}

function gst_calculator_load_modal()
{
    $CI = &get_instance();
    echo $CI->load->view('gst_calculator/modal', [], true);
}

/**
 * Add navbar button using the correct hook for top navbar.
 */
hooks()->add_action('admin_navbar_start', 'gst_calculator_add_navbar_button');

function gst_calculator_add_navbar_button()
{
    // Echo the <li> directly into the navbar-right ul
    echo '<li class="header-navbar-item"><a href="#" onclick="openGSTCalculator()" title="GST Calculator"><i class="fa fa-calculator"></i></a></li>';
}
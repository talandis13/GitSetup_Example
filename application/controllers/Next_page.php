<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class next_page extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->load->view('next_page');
    }

    public function add_numbers($num1, $num2) {
        //echo "<h3>".($num1 + $num2)."</h3>";
        
        $data =[ 'answer' => $num1 + $num2 ];
        
        $this->load->view('next_page', $data);
    }
}
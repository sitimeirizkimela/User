<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Description of General
 *
 * 
 */
class General {

    //put your code here
    var $ci;

    function __construct() {
        $this->ci = &get_instance();
    }


    function isAdmin() {
        if ($this->ci->session->userdata('type') == '1') {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    

    function checkAdmin() {
        if (($this->isAdmin()) != TRUE) {
            $this->ci->session->set_flashdata('error', 'Maaf, Anda tidak memiliki hak akses sebagai admin');
            redirect('user_controller/index');
        }
    }

    
    
}

?>

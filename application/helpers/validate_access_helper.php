<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    if(!function_exists('validation_session_open'))
    {
        function validation_session_open()
        {
            $ci =& get_instance();
            if (empty($ci->session->userdata('agent')) or is_null($ci->session->userdata('agent'))) {
                return FALSE;
            } else {
                return TRUE;
            }
        }
    }
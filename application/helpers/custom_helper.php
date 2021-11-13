<?php

function setFlashData($error, $message, $url) {
    $ci = get_instance();
    $ci->load->library('session');
    $ci->session->set_flashdata($error,$message);
    redirect($url);
}
    function adminLoggedin() {
    $ci = get_instance();
    $ci->load->library('session');
        if ($ci->session->userdata('aId')){
            return TRUE;
        }else {
            return FALSE;
        }
}

?>
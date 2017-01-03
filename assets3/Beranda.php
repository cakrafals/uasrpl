<?php
      class Beranda extends MY_Controller
      {
            function __construct(){
              parent::__construct();
              $this->load->module('login');
                      if($this->session->userdata('logged_in')<>0){
                        }
            }

          function index(){

              $data['content_view']='beranda/view';
              $this->template->view($data);
          }

}

?>

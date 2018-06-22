<?php

class Profile extends CI_Controller {

    public function user_profile()
    {
        $this->load->view('user_profile');
    }

    public function telephone()
    {
        $this->load->view('telephoneView');
    }

}
?>

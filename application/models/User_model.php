<?php

class login_model extends CI_model {

    public function contacts()
    {
        $this->db->select('*');
        $this->db->from('user_data');
        if ($query = $this->db->get()) {
            return $query->row_array();
        } else {
            return false;
        }
    }

}
?>

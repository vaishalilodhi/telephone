<?php

class login_model extends CI_model {

    public function user_data($user)
    {
        $this->db->insert('user', $user);
    }

    public function login_user($uname, $pass)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $uname);
        $this->db->where('password', $pass);
        if ($query = $this->db->get()) {
            return $query->row_array();
        } else {
            return false;
        }
    }

    public function user_check($uname)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $uname);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return false;
        } else {
            return true;
        }
    }

}
?>

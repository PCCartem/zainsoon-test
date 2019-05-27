<?php
class Form_model extends CI_Model {

    public $number;
    public $email;

    public function insert_form($number, $email)
    {
        $this->email  = $email;
        $this->number  = $number;

        $this->db->insert('form', $this);
    }

}
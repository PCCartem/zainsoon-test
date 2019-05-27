<?php
class Main_model extends CI_Model {

    public $fio;
    public $number;
    public $email;
    public $message;

    public function insert_main($fio, $email, $number, $message)
    {
        $this->fio  = $fio;
        $this->email  = $email;
        $this->number  = $number;
        $this->message  = $message;

        $this->db->insert('main', $this);
    }

}
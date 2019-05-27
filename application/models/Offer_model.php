<?php
class Offer_model extends CI_Model {

    public $name;

    public function insert_offer($name)
    {
        $this->name = $name;

        $this->db->insert('offers', $this);
    }
}
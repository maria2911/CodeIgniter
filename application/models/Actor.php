<?php
class Actor extends CI_Model {
    // list all actors
    function listing() 
    {
        $query = $this->db->get('actor');
        return $query->result_array();
    }

    function insert($data)
    {
        $this->db->insert('actor',$data);
    }

}
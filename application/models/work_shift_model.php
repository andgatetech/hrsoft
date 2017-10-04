<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of company_model
 *
 * @author khorshed
 */
class Work_shift_model extends CI_Model {

    public $name;
    public $status;

    public function get_all_entries() {
        $query = $this->db->get('work_shift');
        return $query->result();
    }

    public function insert_entry() {
        $this->name = $_POST['name']; // please read the below note
        $this->status = $_POST['status'];

        $this->db->insert('work_shift', $this);
    }

    public function update_entry() {
        $this->name = $_POST['name'];
        $this->status = $_POST['status'];
        
        $this->db->update('work_shift', $this, array('id' => $_POST['id']));
    }

}

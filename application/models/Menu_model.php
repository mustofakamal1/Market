<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "Select user_sub_menu.*, user_menu.menu
                  FROM user_sub_menu JOIN user_menu
                  ON user_sub_menu.menu_id = user_menu.id
        
                ";
        return  $this->db->query($query)->result_array();
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}

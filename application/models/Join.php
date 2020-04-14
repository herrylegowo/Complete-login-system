<?php
// class Join extends CI_Model
// {
//     public function table()
//     {
//         $role_id = $this->session->userdata('role_id');
//         $this->db->select('user_menu.id, menu');
//         $this->db->from('user_menu');
//         $this->db->join('user_access_menu', 'user_menu.id = user_access_menu.menu_id');
//         $this->db->where('user_access_menu.role_id',  $role_id);
//         $query = $this->db->get();
//         return $query->result();
//     }
// }

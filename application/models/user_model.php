<?php

/**
 *
 */
class User_model extends CI_Model
{

  public function get_users($user_id, $username)
  {

    // $query = $this->db->query("select * from users;");

    // $query = $this->db->get('users');
     // return $query->num_fields(); //This will give me the columns number

     // $this->db->where('id', $user_id);

     $this->db->where([
       'id' => $user_id,
       'username' => $username

     ]);
     $query = $this->db->get('users');

     return $query->result();

  }


  public function create_users($data)
  {
    $this->db->insert('users', $data);
  }


  public function update_users($data, $id)
  {
    $this->db->where(['id' => $id ]);
    $this->db->update('users', $data);
  }
}


 ?>

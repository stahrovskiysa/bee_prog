<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Users_model extends CI_Model {

        public $family;
        public $name;
        public $soname;



    public function get_last_users()
    {
        $query = $this->db->get('users');
        return $query->result();
    }




    public function get_last_users_where($str)
    {
        $this->db->where('username',$str);
        $query = $this->db->get('users');
        return $query->result();
    }






    public function delete_users($row)
        {

                $this->db->delete('users', array('iduser' => $row));  


        }




}
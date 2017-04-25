<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog_model extends CI_Model {

    public $date;
    public $login;
    public $message;
    public $email_comment;



    public function get_last_comment()
    {
        $query = $this->db->get('comment');
        return $query->result_array();
    }


    public function get_last_price()
    {
        $query = $this->db->get('price_med');
        return $query->result_array();
    }



    public function get_last_comment_where($str)
    {

         // $str='idcomment=(SELECT MAX(idcomment) FROM comment)';
        $query = $this->db->get_where('comment',$str);
        return $query->result();
    }

    public function get_last_configure_where($str)
    {

        $query = $this->db->get_where('configure',$str);
        return $query->result();
    }

    public function get_last_configure()
    {

        $query = $this->db->get('configure');
        return $query->result();
    }


    public function get_last_content_inf()
    {

        $query = $this->db->get('content_inf');
        return $query->result();
    }


    public function get_last_content_pchelovod()
    {

        $query = $this->db->get('content_pchelovod');
        return $query->result();
    }





}
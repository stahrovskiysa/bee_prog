<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Blog extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('daterus');
    }


    public function index()
    {

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');



        $this->load->model('blog/blog_model');
        $str='idcomment=(SELECT MAX(idcomment) FROM comment)';
        $data['query'] = $this->blog_model->get_last_comment_where($str);


        $data['configure'] = $this->blog_model->get_last_configure();





            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('blog/blog_index', $data);
             }
                else
             {
                 $this->load->view('blog/formsuccess');
             }




    }


    public function add_comment()
    {

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');


        $this->load->model('blog/blog_model');


        if ($this->form_validation->run('comment') == FALSE)
        {
            $this->load->view('blog/add_comment');

        }
        else
        {
            $add['date'] = $this->input->post('date');


            $add['date']=date('Y-m-d',strtotime($add['date']));



            $add['login']  = htmlspecialchars(strip_tags(trim($this->input->post('login'))));

            $add['message'] = htmlspecialchars(strip_tags(trim($this->input->post('message'))));

            $add['email_comment'] = htmlspecialchars(strip_tags(trim($this->input->post('email_comment'))));

            $this->db->insert('comment', $add);


            $this->load->view('blog/formsuccess');
        }




    }





    public function view_price()
    {

        $this->load->model('blog/blog_model');
        $data['price'] = $this->blog_model->get_last_price();
        $this->load->view('blog/view_price', $data);
    }



        public function view_comment()
    {

        $this->load->model('blog/blog_model');
        $data['comment'] = $this->blog_model->get_last_comment();
        $this->load->view('blog/view_comment', $data);
    }


    public function view_content_inf()
    {

        $this->load->model('blog/blog_model');
        $data['contentinf'] = $this->blog_model->get_last_content_inf();
        $this->load->view('blog/view_content_inf', $data);
    }







    public function about_info()
    {

        $this->load->model('blog/blog_model');
        $this->load->view('blog/about_info');
    }






	public function page3()
	{

//               $this->load->model('blog/users_model');
        	$this->load->view('blog/page3');
	}






}



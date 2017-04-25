<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends CI_Controller
{

      public function __construct()
       {
           parent::__construct();
           // Your own constructor code
          $this->load->helper(array('form', 'url'));
           $this->load->library('form_validation');
           $this->load->library('grocery_CRUD');
           $this->load->library('session');

       }


    public function index()
    {

        $this->load->view('admin/admin_index');


    }




    //  -------------------------------------------------------------------------

    //   проверить  пользователя

    public function adm_users()
    {

        $passw = $this->input->post('pass');
        $usern = $this->input->post('user');


        $nomnomn="111";
        $h1="";

        $this->db->where('username',$usern);
        $query = $this->db->get('users');

        foreach ($query->result() as $row)
        {
            $h1 = $row->hs1;

        }


        $this->db->where('nameconfig','salt');
        $query = $this->db->get('configure');

        foreach ($query->result() as $row)
        {
            $salt = $row->parametrstr;
        }





           $p1 = md5($passw . $salt);


        if ($p1 === $h1)
        {
            if  ($usern === "AdminSSA") {
                $this->load->model('blog/users_model');


                $newdata = array(
                    'username'  => $usern,
                    'nomnom' => $nomnomn,
                    'logged_in' => TRUE
                );

                $this->session->set_userdata($newdata);

                $this->load->view('admin/adm_users');
                echo "Успешно вошел";
            }
            else { echo "Неправильно ввел данные!"; }

        }
        else {
            echo "Неправильно ввел данные!";

        }


    }

    //  таблиа  конфигураии сайта
    public function t_configure ()

    {

        $this->load->model('blog/blog_model');



        /* создали экземпляр CRUD */
        $crud = new grocery_CRUD();

        $crud->set_table('configure');

        $crud->columns('idconfig', 'nameconfig', 'parametrn', 'parametrstr','textparametr');
        $crud->fields('idconfig', 'nameconfig', 'parametrn', 'parametrstr','textparametr');
        $crud->add_fields('nameconfig', 'parametrn', 'parametrstr','textparametr');
        $crud->edit_fields('nameconfig', 'parametrn', 'parametrstr','textparametr');
        $crud->required_fields('nameconfig');

        $crud->display_as('idconfig', 'Id')
            ->display_as('nameconfig', 'Наименование параметра')
            ->display_as('parametrn', 'Числовой параметр')
            ->display_as('parametrstr', 'Параметр строковый')
            ->display_as('textparametr', 'Текстовый параметр');

        $crud->set_rules('parametrn','Числовой параметр','numeric');


        $crud->set_subject('запись');
        $crud->order_by('idconfig', 'acs');


        $output = $crud->render();


        $username= $this->session->userdata('username');

        if ($username === "AdminSSA") {
            $this->load->view('admin/t_configure', (array)$output);
        }
        else {
            echo "Вы не автаризовались на сайте";
        }


    }


    /* таблица по ценам на мед  */

    public function t_price_med ()

    {

        $this->load->model('blog/blog_model');

        /* создали экземпляр CRUD */
        $crud = new grocery_CRUD();

        $crud->set_table('price_med');


        $crud->columns('idprice', 'nameprod', 'dimension', 'price', 'notepr', 'urlmed');
        $crud->fields('idprice', 'nameprod', 'dimension', 'price', 'notepr', 'urlmed');
        $crud->add_fields('nameprod', 'dimension', 'price', 'notepr', 'urlmed');
        $crud->edit_fields('nameprod', 'dimension', 'price', 'notepr', 'urlmed');
        $crud->required_fields('nameprod', 'dimension', 'price', 'notepr', 'urlmed');

        /* Но вместо адреса картинки покажем саму картинку */
        $crud->callback_column('urlmed', array($this, 'pic_med_show'));

        $crud->display_as('idprice', 'Id')
            ->display_as('nameprod', 'Наименование продукции')
            ->display_as('dimension', 'Размерность')
            ->display_as('price', 'Цена')
            ->display_as('notepr', 'Примечание')
            ->display_as('urlmed', 'Графический URL');

        /*сгенерирует при сохранении картинки */
        $crud->set_field_upload('urlmed', 'filemed/');


        $crud->set_rules('price','Числовой параметр','numeric');
        $crud->order_by('idprice', 'acs');

        $crud->set_subject('запись');
        $output = $crud->render();


        $username= $this->session->userdata('username');
        if ($username === "AdminSSA") {
            $this->load->view('admin/t_price_med', (array)$output);
        }
        else {
            echo "Вы не автаризовались на сайте";
        }



    }


    /* Показываем картинку */
    function pic_med_show($primary_key, $row) {
        if (is_file("filemed/" . $row->urlmed)) {
              return '<img src='.'"/filemed/' . $row->urlmed.'"'.' width="150px" height="auto" alt="нет рисунка"/>';

        }
        return "";
    }


/* таблица отзывов пользователя */
    public function t_comment ()

    {
        $this->load->model('blog/blog_model');

        /* создали экземпляр CRUD */
        $crud = new grocery_CRUD();

        $crud->set_table('comment');


        $crud->columns('idcomment', 'date', 'login', 'message', 'email_comment');
        $crud->fields('idcomment', 'date', 'login', 'message', 'email_comment');
        $crud->add_fields('date', 'login', 'message', 'email_comment');
        $crud->edit_fields('date', 'login', 'message', 'email_comment');
        $crud->required_fields('idcomment', 'date', 'login', 'message', 'email_comment');


        $crud->display_as('idcomment', 'Id')
            ->display_as('date', 'Дата ввода')

            ->display_as('login', 'Имя пользователя (как вас называть)')
            ->display_as('message', 'Текст отзыва')
            ->display_as('email_comment', 'Ваш email');



        $crud->set_rules('email_comment','email параметр','valid_email');
        $crud->order_by('idcomment', 'acs');

        $crud->set_subject('запись');
        $output = $crud->render();


        $username= $this->session->userdata('username');
        if ($username === "AdminSSA") {
            $this->load->view('admin/t_comment', (array)$output);
        }
        else {
            echo "Вы не автаризовались на сайте";
        }




    }

/* таблица Контент (статья о меде и пчелах)  */
    public function t_content_inf ()

    {
        $this->load->model('blog/blog_model');

        /* создали экземпляр CRUD */
        $crud = new grocery_CRUD();

        $crud->set_table('content_inf');


        $crud->columns('idcont', 'datacont', 'info', 'textinf', 'urlimg', 'urlarticle');
        $crud->fields('idcont', 'datacont', 'info', 'textinf', 'urlimg', 'urlarticle');
        $crud->add_fields('datacont', 'info', 'textinf', 'urlimg', 'urlarticle');
        $crud->edit_fields('datacont', 'info', 'textinf', 'urlimg', 'urlarticle');
        $crud->required_fields('idcont', 'datacont', 'info', 'textinf', 'urlimg', 'urlarticle');

        /* Но вместо адреса картинки покажем саму картинку */
        $crud->callback_column('urlimg', array($this, 'pic_content_inf_show'));


        $crud->field_type('urlarticle', 'url');


        $crud->display_as('idcont', 'Id')
            ->display_as('datacont', 'Дата ввода')

            ->display_as('info', 'Краткая информация (для шапки)')
            ->display_as('textinf', 'Текст статьи')
            ->display_as('urlimg', 'Картинка для статьи (URL картинки)')

            ->display_as('urlarticle', 'Ссылка на статью');

        /*сгенерирует при сохранении картинки */
        $crud->set_field_upload('urlimg', 'content_img/');


        $crud->set_rules('urlarticle','URL параметр','valid_url');
        $crud->order_by('idcont', 'acs');

        $crud->set_subject('запись');
        $output = $crud->render();

        $username= $this->session->userdata('username');
        if ($username === "AdminSSA") {
            $this->load->view('admin/t_content_inf', (array)$output);
        }
        else {
            echo "Вы не автаризовались на сайте";
        }


    }

    function pic_content_inf_show($primary_key, $row) {
        if (is_file("content_img/" . $row->urlimg)) {
            return '<img src='.'"/content_img/' . $row->urlimg.'"'.' width="150px" height="auto" alt="нет рисунка"/>';

        }
        return "";
    }


//  очистка сессий
        function t__sees_destroy()
        {
            $this->session->sess_destroy();
        }


// таблица  пользователей

    public function page_users()
    {
        $this->load->model('blog/users_model');
        $data['query'] = $this->users_model->get_last_users();
        $this->load->view('admin/page_users', $data);
    }




    public function add_users()
    {
        $this->load->model('blog/users_model');
        $this->load->view('admin/add_users');
    }


    public function add_users1()
    {
        $this->load->model('blog/users_model');
        $add['family'] = $this->input->post('family');
        $add['name'] = $this->input->post('name');
        $add['soname'] = $this->input->post('soname');
        $add['textusers'] = $this->input->post('textusers');
        $this->db->insert('users', $add);

        $data['query'] = $this->users_model->get_last_users();
        $this->load->view('admin/page_users', $data);

    }



    public function del_users($row)
    {
        $data = array('iduser' => $row);
        $this->load->view('admin/del_users', $data);

    }


    public function del_users1($row)
    {
        $this->load->model('blog/users_model');

        $this->db->delete('users', array('iduser' => $row));

        $data['query'] = $this->users_model->get_last_users();
        $this->load->view('admin/page_users', $data);
    }


    public function update_users($row)
    {

        $query = $this->db->get_where("users", array("iduser" => $row));
        $data['query'] = $query->result();

        $this->load->view('admin/update_users', $data);

    }


    public function update_users1($row)
    {

        $iduser['iduser'] = $row;

        $this->load->model('blog/users_model');
        $update['family'] = $this->input->post('family');
        $update['name'] = $this->input->post('name');
        $update['soname'] = $this->input->post('soname');
        $update['textusers'] = $this->input->post('textusers');

        $this->db->update('users', $update, $iduser);

        $data['query'] = $this->users_model->get_last_users();
        $this->load->view('admin/page_users', $data);

    }





}
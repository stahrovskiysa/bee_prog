<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Rules_model extends CI_Model {


   public $config = array(
        'comment' => array(
            array(
                'field'   => 'login',
                'label'   => 'Имя пользователя',
                'rules'   => 'required|max_length[60]|xss_clean'
            ),

            array(
                'field'   => 'email_comment',
                'label'   => 'Email адрес',
                'rules'   => 'required|valid_email'
            ),

            array(
                'field'   => 'message',
                'label'   => 'Сообщение',
                'rules'   => 'required|xss_clean|'
            ),

            array(
                'field'   => 'date',
                'label'   => 'Дата',
                'rules'   => 'required|exact_length[10]'
            )

        ),
        'signup' => array(
            array(
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'password',
                                            'label' => 'Password',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'passconf',
                                            'label' => 'PasswordConfirmation',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'email',
                                            'label' => 'Email',
                                            'rules' => 'required'
                                         )
                                    )

               );



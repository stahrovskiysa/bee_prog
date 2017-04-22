<?php defined('BASEPATH') OR exit('No direct script access allowed');
$config = array(
    'comment' => array(
          array(
              'field' => 'date',
                'label' => 'Дата',
                'rules' => 'required|exact_length[10]'
            ),
            array(
                'field' => 'login',
                'label' => 'Имя пользователя',
                'rules' => 'required|max_length[60]'
            ),
            array(
                'field' => 'message',
                'label' => 'Поле отзыв',
                'rules' => 'required'
            ),
            array(
                'field' => 'email_comment',
                'label' => 'Поле email',
                'rules' => 'required|valid_email'
             )
            ),
    'email' => array(
        array(
            'field' => 'emailaddress',
            'label' => 'EmailAddress',
            'rules' => 'required|valid_email'
        ),
        array(
            'field' => 'name',
            'label' => 'Name',
            'rules' => 'required|alpha'
        ),
        array(
            'field' => 'title',
            'label' => 'Title',
            'rules' => 'required'
        ),
        array(
            'field' => 'message',
            'label' => 'MessageBody',
            'rules' => 'required'
        )
    )
);



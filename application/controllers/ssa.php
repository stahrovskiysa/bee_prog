<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ssa extends CI_Controller {

	public function index()
	{

// $active_group = 'default'

 $config['hostname'] = 'localhost';
 $config['username'] = 'serguser';
 $config['password'] = 'serguser1';
 $config['database'] = 'ssa';
 $config['dbdriver'] = 'mysqli';
 $config['dbprefix'] = '';
 $config['pconnect'] = FALSE;
 $config['db_debug'] = TRUE;
 $config['cache_on'] = FALSE;
 $config['cachedir'] = '';
 $config['char_set'] = 'utf8';
 $config['dbcollat'] = 'utf8_general_ci';
 $this->load->database($config);

 $sql = "SELECT * FROM sergo WHERE 1";
 $this->db->query($sql);


 $this->load->database($config);

$query = $this->db->query("SELECT * FROM sergo WHERE 1");

// foreach ($query->result_array() as $row)
// {
//         echo $row['last_name'];
//        echo $row['first_name'];
//         echo $row['middle_name'];
//  }



$this->load->library('table');
$this->table->set_heading('id','fio', 'name', 'otch');


$template = array(
        'table_open'            => '<table border="1" cellpadding="4" cellspacing="0">',

        'thead_open'            => '<thead>',
        'thead_close'           => '</thead>',

        'heading_row_start'     => '<tr>',
        'heading_row_end'       => '</tr>',
        'heading_cell_start'    => '<th>',
        'heading_cell_end'      => '</th>',

        'tbody_open'            => '<tbody>',
        'tbody_close'           => '</tbody>',

        'row_start'             => '<tr>',
        'row_end'               => '</tr>',
        'cell_start'            => '<td>',
        'cell_end'              => '</td>',

        'row_alt_start'         => '<tr>',
        'row_alt_end'           => '</tr>',
        'cell_alt_start'        => '<td>',
        'cell_alt_end'          => '</td>',

        'table_close'           => '</table>'
);

$this->table->set_template($template);



echo $this->table->generate($query);



		$this->load->view('ssa_text');
		$this->load->view('ssa_tebl');

	}
}

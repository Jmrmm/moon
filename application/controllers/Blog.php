<?php

Class Blog Extends CI_Controller {

	public function index() 
	{
		$this->load->helper('form');

		$attr = array(
        	'name'  => 'myform',
        	'id'    => 'myform'
        );
		$data['form'] = form_open('register');

		$attr = array(
        	'name'  => 'username',
        	'id'    => 'username',
        	'placeholder' => 'Username',
        	'class' => 'input'
        );
		$data['username'] = form_input($attr);

                $attr = array(
                'name'  => 'password',
                'id'    => 'password',
                'placeholder' => 'Password',
                'class' => 'input'
        );
                $data['password'] = form_password($attr);

		$attr = array(
        	'name'  => 'submit',
        	'id'    => 'submit',
        	'class' => 'submit'
        );
		$data['submit'] = form_submit($attr, 'Submit Post!');

		$this->load->database();
		$sql = $this->db->query('SELECT name, age FROM howls ORDER BY id DESC');
		$data['person'] = $sql->result();

        $this->load->view('blog', $data);
	}

	public function register() 
	{
                $this->load->model('blogModel');
		$return = $this->blogModel->saveform();
		$this->index();
	}

}
?>

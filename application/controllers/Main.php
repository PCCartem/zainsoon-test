<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	    if($this->input->server('REQUEST_METHOD') === 'POST') {

	        $fio = $this->input->post('name');
            $email = $this->input->post('name');
	        $nember = $this->input->post('phone');
	        $message = $this->input->post('comment');

            /**
             * @class model/Main_model
             */
            $this->load->model('main_model');

            $this->main_model->insert_main($fio, $email, $nember, $message);

	        $resгде = [
                'result' => 'ОК'
            ];

            echo json_encode($resгде);
            return true;
        }

		$this->load->template('index');
	}
}

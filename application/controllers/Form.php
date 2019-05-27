<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

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
            $number= $this->input->post('phone');
            $email = $this->input->post('email');

            /**
             * @class model/Form_model
             */
            $this->load->model('form_model');

            $this->form_model->insert_form($number, $email);

            $resгде = [
                'result' => 'ОК'
            ];

            echo json_encode($resгде);
            return true;
        }

		$this->load->template('form');
	}
}

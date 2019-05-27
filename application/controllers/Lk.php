<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lk extends CI_Controller {

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

            $name = $this->input->post('name');

            /**
             * @class model/Main_model
             */
            $this->load->model('offer_model');

            $this->offer_model->insert_offer($name);

            $resгде = [
                'result' => 'ОК'
            ];

            echo json_encode($resгде);
            return true;
        }

		$this->load->template('lk');
	}
}

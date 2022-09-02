<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppa extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model('chk_model');
	}

	public function index()
	{
		$this->load->view('welcome_page');
	}	

    public function aaap(){
        $data['bbb'] = '멍청이';
		//echo phpinfo();
		$data['ccc'] = $this->chk_model->get_applicant_list();
        $this->load->view('welcome_page',$data);
    }
}

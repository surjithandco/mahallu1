<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movie_controller extends CI_Controller {

	 public function Movie_controller()
    {
        parent::__construct();
        $this->load->model('Movie_model');

    }
	public function index()
	{
		$this->load->view('view');	
		$data['query'] = $this->Movie_model->get_details();   
		$this->load->view('table_view', $data);
	}
}
?>

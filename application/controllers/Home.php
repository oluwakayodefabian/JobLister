<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public $data = NULL;
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['job_categories/category_model', 'job_model']);
        $this->load->helper('format_date');
    }
    public function index()
    {
        $this->data['title'] = NULL;
        if($this->input->get('category_id'))
        {
            $name = $this->category_model->get_single_category($this->input->get('category_id'))->name;
            $this->data['title'] = "Jobs in "."'".$name."'";
            $this->data['jobs'] = $this->job_model->get_job_by_category($this->input->get('category_id'));
        }
        else
        {
            $this->data['title'] = 'Latest Jobs';
            $this->data['jobs'] = $this->job_model->get_all_jobs();
        }
        $this->data['categories'] = $this->category_model->get_all_categories();
        $this->load->view('jobs/index', $this->data);
    }
    public function single($id)
    {
        $this->data['single_jobs'] = $this->job_model->get_job_by_id($id);
        $this->load->view('jobs/single', $this->data);
    }
  
}

/* End of file Home.php */

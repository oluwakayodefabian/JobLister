<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {
    public $data = NULL;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('job_categories/category_model');
        $this->load->library('form_validation');
        $this->load->helper('format_date');
        
    }
    
    public function create()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|is_unique[categories.name]', ['is_unique'=>'%s already exists']);
        if ($this->form_validation->run() === FALSE) 
        {
            $this->load->view('jobs/categories/create_categories');
        }
        else
        {
            $data = [
                'name' => html_escape($this->input->post('name'))
            ];
            $insert_id = $this->category_model->insert($data);
            if ($insert_id) 
            {
                $this->session->set_flashdata('success', 'Job category created successfully');
                redirect('categories/manage'); 
            }
        }
    }
    public function manage()
    {
        $this->data['categories'] = $this->category_model->get_all_categories();
        $this->load->view('jobs/categories/manage_categories', $this->data);
    }
    public function edit($id)
    {
        $this->data['editted_data'] = $this->category_model->get_category_by_id($id);
        $this->load->view('jobs/categories/edit_categories', $this->data);
    }
    public function update()
    {
        $id = $this->input->post('id');
        $this->form_validation->set_rules('name', 'Name', 'required|is_unique[categories.name]', ['is_unique'=>'%s already exists']);
        if ($this->form_validation->run() === FALSE)
        {
            $this->data['editted_data'] = $this->category_model->get_category_by_id($id);
            $this->load->view('jobs/categories/edit_categories', $this->data);
        }
        else
        {
            $this->data = ['name' => html_escape($this->input->post('name'))];
            $updated = $this->category_model->update_category($this->data, $id);
            if ($updated)
            {
                $this->session->set_flashdata('success', 'Job category Updated successfully');
                redirect('categories/manage'); 
            }
        }
    }
    public function delete($id)
    {
        $deleted = $this->category_model->delete_category($id);
        if ($deleted)
        {
            $this->session->set_flashdata('success', 'Job category Deleted successfully');
            redirect('categories/manage'); 
        }
    }
}

/* End of file Categories.php */

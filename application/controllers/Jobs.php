<?php

date_default_timezone_set("Africa/Lagos");

defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {
    public $data;
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['job_model', 'job_categories/category_model']);
        $this->load->library('form_validation');
        $this->load->helper('format_date');
        
    }
    public function create()
    {
        $this->data['categories'] = $this->category_model->get_all_categories();
        if ($this->form_validation->run('jobs/create') === FALSE) 
        {
            $this->load->view('jobs/create_job', $this->data);
        }
        else
        {
            $this->data = [
                'company'           => $this->input->post('company'),
                'category_id'       => $this->input->post('category_id'),
                'job_title'         => $this->input->post('job_title'),
                'description'       => html_escape($this->input->post('description')),
                'salary'            => $this->input->post('salary'),
                'location'          => $this->input->post('location'),
                'contact_user'      => $this->input->post('contact_user'),
                'contact_email'     => $this->input->post('contact_email')
            ];
             
            $insert_id = $this->job_model->insert($this->data);
            if ($insert_id) 
            {
                $this->session->set_flashdata('success', 'Job added successfully');
                redirect('jobs/manage');
            }
        }
    }
    public function manage()
    {
        $this->data['jobs'] = $this->job_model->get_all_jobs();
        $this->load->view('jobs/manage_job', $this->data);
    }
    public function edit($id)
    {
        $this->data['categories'] = $this->category_model->get_all_categories();
        $this->data['edit_jobs'] = $this->job_model->get_job_by_id($id);
        $this->load->view('jobs/edit_job', $this->data);
    }
    public function update()
    {
        $id = $this->input->post('id');
        $this->data['categories'] = $this->category_model->get_all_categories();
        $this->data['edit_jobs'] = $this->job_model->get_job_by_id($id);
        if ($this->form_validation->run('jobs/update') === FALSE) 
        {
            $this->load->view('jobs/edit_job', $this->data);
        }
        else
        {
            $this->data = [
                'company'           => $this->input->post('company'),
                'category_id'       => $this->input->post('category_id'),
                'job_title'         => $this->input->post('job_title'),
                'description'       => html_escape($this->input->post('description')),
                'salary'            => $this->input->post('salary'),
                'location'          => $this->input->post('location'),
                'contact_user'      => $this->input->post('contact_user'),
                'contact_email'     => $this->input->post('contact_email')
            ];
            $updated = $this->job_model->update_job($id, $this->data);
            if ($updated) 
            {
                $this->session->set_flashdata('success', 'Job Updated successfully');
                redirect('jobs/manage');
            }
            else
            {
                try 
                {
                    throw new Exception('somthing went wrong');
                } 
                catch (\Exception $ex) 
                {
                    echo '<p>'.$ex->getMessage().'</p>';
                }
            }
        }
    }
    public function delete($id)
    {
        $deleted = $this->job_model->delete_job($id);
        if ($deleted) 
        {
            $this->session->set_flashdata('success', 'Job deleted successfully');
            redirect('jobs/manage');
        }
        else
        {
            try 
            {
                throw new Exception('Error processing request');
            } 
            catch (\Exception $ex) 
            {
                echo '<p>'.$ex->getMessage().'</p>';
            }
        }
    }
    public function get_job()
    {
        $category = ($this->input->get('category_id')) ? $this->input->get('category_id') : NULL ;
        $this->data['jobs'] = $this->job_model->get_job_by_id($category);
    }
}

/* End of file Jobs.php */


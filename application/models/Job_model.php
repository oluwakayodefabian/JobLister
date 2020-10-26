<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Job_model extends CI_Model {
    private const TABLE = 'jobs'; 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    /**
     * Inserts new job entries into the jobs table
     * @param array $data
     */
    public function insert($data)
    {
        $query = $this->db->insert(self::TABLE, $data);
        return $this->db->insert_id();
    }
    public function get_all_jobs()
    {
        $query = $this->db->get(self::TABLE);
        return $query->result_object();
    }
    public function get_job_by_id($id)
    {
        $query = $this->db->get_where(self::TABLE, ['id' => $id]);
        return $query->result_object();
    }
    public function update_job($id, $data)
    {
        $this->db->where(['id' => $id])->update(self::TABLE, $data);
        return $this->db->affected_rows();
    }
    public function delete_job($id)
    {
        $this->db->delete(self::TABLE, ['id' => $id]);
        return $this->db->affected_rows();
    }
    public function get_job_by_category($category_id)
    {
        $query = $this->db->select(self::TABLE.'.*, categories.name')->from(self::TABLE)->join('categories', self::TABLE.'.category_id=categories.id')->where(['category_id' => $category_id])->get();
        return $query->result();
    }
}

/* End of file Job_model.php */

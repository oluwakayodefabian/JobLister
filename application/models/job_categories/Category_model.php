<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

    private $table;
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->table = 'categories';
    }
    /**
     * Inserts job categories into the categories table
     * @param array $data 
     */
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    /**
     * Gets all job categories from the categories table
    */
    public function get_all_categories()
    {
        $query = $this->db->get($this->table);
        return $query->result_object();
    }
    /**
     * Gets all job categories from the categories table by their respective id
     * @param int $id
     * @return object
    */
    public function get_category_by_id($id)
    {
        $query = $this->db->get_where($this->table, ["id"=>$id]);
        return $query->result_object();
    }
    /**
     * Updates job categories in the categories table
     * @param array $data
     * @param int $id
    */
    public function update_category($data, $id)
    {
        $this->db->where(['id' => $id])->update($this->table, $data);
        return $this->db->affected_rows();
    }
    /**
     * Deletes job categories from the categories table by their respective id
    */
    public function delete_category($id)
    {
        $this->db->delete($this->table, ['id' =>$id]);
        return $this->db->affected_rows();
    }
    /**
     * Gets a row from the categories table
     * @param int $category_id
     * @return object
     */
    public function get_single_category($category_id)
    {
        $query = $this->db->get_where($this->table, ['id' => $category_id]);
        return $query->row_object();
    }
}

/* End of file Category_model.php */

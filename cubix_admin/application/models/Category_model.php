<?php

class Category_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    public function is_logged_in()
    {
        // Return true or false based on the presence of user data
        if ($this->session->userdata('user_id') == ""){

            $flash_data['flashdata_msg'] = 'Sorry. Your Session Timed Out or You Have No Access to this Area';
            $flash_data['flashdata_type'] = 'warning';
            $flash_data['alert_type'] = 'warning';
            $flash_data['flashdata_title'] = 'No Access !';
            $this->session->set_flashdata($flash_data);

            return false;
        }else{
            return true;
        }
    }
    public function select_category($data='', $order_by='', $limit='')
    {
        // Run the query

        $this->db->select('*')->from('featured_products_category');

        if(!empty($data)){
            $this->db->where($data);
        }
        if(!empty($order_by)){
            $this->db->order_by('id',$order_by);

        }
        if(!empty($limit)){
            $this->db->limit($limit);
        }
        $query = $this->db->get();
        return $query;
    }
        public function insert_category($data='')
    {
        $qry=$this->db->insert('featured_products_category',$data);
        return $qry;

    }
    public function update_category($data)
    {
        $this->db->where('id',$data['id']);
        $qry=$this->db->update('featured_products_category',$data);
        return $qry;
    }



}
<?php

class Cat_model extends CI_Model
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
    public function select_cat($data='', $order_by='', $limit='')
    {
        // Run the query



        

       $this->db->select('*')->from('category');

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
    public function select_cat_more($data='', $order_by='', $limit='')
    {
        // Run the query

        $this->db->select('*')->from('sub_category');

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
    public function insert_cat_more($data='')
    {
        $qry=$this->db->insert('sub_category',$data);
        return $qry;

    }
    public function update_cat_more($data)
    {
        $this->db->where('id',$data['id']);
        $qry=$this->db->update('sub_category',$data);
        return $qry;
    }

    public function insert_cat($data='')
    {
        $qry=$this->db->insert('category',$data);
        return $qry;

    }
    public function update_cat($data)
    {
        $this->db->where('id',$data['id']);
        $qry=$this->db->update('category',$data);
        return $qry;
    }



}
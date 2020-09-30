<?php

class Product_model extends CI_Model
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
    public function select_product()
    {
        // Run the query



            $this->db->select('*')
        ->from('products')
        ->where('products.delete_status',0)
        ->join('category',' category.id = products.category','left');

        // $this->db->select('*')->from('products');

        // if(!empty($data)){
        //     $this->db->where($data);
        // }
        // if(!empty($order_by)){
        //     $this->db->order_by('product_id',$order_by);

        // }
        // if(!empty($limit)){
        //     $this->db->limit($limit);
        // }
        $query = $this->db->get();
        return $query;
    }
    public function select_product_more($data='', $order_by='', $limit='')
    {
        // Run the query

        $this->db->select('*')->from('product_image');

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
    public function insert_product_more($data='')
    {
        $qry=$this->db->insert('product_image',$data);
        return $qry;

    }
    public function update_product_more($data)
    {
        $this->db->where('id',$data['id']);
        $qry=$this->db->update('product_image',$data);
        return $qry;
    }

    public function insert_product($data='')
    {
        $qry=$this->db->insert('products',$data);
        return $qry;

    }
    public function update_product($data)
    {
        $this->db->where('product_id',$data['product_id']);
        $qry=$this->db->update('products',$data);
        return $qry;
    }



}
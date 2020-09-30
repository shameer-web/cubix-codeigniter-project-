<?php

class Featured_products_model extends CI_Model
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

    public function select_featured_products_more($data='', $order_by='', $limit='')
    {
        // Run the query

        $this->db->select('*')->from('featured_products_image');

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
    public function insert_featured_products_more($data='')
    {
        $qry=$this->db->insert('featured_products_image',$data);
        return $qry;

    }
    public function update_featured_products_more($data)
    {
        $this->db->where('id',$data['id']);
        $qry=$this->db->update('featured_products_image',$data);
        return $qry;
    }


    











    public function select_featured_products()
    {
        // Run the query



         $this->db->select('*')
        ->from('featured_products fp')
        ->where('fp.delete_status',0)
        ->join('featured_products_category fc',' fc.id = fp.category','left');

       // $this->db->select('*')->from('featured_products');

       //  if(!empty($data)){
       //      $this->db->where($data);
       //  }
       //  if(!empty($order_by)){
       //      $this->db->order_by('product_id',$order_by);

       //  }
       //  if(!empty($limit)){
       //      $this->db->limit($limit);
       //  }
        $query = $this->db->get();
        return $query;
    }
  
    public function insert_featured_products($data='')
    {
        $qry=$this->db->insert('featured_products',$data);
        return $qry;

    }
    public function update_featured_products($data)
    {
        $this->db->where('product_id',$data['product_id']);
        $qry=$this->db->update('featured_products',$data);
        return $qry;
    }



}
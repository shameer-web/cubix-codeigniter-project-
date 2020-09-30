<?php

class Special_offer_model extends CI_Model
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
    public function select_special_offer()
    {
        // Run the query



         $this->db->select('*')
        ->from('special_offers')
        ->where('special_offers.delete_status',0)
        ->join('category',' category.id = special_offers.category','left');

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
   

    public function insert_special_offer($data='')
    {
        $qry=$this->db->insert('special_offers',$data);
        return $qry;

    }
    public function update_special_offer($data)
    {
        $this->db->where('product_id',$data['product_id']);
        $qry=$this->db->update('special_offers',$data);
        return $qry;
    }



}
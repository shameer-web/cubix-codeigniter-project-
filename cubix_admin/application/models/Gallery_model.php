<?php
/**
 * Created by PhpStorm.
 * User: Genova
 * Date: 2/28/2018
 * Time: 2:46 PM
 */
class Gallery_model extends CI_Model
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
    public function select_gallery($data='', $order_by='', $limit='')
    {
        // Run the query

          $this->db->select('*')->from('gallery');






        if(!empty($data)){
            $this->db->where($data);
        }
        if(!empty($order_by)){
            $this->db->order_by('gallery_id',$order_by);

        }
        if(!empty($limit)){
            $this->db->limit($limit);
        }
        $query = $this->db->get();
        return $query;
    }
        public function insert_gallery($data='')
    {
        $qry=$this->db->insert('gallery',$data);
        return $qry;

    }
    public function update_gallery($data)
    {
        $this->db->where('gallery_id',$data['gallery_id']);
        $qry=$this->db->update('gallery',$data);
        return $qry;
    }







}
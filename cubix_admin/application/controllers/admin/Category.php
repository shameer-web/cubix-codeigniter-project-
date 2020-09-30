<?php
class Category extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->initial();
    }
    public function initial()
    {
        ini_set('max_execution_time', 5000);
        ini_set("memory_limit", "-1");
        date_default_timezone_set('Asia/Kolkata');
        $this->load->model('Category_model','Category');
        $this->load->model('User_model','User');

        if($this->User->is_logged_in('admin')==false){
            redirect(base_url(), 'refresh');
        }
        $this->page_data['user_role'] = $this->session->userdata('type');
        $this->page_data['user_directory'] = $this->session->userdata('type')."/";
        $this->page_data['directory'] = "category";
    }
    public function index()
    {

        $this->home();
    }
    public function home()
    {
        $this->page_data['page_name'] = 'add_category';
        $this->load->view('Index',$this->page_data);
    }
    ##GALLERY
    public function select()
    {
        $json_data=array();
        $j=0;

        $data['delete_status'] = 0;
        $result	= $this->Category->select_category($data);
        $result_array=$result->result();

        $json_data['draw']=5;
        $json_data['recordsTotal']=$result->num_rows();
        $json_data['recordsFiltered']=$result->num_rows();
        $array=array();
       
        foreach($result_array as $row):
            $id=$row->id;
            $category =$row->category;
            
            $btn_edit='<a style="margin-left: 5px;margin-right: 5px" id="category_edit_btn" href="#category_edit_modal" data-toggle="modal" class="btn btn-warning m-btn m-btn--icon  m-btn--icon-only  m-btn--pill m-btn--air">
                            <i class="la la-edit"></i>
                        </a>';
            $btn_delete='<a style="margin-left: 5px;margin-right: 5px" id="category_delete_btn" href="#category_delete_modal" data-toggle="modal" class="btn btn-danger m-btn m-btn--icon  m-btn--icon-only  m-btn--pill m-btn--air">
                            <i class="la la-trash"></i>
                        </a>';
            

            $array[$j][]=$id;
            $array[$j][]=$row->category;
           
            $array[$j][]=$btn_edit.$btn_delete;
            $j++;
        endforeach;

        $json_data['data']=$array;
        echo json_encode($json_data);  // send data as json format
    }
    public function create()
    {

        $data['category'] = $this->security->xss_clean($this->input->post('category'));
       
        $result=$this->Category->insert_category($data);
        if($result==1)
        {
            $flash_data['flashdata_msg'] = 'Category Created Successfully!';
            $flash_data['flashdata_type'] = 'info';
            $flash_data['alert_type'] = 'info';
            $flash_data['flashdata_title'] = 'Success !';
        } else {
            $flash_data['flashdata_msg'] = 'Sorry.. There Have been Some Error Occurred. Please Try Again!';
            $flash_data['flashdata_type'] = 'error';
            $flash_data['alert_type'] = 'danger';
            $flash_data['flashdata_title'] = 'Error !!';
        }
        $this->session->set_flashdata($flash_data);
        redirect(base_url() . $this->page_data['user_directory'].'category', 'refresh');
    }
    public function update()
    {

        $data['id'] = $this->security->xss_clean($this->input->post('id'));

         $data['category'] = $this->security->xss_clean($this->input->post('category'));
       



        $result=$this->Category->update_category($data);
        if($result==1)
        {
            $flash_data['flashdata_msg'] = 'Category Updated Successfully!';
            $flash_data['flashdata_type'] = 'info';
            $flash_data['alert_type'] = 'info';
            $flash_data['flashdata_title'] = 'Success !';
        } else {
            $flash_data['flashdata_msg'] = 'Sorry.. There Have been Some Error Occurred. Please Try Again!';
            $flash_data['flashdata_type'] = 'error';
            $flash_data['alert_type'] = 'danger';
            $flash_data['flashdata_title'] = 'Error !!';
        }
        $this->session->set_flashdata($flash_data);
        redirect(base_url() . $this->page_data['user_directory'].'category', 'refresh');
    }
    public function delete()
    {
        $data['id'] = $this->security->xss_clean($this->input->post('deleteid'));
        // $data['category'] = $this->security->xss_clean($this->input->post('deleteid'));
        $data['delete_status']=1;
        $result=$this->Category->update_category($data);
        if($result==1)
        {
            $flash_data['flashdata_msg'] = 'Category Updated Successfully!';
            $flash_data['flashdata_type'] = 'error';
            $flash_data['alert_type'] = 'danger';
            $flash_data['flashdata_title'] = 'Error !';
        } else {
            $flash_data['flashdata_msg'] = 'Sorry.. There Have been Some Error Occurred. Please Try Again!';
            $flash_data['flashdata_type'] = 'error';
            $flash_data['alert_type'] = 'danger';
            $flash_data['flashdata_title'] = 'Error !!';
        }
        $this->session->set_flashdata($flash_data);
        redirect(base_url() . $this->page_data['user_directory'].'category', 'refresh');
    }
}
/**
 * Created by PhpStorm.
 * User: renju
 * Date: 15-03-2018
 * Time: 10:49 AM
 */
<?php
class Cat extends CI_Controller{
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
        $this->load->model('Cat_model','Cat');
        $this->load->model('Category_model','Category');
        $this->load->model('User_model','User');

        if($this->User->is_logged_in('admin')==false){
            redirect(base_url(), 'refresh');
        }
        $this->page_data['user_role'] = $this->session->userdata('type');
        $this->page_data['user_directory'] = $this->session->userdata('type')."/";
        $this->page_data['directory'] = "cat";
    }
    public function index()
    {

        $this->home();
    }
    public function home()
    {
        $this->page_data['page_name'] = 'add_cat';


        $this->load->view('Index',$this->page_data);
    }
    ## PRODUCT IMAGE
    public function more($param1='')
    {
        $data['id']=$param1;
        $this->page_data['c_id']=$param1;
        $this->page_data['result'] =$this->Cat->select_cat($data)->row();
        $this->page_data['page_name']='cat_more';
        $this->load->view('Index',$this->page_data);
    }
    public function more_select()
    {
        $json_data=array();
        $j=0;
        if($_POST['c_id']!='' && $_POST['c_id']!='all'){
            $data['c_id'] = $_POST['c_id'];
        }
        $data['delete_status'] = 0;
        $result	= $this->Cat->select_cat_more($data);
        $result_array=$result->result();

        $json_data['draw']=5;
        $json_data['recordsTotal']=$result->num_rows();
        $json_data['recordsFiltered']=$result->num_rows();
        $array=array();
        function getExcerpt($str, $startPos=0, $maxLength=100 ,$last='') {
            if(strlen($str) > $maxLength) {
                $excerpt   = substr($str, $startPos, $maxLength-3);
                $lastSpace = strrpos($excerpt, ' ');
                $excerpt   = substr($excerpt, 0, $lastSpace);
                if($last=='dot'){
                    $excerpt  .= '..';
                }
            }else {
                $excerpt = $str;
            }
            return $excerpt;
        }
        foreach($result_array as $row):
             
            $id=$row->id;

            $btn_delete='<a style="margin-left: 5px;margin-right: 5px" id="cat_more_delete_btn" href="#cat_more_delete_modal" data-toggle="modal" class="btn btn-danger m-btn m-btn--icon  m-btn--icon-only  m-btn--pill m-btn--air">
                            <i class="la la-trash"></i>
                        </a>';



            $array[$j][]=$row->id;
            $array[$j][]=$row->sub_category;
           
       
            $array[$j][]=$btn_delete;
            $j++;
        endforeach;

        $json_data['data']=$array;
        echo json_encode($json_data);  // send data as json format
    }
    public function more_create()
    {
        $id = $this->security->xss_clean($this->input->post('c_id'));
        $data['c_id'] = $this->security->xss_clean($this->input->post('c_id'));
        
       $data['sub_category'] = $this->security->xss_clean($this->input->post('sub_category'));


        $result=$this->Cat->insert_cat_more($data);
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
        redirect(base_url() . $this->page_data['user_directory'].'cat/more/'.$id, 'refresh');
    }
    public function more_delete()
    {
        $id = $this->security->xss_clean($this->input->post('c_id'));
        $data['id'] = $this->security->xss_clean($this->input->post('deleteid'));
        $data['delete_status']=1;
        $result=$this->Cat->update_cat_more($data);
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
        redirect(base_url() . $this->page_data['user_directory'].'cat/more/'.$id, 'refresh');
    }
    ##PRODUCT
    public function select()
    {
        $json_data=array();
        $j=0;

        $data['delete_status'] = 0;
        $result	= $this->Cat->select_cat($data);
        $result_array=$result->result();

        $json_data['draw']=5;
        $json_data['recordsTotal']=$result->num_rows();
        $json_data['recordsFiltered']=$result->num_rows();
        $array=array();
       
        foreach($result_array as $row):
            $id=$row->id;
            
            $btn_edit='<a style="margin-left: 5px;margin-right: 5px" id="cat_edit_btn" href="#cat_edit_modal" data-toggle="modal" class="btn btn-warning m-btn m-btn--icon  m-btn--icon-only  m-btn--pill m-btn--air">
                            <i class="la la-edit"></i>
                        </a>';
            $btn_delete='<a style="margin-left: 5px;margin-right: 5px" id="cat_delete_btn" href="#cat_delete_modal" data-toggle="modal" class="btn btn-danger m-btn m-btn--icon  m-btn--icon-only  m-btn--pill m-btn--air">
                            <i class="la la-trash"></i>
                        </a>';
            $btn_cat='<a style="margin-left: 5px;margin-right: 5px" id="cat_delete_btn" href="'.base_url().$this->page_data['user_directory'].'cat/more/'.$id.'" >
                              <button type="button" class="btn btn-info">Add Sub Category</button>
                        </a>';


            $array[$j][]=$row->id;
            $array[$j][]=$row->id;
            $array[$j][]=$row->category;
           
            $array[$j][]=$btn_cat;
            $array[$j][]=$btn_edit.$btn_delete;
            $j++;
        endforeach;

        $json_data['data']=$array;
        echo json_encode($json_data);  // send data as json format
    }
    public function create()
    {   
         $data['category'] = $this->security->xss_clean($this->input->post('category'));
       


        $result=$this->Cat->insert_cat($data);
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
        redirect(base_url() . $this->page_data['user_directory'].'cat', 'refresh');
    }
    public function update()
    {
        
        $data['id'] = $this->security->xss_clean($this->input->post('id'));

         $data['category'] = $this->security->xss_clean($this->input->post('category'));

        
        
        


        $result=$this->Cat->update_cat($data);
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
        redirect(base_url() . $this->page_data['user_directory'].'cat', 'refresh');
    }
    public function delete()
    {
        $data['id'] = $this->security->xss_clean($this->input->post('deleteid'));
        $data['delete_status']=1;
        $result=$this->Cat->update_cat($data);
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
        redirect(base_url() . $this->page_data['user_directory'].'cat', 'refresh');
    }
}

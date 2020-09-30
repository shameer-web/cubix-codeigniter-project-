<?php
class Special_offer extends CI_Controller{
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
        $this->load->model('Special_offer_model','Special_offer');
        $this->load->model('Cat_model','Cat');
        $this->load->model('User_model','User');

        if($this->User->is_logged_in('admin')==false){
            redirect(base_url(), 'refresh');
        }
        $this->page_data['user_role'] = $this->session->userdata('type');
        $this->page_data['user_directory'] = $this->session->userdata('type')."/";
        $this->page_data['directory'] = "special_offer";
    }
    public function index()
    {

        $this->home();
    }
    public function home()
    {
        $this->page_data['page_name'] = 'add_special_offer';



        $data['delete_status'] = 0;
        $this->page_data['category'] = $this->Cat->select_cat($data)->result_array();
      //  print_r( $this->page_data['category']);

        $this->load->view('Index',$this->page_data);
    }
    
    ##PRODUCT
    public function select()
    {
        $json_data=array();
        $j=0;

        $data['delete_status'] = 0;
        $result	= $this->Special_offer->select_special_offer($data);
        $result_array=$result->result();

        $json_data['draw']=5;
        $json_data['recordsTotal']=$result->num_rows();
        $json_data['recordsFiltered']=$result->num_rows();
        $array=array();
       
        foreach($result_array as $row):
            $id=$row->product_id;
            $img='<img style="width:50px;height: 50px;" src="'.base_url().'uploads/special_offer/'. $row->product_image.'">';
            $btn_edit='<a style="margin-left: 5px;margin-right: 5px" id="special_offer_edit_btn" href="#special_offer_edit_modal" data-toggle="modal" class="btn btn-warning m-btn m-btn--icon  m-btn--icon-only  m-btn--pill m-btn--air">
                            <i class="la la-edit"></i>
                        </a>';
            $btn_delete='<a style="margin-left: 5px;margin-right: 5px" id="special_offer_delete_btn" href="#special_offer_delete_modal" data-toggle="modal" class="btn btn-danger m-btn m-btn--icon  m-btn--icon-only  m-btn--pill m-btn--air">
                            <i class="la la-trash"></i>
                        </a>';
           


            $array[$j][]=$row->product_id;
            $array[$j][]=$row->id;
            $array[$j][]=$row->category;
            $array[$j][]=$img;
            $array[$j][]=$row->title;
            $array[$j][]=$row->description;
            $array[$j][]=$row->price;
            $array[$j][]=$row->offer_price;
            $array[$j][]=$row->offer_percentage;
            $array[$j][]=$btn_edit.$btn_delete;
            $j++;
        endforeach;

        $json_data['data']=$array;
        echo json_encode($json_data);  // send data as json format
    }
    public function create()
    {   
         $data['category'] = $this->security->xss_clean($this->input->post('category'));
        if ($_FILES['uploaded_file']["size"] > 0) {
            $target_path = "uploads/special_offer/";
            $target_path1 = "uploads/special_offer/";
            $filename = basename($_FILES['uploaded_file']['name']);

            $target_path = $target_path . $filename;

            while (file_exists($target_path)) {

                $filename = rand(0, 1000) . $filename;
                $target_path = $target_path . $filename;
            }

            if (!move_uploaded_file($_FILES['uploaded_file']["tmp_name"], $target_path1 . $filename)) {

                $imageerror = "An Error Occurred While Trying to Upload Image";
            }
            $data['product_image'] = $filename;
        }else{
            $data['product_image'] = 'noimage.png';
        }

         $data['title'] = $this->security->xss_clean($this->input->post('title'));
           $data['description'] = $this->security->xss_clean($this->input->post('description'));

           $data['price'] = $this->security->xss_clean($this->input->post('price'));
            $data['offer_price'] = $this->security->xss_clean($this->input->post('offer_price'));

             $data['offer_percentage'] = $this->security->xss_clean($this->input->post('offer_percentage'));

        $result=$this->Special_offer->insert_special_offer($data);
        if($result==1)
        {
            $flash_data['flashdata_msg'] = 'Product Created Successfully!';
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
        redirect(base_url() . $this->page_data['user_directory'].'special_offer', 'refresh');
    }
    public function update()
    {
        
        $data['product_id'] = $this->security->xss_clean($this->input->post('product_id'));

         $data['category'] = $this->security->xss_clean($this->input->post('category'));

        if ($_FILES['uploaded_file']["size"] > 0) {
            $target_path = "uploads/special_offer/";
            $target_path1 = "uploads/special_offer/";
            $filename = basename($_FILES['uploaded_file']['name']);

            $target_path = $target_path . $filename;

            while (file_exists($target_path)) {

                $filename = rand(0, 1000) . $filename;
                $target_path = $target_path . $filename;
            }

            if (!move_uploaded_file($_FILES['uploaded_file']["tmp_name"], $target_path1 . $filename)) {

                $imageerror = "An Error Occurred While Trying to Upload Image";
            }
            $data['product_image'] = $filename;
        }
        
         $data['title'] = $this->security->xss_clean($this->input->post('title'));
         $data['description'] = $this->security->xss_clean($this->input->post('description'));
          $data['price'] = $this->security->xss_clean($this->input->post('price'));
           $data['offer_price'] = $this->security->xss_clean($this->input->post('offer_price'));
            $data['offer_percentage'] = $this->security->xss_clean($this->input->post('offer_percentage'));


        $result=$this->Special_offer->update_special_offer($data);
        if($result==1)
        {
            $flash_data['flashdata_msg'] = 'Product Updated Successfully!';
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
        redirect(base_url() . $this->page_data['user_directory'].'special_offer', 'refresh');
    }
    public function delete()
    {
        $data['product_id'] = $this->security->xss_clean($this->input->post('deleteid'));
        $data['delete_status']=1;
        $result=$this->Special_offer->update_special_offer($data);
        if($result==1)
        {
            $flash_data['flashdata_msg'] = 'Product Updated Successfully!';
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
        redirect(base_url() . $this->page_data['user_directory'].'special_offer', 'refresh');
    }
}

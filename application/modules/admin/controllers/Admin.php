<?php
class Admin extends MX_Controller 
{

function __construct() {
parent::__construct();
}

public function index()
{
    if($this->session->userdata('user_type') == 'Admin' )
    {
    $data['title'] = "Users";
    $data['view_module'] = "admin";
    $data['view_files'] = "index";
    $this->load->module("templates");
    $this->templates->admin($data);

     }
    else{
        redirect('admin/login');
    }
}

public function login()
{
    $this->load->view('admin/login');
}

public function dashboard()
{
    if($this->session->userdata('user_type') == 'Admin' )
    {
       
            $data['title'] = 'Dashboard';
            $data['view_module'] = "admin";
            $data['view_files'] = "index";
            $this->load->module("templates");
            $this->templates->admin($data);
    }
    else
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        if($email=="" || $password=="" ){   
            $this->session->set_flashdata('error_msg', 'Username or Password is empty. Please try again!');
            redirect(base_url().'admin/login');    
        }
        
        $user_login = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );
        $this->load->model('mdl_admin');
        $data = $this->mdl_admin->validate_credentials($user_login['email'],$user_login['password']);
        if($data)
        {
            $this->session->set_userdata('id',$data['id']);
            $this->session->set_userdata('email',$data['email']);
            $this->session->set_userdata('username',$data['username']);
            $this->session->set_userdata('user_type',$data['user_type']);
            $data['title'] = 'Dashboard';
            $data['view_module'] = "admin";
            $data['view_files'] = "index";
            $this->load->module("templates");
            $this->templates->admin($data);
        }
        else
        {
            $this->session->set_flashdata('error_msg', 'You are Not Authorized Person, Contact to Administrator.');
            redirect('admin/login');
        }   
    }
}

public function logout()
{
    $this->session->sess_destroy();
      redirect('admin/login', 'refresh');
}

public function users()
{
    if($this->session->userdata('user_type') == 'Admin' )
    {
    $data['view_module'] = "admin";
    $data['view_files'] = "users";
    $this->load->module("templates");
    $this->templates->admin($data);

     }
    else{
        redirect('admin/login');
    }

}

// user list

public function user_list()
{
    if( $this->session->userdata('user_type') == 'Admin')
    {

        $this->load->model("mdl_admin");  
           $fetch_data = $this->mdl_admin->make_datatables();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $status = $row->status;
                if($row->status == 'Active'){
                    $butt = '<a href="#" id = "'.$row->id.'" name="change_status" class="btn btn-danger btn-xs change_status">Block</a>';
                }
                else if($status == 'Block'){
                    $butt = '<a href="#" id = "'.$row->id.'" name="unblock_category" class="btn btn-info btn-xs unblock_category">UnBlock</a>';
                }
                $sub_array = array();   
                $sub_array[] = $row->id;  
                $sub_array[] = $row->username;     
                $sub_array[] = $row->email;     
                $sub_array[] = $row->status;     
                $sub_array[] = $row->created_at;  
                $sub_array[] = ''.$butt.'
                                <a href="#" id= "'.$row->id.'" name="delete_category" class="btn btn-danger btn-xs delete_category">Delete</a>';   
                  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                    =>     intval($_POST["draw"]),  
                "recordsTotal"          =>      $this->mdl_admin->get_all_data(),  
                "recordsFiltered"     =>     $this->mdl_admin->get_filtered_data(),  
                "data"                    =>     $data  
           );  
           echo json_encode($output); 

           }
       else{
        redirect('admin/login');
    }
}

// end user list

// image library. 



public function image_config($path_name){

                $path ='./'.$path_name.'/';
                $config['upload_path']          = $path;
                $config['allowed_types']        = 'gif|jpg|png|mov|mpeg|zip';
                $config['max_size']             = 555550000000;
                $config['max_width']            = 555550000000;
                $config['max_height']           = 555550000000;
                $config['encrypt_name']         = true;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

}

// End image uploading library


public function customers()
{
  if($this->session->userdata('user_type') == 'Admin' )
    {
    $data['view_module'] = "admin";
    $data['view_files'] = "customers";
    $this->load->module("templates");
    $this->templates->admin($data);

     }
    else{
        redirect('admin/login');
    }

}

// customer list

public function customers_list()
{
    if( $this->session->userdata('user_type') == 'Admin')
    {

        $this->load->model("mdl_admin");  
           $fetch_data = $this->mdl_admin->customer_make_datatables();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $status = $row->status;
                if($row->status == 'Active'){
                    $butt = '<a href="#" id = "'.$row->id.'" name="block_customer" class="btn btn-danger btn-xs block_customer">Block</a>';
                }
                else if($status == 'Block'){
                    $butt = '<a href="#" id = "'.$row->id.'" name="unblock_customer" class="btn btn-info btn-xs unblock_customer">UnBlock</a>';
                }
                $sub_array = array();   
                $sub_array[] = $row->id;  
                $sub_array[] = $row->customer_name;     
                $sub_array[] = $row->phone_number;     
                $sub_array[] = $row->email;     
                $sub_array[] = $row->address;     
                $sub_array[] = $row->status;     
                $sub_array[] = $row->created_at;  
                $sub_array[] = ''.$butt.' '.'<a href="'.base_url().'/admin/customer_detail" class="btn btn-info btn-xs">Detail</a>';   
                  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                    =>     intval($_POST["draw"]),  
                "recordsTotal"          =>      $this->mdl_admin->customer_get_all_data(),  
                "recordsFiltered"     =>     $this->mdl_admin->customer_get_filtered_data(),  
                "data"                    =>     $data  
           );  
           echo json_encode($output); 

           }
       else{
        redirect('admin/login');
    }
}

// end customer list

public function block_customer()
{
    if( $this->session->userdata('user_type') == 'Admin')
    {
    $id = $this->input->post('id');

    $data = array(
            'status' => 'Block'
        );
    $result = update_data('tbl_customers',$data, $id);
    if($result)
    {
        echo "Customer Blocked Successfully";
    }
    else{
        echo 'Sorry! Customer Not Blocked';
    }

    }
    else{
        redirect('admin/login');
    }
}

public function unblock_customer()
{
    if( $this->session->userdata('user_type') == 'Admin')
    {
    $id = $this->input->post('id');

    $data = array(
            'status' => 'Active'
        );
    $result = update_data('tbl_customers',$data, $id);
    if($result)
    {
        echo "Customer Active Successfully";
    }
    else{
        echo 'Sorry! Customer Not Activated';
    }

    }
    else{
        redirect('admin/login');
    }
}


// shop code

public function shops()
{
  if($this->session->userdata('user_type') == 'Admin' )
    {
    $data['view_module'] = "admin";
    $data['view_files'] = "shops";
    $this->load->module("templates");
    $this->templates->admin($data);

     }
    else{
        redirect('admin/login');
    }

}

// customer list

public function shops_list()
{
    if( $this->session->userdata('user_type') == 'Admin')
    {

        $this->load->model("mdl_admin");  
           $fetch_data = $this->mdl_admin->shop_make_datatables();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $status = $row->status;
                $image = $row->shop_image;
                $shop_img = '<img src="'.base_url().'/shop_images/'.$image.'" style="width:50px; height: 50px;">';

                if($row->status == 'Active'){
                    $butt = '<a href="#" id = "'.$row->id.'" name="block_shop" class="btn btn-danger btn-xs block_shop">Block</a>';
                }
                else if($status == 'Block'){
                    $butt = '<a href="#" id = "'.$row->id.'" name="unblock_shop" class="btn btn-info btn-xs unblock_shop">UnBlock</a>';
                }
                $sub_array = array();   
                $sub_array[] = $row->id;  
                $sub_array[] = $row->shop_name;     
                $sub_array[] = $shop_img;     
                $sub_array[] = $row->phone_number;     
                $sub_array[] = $row->email;     
                $sub_array[] = $row->address;     
                $sub_array[] = $row->status;     
                $sub_array[] = $row->created_at;  
                $sub_array[] = ''.$butt.' '.'<a href="'.base_url().'admin/shop_detail/'.$row->id.'" class="btn btn-info btn-xs">Detail</a> <a href="'.base_url().'admin/update_shop/'.$row->id.'" class="btn btn-info btn-xs">Update Shop Info</a>';   
                  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                    =>     intval($_POST["draw"]),  
                "recordsTotal"          =>      $this->mdl_admin->shop_get_all_data(),  
                "recordsFiltered"     =>     $this->mdl_admin->shop_get_filtered_data(),  
                "data"                    =>     $data  
           );  
           echo json_encode($output); 

           }
       else{
        redirect('admin/login');
    }
}

// end customer list

public function block_shop()
{
    if( $this->session->userdata('user_type') == 'Admin')
    {
    $id = $this->input->post('id');

    $data = array(
            'status' => 'Block'
        );
    $result = update_data('tbl_shops',$data, $id);
    if($result)
    {
        echo "shop Blocked Successfully";
    }
    else{
        echo 'Sorry! shop Not Blocked';
    }

    }
    else{
        redirect('admin/login');
    }
}

public function unblock_shop()
{
    if( $this->session->userdata('user_type') == 'Admin')
    {
    $id = $this->input->post('id');

    $data = array(
            'status' => 'Active'
        );
    $result = update_data('tbl_shops',$data, $id);
    if($result)
    {
        echo "Customer Active Successfully";
    }
    else{
        echo 'Sorry! Customer Not Activated';
    }

    }
    else{
        redirect('admin/login');
    }
}

public function add_shop()
{  
    if( $this->session->userdata('user_type') == 'Admin')
    {
        $password = $this->input->post('shop_password');
        $data = array(
            'shop_name' => $this->input->post('shop_name'),
            'phone_number' => $this->input->post('shop_phone'),
            'password' => md5($password),
            'email' => $this->input->post('shop_email'),
            'address' => $this->input->post('shop_address'),
        );

        // $result = save_data('tbl_shops', $data);
                $this->image_config('shop_images');
               // $upload = $this->upload->do_upload('music');
               
               
                if(!$this->upload->do_upload('shop_image'))
                {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error_msg', $error);
                    redirect('admin/shops');

                   
                }
                else
                {
                    
                    $filename = $this->upload->data();
                    $new_name = $filename['file_name'];
                    $data['shop_image'] = $filename['file_name']; //time().$filename['file_name'];
                    $returnCatValue = save_data('tbl_shops', $data);
                    if($returnCatValue)
                    {
                        $this->session->set_flashdata('success', 'Shop Created Successfully.');
                        redirect('admin/shops');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Shop Not Added Due to Error.');
                        redirect('admin/shops');
                    }
                }

    }
    else{
        redirect('admin/login');
    }

}

public function shop_detail($id)
{
    if($this->session->userdata('user_type') == 'Admin' )
    {

    $where = 'id = '.$id.'';
    $data['shopname'] = select_columns('shop_name', 'tbl_shops', $where);
    $data['category'] = get_query_data('SELECT *, tbl_product_category.id as cat_id FROM tbl_shop_categories JOIN tbl_product_category on tbl_product_category.id = tbl_shop_categories.category_id WHERE status = "Active"');
    $data['sub_category'] = get_query_data('SELECT * FROM tbl_product_sub_category WHERE status = "Active"');
    $data['title'] = "Shop Detail";
    $data['view_module'] = "admin";
    $data['view_files'] = "shop_detail";
    $this->load->module("templates");
    $this->templates->admin($data);

     }
    else{
        redirect('admin/login');
    }

}

public function fetch_sub_cat()
{
    $cat = $this->input->post('category_id');

    $data = get_query_data('SELECT * FROM tbl_product_sub_category WHERE category_id = '.$cat.'');

    $output = '<option value="">Please Select Sub Category</option>';

    foreach ($data as $values) {

        $output .= '<option value="'.$values->id.'">'.$values->sub_cat_name.'</option>';
    }
    // print_r($output);
    // exit();
    echo $output;
}

public function product_category($id)
{  
    if( $this->session->userdata('user_type') == 'Admin')
    {

        $submit = $this->input->post('submit');

        if($submit == 'Submit'){
        $data = array(
            'category_name' => $this->input->post('category_name'),
        );

                $this->image_config('product_images');
               // $upload = $this->upload->do_upload('music');
               
               
                if(!$this->upload->do_upload('category_image'))
                {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error_msg', $error);
                    redirect('admin/product_category');
                }
                else
                {
                    $filename = $this->upload->data();
                    $new_name = $filename['file_name'];
                    $data['category_image'] = $filename['file_name']; //time().$filename['file_name'];
                    $returnCatValue = save_data('tbl_product_category', $data);
                    if($returnCatValue)
                    {
                        $this->session->set_flashdata('success', 'Product Category Added Successfully.');
                        redirect('admin/product_category');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Product Category Not Added Due to Error.');
                        redirect('admin/product_category');
                    }
                }
        }

        if($submit == 'Update'){
                $data = array(
                     'category_name' => $this->input->post('category_name')
                );

                $this->image_config('product_images');
                $this->upload->do_upload('category_image');
                $filename = $this->upload->data();
                $file = $filename['file_name'];


                if($file == ''){

                 $returnCatValue = update_data('tbl_product_category', $data, $id);

                }
                else{
                    $this->image_config('product_images');
                    $this->upload->do_upload('category_image');
                    $filename = $this->upload->data();
                    $new_name = $filename['file_name'];
                    $data['category_image'] = $filename['file_name']; //time().$filename['file_name'];
                    $returnCatValue = update_data('tbl_product_category', $data, $id);
                }


                    if($returnCatValue)
                    {
                        $this->session->set_flashdata('success', 'Product Updated Successfully.');
                        redirect('admin/product_category/'.$id.'');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Product Category Not Updated Due to Error.');
                        redirect('admin/product_category/'.$id.'');
                    }


        }

    if($id !=''){
           $data['category_data'] = get_query_data('SELECT * FROM tbl_product_category WHERE id = '.$id.'');
    }
 
    $data['title'] = "Items";
    $data['view_module'] = "admin";
    $data['view_files'] = "product_category";
    $this->load->module("templates");
    $this->templates->admin($data);

    }
    else{
        redirect('admin/login');
    }

}

public function add_shop_product()
{

    if( $this->session->userdata('user_type') == 'Admin')
    {
        $data = array(

            'shop_id' => $this->input->post('shop_id'),
            'category_id' => $this->input->post('shop_category_id'),
            'sub_category_id' => $this->input->post('sub_category_id'),
            'price' => $this->input->post('price'),
            'description' => $this->input->post('description'),
        );

                    $returnCatValue = save_data('tbl_shop_products', $data);
                    if($returnCatValue)
                    {
                        $this->session->set_flashdata('success', 'Shop Product Added Successfully.');
                        redirect('admin/shop_detail/'.$id.'');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Product Not Added Due to Error.');
                        redirect('admin/shop_detail/'.$id.'');
                    }
                

    }
    else{
        redirect('admin/login');
    }

}

public function category_list()
{
    if( $this->session->userdata('user_type') == 'Admin')
    {

        $this->load->model("mdl_admin");  
           $fetch_data = $this->mdl_admin->category_make_datatables();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $status = $row->status;
                $image = '<img src="'.base_url().'/product_images/'.$row->category_image.'" style="width:50px; height:50px;">';
             
                $sub_array = array();   
                $sub_array[] = $row->id;   
                $sub_array[] = $row->category_name;      
                $sub_array[] = $image;      
                $sub_array[] = $row->status;     
                $sub_array[] = $row->created_at;  
                $sub_array[] = '<a href="#" id = "'.$row->id.'" name="delete_category" class="btn btn-danger btn-xs delete_category">Delete</a>'.'<a href="'.base_url().'admin/product_category/'.$row->id.'" class="btn btn-info btn-xs">Update</a>';   
                  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                    =>     intval($_POST["draw"]),  
                "recordsTotal"          =>      $this->mdl_admin->category_get_all_data(),  
                "recordsFiltered"     =>     $this->mdl_admin->category_get_filtered_data(),  
                "data"                    =>     $data  
           );  
           echo json_encode($output); 

           }
       else{
        redirect('admin/login');
    }
}

public function shop_product_list($id)
{
    if( $this->session->userdata('user_type') == 'Admin')
    {
    
     

        $this->load->model("mdl_admin");  
           $fetch_data = $this->mdl_admin->product_make_datatables($id);  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $status = $row->status;
                $image = '<img src="'.base_url().'/product_images/'.$row->sub_image.'" style="width:50px; height:50px;">';
                if($row->status == 'Active'){
                    $butt = '<a href="#" id = "'.$row->id.'" name="block_product" class="btn btn-danger btn-xs block_product">Block</a>';
                }
                else if($status == 'Block'){
                    $butt = '<a href="#" id = "'.$row->id.'" name="unblock_product" class="btn btn-info btn-xs unblock_product">UnBlock</a>';
                }
                $sub_array = array();   
                $sub_array[] = $row->id;   
                $sub_array[] = $row->category_name;  
                $sub_array[] = $row->sub_cat_name;     
                $sub_array[] = $image;        
                $sub_array[] = $row->price;     
                $sub_array[] = $row->description;     
                $sub_array[] = $row->status;     
                $sub_array[] = $row->created_at;  
                $sub_array[] = ''.$butt.' '.'<a href="'.base_url().'admin/product_detail/'.$row->id.'" class="btn btn-info btn-xs">Update</a>';   
                  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                    =>     intval($_POST["draw"]),  
                "recordsTotal"          =>      $this->mdl_admin->product_get_all_data($id),  
                "recordsFiltered"     =>     $this->mdl_admin->product_get_filtered_data($id),  
                "data"                    =>     $data  
           );  
           echo json_encode($output); 

           }
       else{
        redirect('admin/login');
    }
}

// notification code

public function notification()
{  
    if( $this->session->userdata('user_type') == 'Admin')
    {

        $submit = $this->input->post('submit');

        if($submit == 'Submit'){
        $data = array(
            'notification' => $this->input->post('notification'),
            'promo_code' => $this->input->post('promo_code'),
            'promo_price' => $this->input->post('promo_price'),
        );

                $this->image_config('product_images');
               // $upload = $this->upload->do_upload('music');
               
               
                if(!$this->upload->do_upload('notification_image'))
                {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error_msg', $error);
                    redirect('admin/notification');
                }
                else
                {
                    $filename = $this->upload->data();
                    $new_name = $filename['file_name'];
                    $data['notification_image'] = $filename['file_name']; //time().$filename['file_name'];
                    $returnCatValue = save_data('tbl_notification', $data);
                    if($returnCatValue)
                    {
                        $this->session->set_flashdata('success', 'Notifaction Added Successfully.');
                        redirect('admin/notification');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Notificaiton Not Added Due to Error.');
                        redirect('admin/notification');
                    }
                }
        }



    $data['title'] = "Items";
    $data['view_module'] = "admin";
    $data['view_files'] = "notification";
    $this->load->module("templates");
    $this->templates->admin($data);

    }
    else{
        redirect('admin/login');
    }

}


public function notification_list()
{
    if( $this->session->userdata('user_type') == 'Admin')
    {

        $this->load->model("mdl_admin");  
           $fetch_data = $this->mdl_admin->notification_make_datatables();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $status = $row->status;
                $image = '<img src="'.base_url().'/product_images/'.$row->notification_image.'" style="width:50px; height:50px;">';

                if($row->status == 'Active'){
                    $butt = '<a href="#" id = "'.$row->id.'" name="block_product" class="btn btn-danger btn-xs block_product">Block</a>';
                }
                else if($status == 'Block'){
                    $butt = '<a href="#" id = "'.$row->id.'" name="unblock_product" class="btn btn-info btn-xs unblock_product">UnBlock</a>';
                }
                $sub_array = array();   
                $sub_array[] = $row->id;   
                $sub_array[] = $row->notification;  
                $sub_array[] = $row->promo_code;     
                $sub_array[] = $row->promo_price;     
                $sub_array[] = $image;         
                $sub_array[] = $row->status;     
                $sub_array[] = $row->created_at;  
                $sub_array[] = ''.$butt.' '.'<a href="'.base_url().'admin/product_detail/'.$row->id.'" class="btn btn-info btn-xs">Update</a>';   
                  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                    =>     intval($_POST["draw"]),  
                "recordsTotal"          =>      $this->mdl_admin->notification_get_all_data(),  
                "recordsFiltered"     =>     $this->mdl_admin->notification_get_filtered_data(),  
                "data"                    =>     $data  
           );  
           echo json_encode($output); 

           }
       else{
        redirect('admin/login');
    }
}
// end notification code


// Sub category Code


public function product_sub_category($id)
{  
    if( $this->session->userdata('user_type') == 'Admin')
    {

        $submit = $this->input->post('submit');

        if($submit == 'Submit'){
        $data = array(
            'category_id' => $this->input->post('category_id'),
            'sub_cat_name' => $this->input->post('sub_cat_name'),
            'type' => $this->input->post('type'),
            'price' => $this->input->post('price'),
        );

                $this->image_config('product_images');
               // $upload = $this->upload->do_upload('music');
               
               
                if(!$this->upload->do_upload('sub_image'))
                {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error_msg', $error);
                    redirect('admin/product_sub_category');
                }
                else
                {
                    $filename = $this->upload->data();
                    $new_name = $filename['file_name'];
                    $data['sub_image'] = $filename['file_name']; //time().$filename['file_name'];
                    $returnCatValue = save_data('tbl_product_sub_category', $data);
                    if($returnCatValue)
                    {


                        $this->session->set_flashdata('success', 'Product Category Added Successfully.');
                        redirect('admin/product_sub_category');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Product Category Not Added Due to Error.');
                        redirect('admin/product_sub_category');
                    }
                }
        }

                if($submit == 'Update'){
                        $data = array(
                                'category_id' => $this->input->post('category_id'),
                                'sub_cat_name' => $this->input->post('sub_cat_name'),
                                'type' => $this->input->post('type'),
                                'price' => $this->input->post('price'),
                            );

                        $this->image_config('product_images');
                        $this->upload->do_upload('sub_image');
                        $filename = $this->upload->data();
                        $file = $filename['file_name'];


                        if($file == ''){

                         $returnCatValue = update_data('tbl_product_sub_category', $data, $id);

                        }
                        else{
                            $this->image_config('product_images');
                            $this->upload->do_upload('sub_image');
                            $filename = $this->upload->data();
                            $new_name = $filename['file_name'];
                            $data['sub_image'] = $filename['file_name']; //time().$filename['file_name'];
                            $returnCatValue = update_data('tbl_product_sub_category', $data, $id);
                        }

                    if($returnCatValue)
                    {
                        $this->session->set_flashdata('success', 'Product Updated Successfully.');
                        redirect('admin/product_sub_category/'.$id.'');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Product Category Not Updated Due to Error.');
                        redirect('admin/product_sub_category/'.$id.'');
                    }


        }

    if($id !=''){
           $data['sub_category_data'] = get_query_data('SELECT * FROM tbl_product_sub_category JOIN tbl_product_category on tbl_product_category.id = tbl_product_sub_category.category_id WHERE tbl_product_sub_category.id = '.$id.'');
    }


    $data['category'] = get_query_data('SELECT * FROM tbl_product_category where status = "Active"');
    $data['product_type'] = get_query_data('SELECT * FROM tbl_product_type where status = "Active"');
    $data['title'] = "Items";
    $data['view_module'] = "admin";
    $data['view_files'] = "product_sub_category";
    $this->load->module("templates");
    $this->templates->admin($data);

    }
    else{
        redirect('admin/login');
    }

}

// end product sub category

// sub category list
public function sub_category_list()
{
    if( $this->session->userdata('user_type') == 'Admin')
    {

        $this->load->model("mdl_admin");  
           $fetch_data = $this->mdl_admin->sub_category_make_datatables();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $status = $row->status;
                $image = '<img src="'.base_url().'/product_images/'.$row->sub_image.'" style="width:50px; height:50px;">';
                
                $sub_array = array();   
                $sub_array[] = $row->id;   
                $sub_array[] = $row->category_name;   
                $sub_array[] = $row->sub_cat_name;      
                $sub_array[] = $row->type;      
                $sub_array[] = $image;      
                $sub_array[] = $row->status;     
                $sub_array[] = $row->created_at;  
                $sub_array[] = '<a href="#" id = "'.$row->id.'" name="delete_sub_category" class="btn btn-danger btn-xs delete_sub_category">Delete</a> '.'<a href="'.base_url().'admin/product_sub_category/'.$row->id.'" class="btn btn-info btn-xs">Update</a>';   
                  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                    =>     intval($_POST["draw"]),  
                "recordsTotal"          =>      $this->mdl_admin->sub_category_get_all_data(),  
                "recordsFiltered"     =>     $this->mdl_admin->sub_category_get_filtered_data(),  
                "data"                    =>     $data  
           );  
           echo json_encode($output); 

           }
       else{
        redirect('admin/login');
    }
}


// end sub category

// product type
public function product_type()
{  
    if( $this->session->userdata('user_type') == 'Admin')
    {

        $submit = $this->input->post('submit');

        if($submit == 'Submit'){
        $data = array(
            'product_type' => $this->input->post('product_type'),
        );

       
                    $returnCatValue = save_data('tbl_product_type', $data);
                    if($returnCatValue)
                    {
                        $this->session->set_flashdata('success', 'Product Type Added Successfully.');
                        redirect('admin/product_type');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Product Type Not Added Due to Error.');
                        redirect('admin/product_type');
                    }
                }
                    $data['product_type'] = get_query_data('SELECT * FROM tbl_product_type where status = "Active"');
    $data['title'] = "Product Type";
    $data['view_module'] = "admin";
    $data['view_files'] = "product_type";
    $this->load->module("templates");
    $this->templates->admin($data);
        }




    
    else{
        redirect('admin/login');
    }

}


// end product type

// delete product type

public function delete_product_type($id)
{
    if( $this->session->userdata('user_type') == 'Admin')
    {
            $result = delete_data('tbl_product_type', $id);

            if($result)
                    {
                        $this->session->set_flashdata('success', 'Product Type Deleted Successfully.');
                        redirect('admin/product_type');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Product Type Not Deleted Due to Error.');
                        redirect('admin/product_type');
                    }



    }
    else{
        redirect('admin/login');
    }

}

// end delete product tyope


// update shop info

public function update_shop($id)
{  
    if( $this->session->userdata('user_type') == 'Admin')
    {

        $submit = $this->input->post('submit');
        if($submit == 'Update'){


        $password = $this->input->post('shop_password');
        $data = array(
            'shop_name' => $this->input->post('shop_name'),
            'phone_number' => $this->input->post('shop_phone'),
            'email' => $this->input->post('shop_email'),
            'address' => $this->input->post('shop_address'),
        );


         $this->image_config('shop_images');
                $this->upload->do_upload('shop_image');
                $filename = $this->upload->data();
                $file = $filename['file_name'];


                if($file == ''){

                 $returnCatValue = update_data('tbl_shops', $data, $id);

                }
                else{
                    $this->image_config('shop_images');
                    $this->upload->do_upload('shop_image');
                    $filename = $this->upload->data();
                    $new_name = $filename['file_name'];
                    $data['shop_image'] = $filename['file_name']; //time().$filename['file_name'];
                    $returnCatValue = update_data('tbl_shops', $data, $id);
                }
           
                    if($returnCatValue)
                    {
                        $this->session->set_flashdata('success', 'Shop Updated Successfully.');
                        redirect('admin/shops');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Shop Not Updated Due to Error.');
                        redirect('admin/shops');
                    }
                
                


                }

    $data['shop_data'] = get_query_data('SELECT * FROM tbl_shops');
    $data['title'] = "Shop Information";
    $data['view_module'] = "admin";
    $data['view_files'] = "update_shop";
    $this->load->module("templates");
    $this->templates->admin($data);

    }
    else{
        redirect('admin/login');
    }

}


// end update shop info

// change shop_password

public function change_shop_password($id)
{
    if( $this->session->userdata('user_type') == 'Admin')
    {
        $id = $this->input->post('shop_id');
        $password = $this->input->post('shop_password');
        $confirm_password = $this->input->post('confirm_shop_password');

        if($password == $confirm_password){

            $data = array(
                    'password' => md5($password)
            );

            $result = update_data('tbl_shops', $data, $id);
            if($result){
                $this->session->set_flashdata('success', 'Password Changed Successfully.');
                redirect('admin/update_shop/'.$id.'');

            }
            else{
                $this->session->set_flashdata('error_msg', 'Password Not Changed Due to Error. Please Try Again.');
                redirect('admin/update_shop/'.$id.'');
            }

        }
        else{
                $this->session->set_flashdata('error_msg', 'Password Not Matched Please Try Again.');
                redirect('admin/update_shop/'.$id.'');
        }

    }
    else{
         redirect('admin/login');
    }
}
// end change shop password

// delete category
    public function delete_category()
{
    if( $this->session->userdata('user_type') == 'Admin')
    {
    $id = $this->input->post('id');

    $result = delete_data('tbl_product_category', $id);
    if($result)
    {
        echo "Category Deleted Successfully";
    }
    else{
        echo 'Sorry! Category Not Deleted';
    }

    }
    else{
        redirect('admin/login');
    }
}

// end delete category

// delete category
    public function delete_sub_category()
{
    if( $this->session->userdata('user_type') == 'Admin')
    {
    $id = $this->input->post('id');

    $result = delete_data('tbl_product_sub_category', $id);
    if($result)
    {
        echo "Category Deleted Successfully";
    }
    else{
        echo 'Sorry! Category Not Deleted';
    }

    }
    else{
        redirect('admin/login');
    }
}

// end delete category


// add category to shop
    public function add_category_shop($id)
{  
    if( $this->session->userdata('user_type') == 'Admin')
    {

        $submit = $this->input->post('submit');

        if($submit == 'Submit'){
        $data = array(
            'category_id' => $this->input->post('category_id'),
            'shop_id' => $this->input->post('shop_id'),
        );

                    $returnCatValue = save_data('tbl_shop_categories', $data);
                    if($returnCatValue)
                    {
                        $this->session->set_flashdata('success', 'Category Successfully Added to Shop.');
                        redirect('admin/add_category_shop/'.$id.'');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Category Not Added Due to Error.');
                        redirect('admin/add_category_shop/'.$id.'');
                    }
                
        }

    $data['category_data'] = get_query_data('SELECT * FROM tbl_product_category WHERE status = "Active"');
    $data['title'] = "Add Category to Shop";
    $data['view_module'] = "admin";
    $data['view_files'] = "add_category_shop";
    $this->load->module("templates");
    $this->templates->admin($data);

    }
    else{
        redirect('admin/login');
    }

}

// end add category to shop

// list of shop category
public function shop_category_list($id)
{
    if( $this->session->userdata('user_type') == 'Admin')
    {

        $this->load->model("mdl_admin");  
           $fetch_data = $this->mdl_admin->shop_category_make_datatables($id);  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $image = '<img src="'.base_url().'/product_images/'.$row->category_image.'" style="width:50px; height:50px;">';
                
                $shop_array = array();   
                $shop_array[] = $row->id;   
                $shop_array[] = $row->shop_name;   
                $shop_array[] = $row->category_name;          
                $shop_array[] = $image;         
                $shop_array[] = $row->created_at;  
                $shop_array[] = '<a href="#" id = "'.$row->id.'" name="delete_shop_category" class="btn btn-danger btn-xs delete_shop_category">Delete</a>';   
                  
                $data[] = $shop_array;  
           }  
           $output = array(  
                "draw"                    =>     intval($_POST["draw"]),  
                "recordsTotal"          =>      $this->mdl_admin->shop_category_get_all_data($id),  
                "recordsFiltered"     =>     $this->mdl_admin->shop_category_get_filtered_data($id),  
                "data"                    =>     $data  
           );  
           echo json_encode($output); 

           }
       else{
        redirect('admin/login');
    }
}

// end list of shop category


// delete shop category
    public function delete_shop_category()
{
    if( $this->session->userdata('user_type') == 'Admin')
    {
    $id = $this->input->post('id');

    $result = delete_data('tbl_shop_categories', $id);
    if($result)
    {
        echo "Category Deleted Successfully";
    }
    else{
        echo 'Sorry! Category Not Deleted';
    }

    }
    else{
        redirect('admin/login');
    }
}

// end delete shop category





}
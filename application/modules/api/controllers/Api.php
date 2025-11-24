<?php
class Api extends MX_Controller 
{

function __construct() {
parent::__construct();
}

public function customer_login()
{
    $phone_number = post('phone_number');
    // $password = post('password');
    if( if_empty($phone_number)){
        echo e_response('Phone Number required.');
    }else{
        $where = "phone_number='".$phone_number."'";
        $data = select_data('tbl_customers', $where);
        if($data == true){

            $where = "phone_number='".$phone_number."' AND mobile_status = 'offline'";
            $result = select_data('tbl_customers', $where);

            if($result == true){

                $status = array('mobile_status' => 'online');
                $res = update_data('tbl_customers',$status,$data[0]->id);
                if($res){
                    $where = "phone_number='".$phone_number."' AND mobile_status = 'online'";
                    $getdata = select_data('tbl_customers', $where);

                 $data_array['customer_id'] = $getdata[0]->id;
                 $data_array['customer_name'] = $getdata[0]->customer_name;
                 $data_array['phone_number'] = $getdata[0]->phone_number;
                 $data_array['email'] = $getdata[0]->email;
                 $data_array['customer_image'] = $getdata[0]->customer_image;
                 $data_array['address'] = $getdata[0]->address;
                 $data_array['mobile_status'] = $getdata[0]->mobile_status;
                 $data_array['status'] = $getdata[0]->status;
                 $response_data[] = $data_array;
                 echo json_encode(array('status' => 'success',
                                 'errorCode' => 0,
                                 'message' => 'Successfully logged in.', 
                                 'data' => $response_data));
             }else{
                echo e_response('Sorry! Data Not Found Due to Error.');
             }
            }
            else{

                echo e_response('You are all ready Logged in.');
            }       
    }
    else{

        $data = array(
                'phone_number' => $phone_number,
                'mobile_status' => 'online'
        );

        $result = save_data('tbl_customers', $data);
        if($result){
            $where = "id='".$result."' AND mobile_status = 'online'";
            $result = select_data('tbl_customers', $where);

                $data_array['customer_id'] = $result[0]->id;
                 $data_array['customer_name'] = $result[0]->customer_name;
                 $data_array['phone_number'] = $result[0]->phone_number;
                 $data_array['email'] = $result[0]->email;
                 $data_array['customer_image'] = $result[0]->customer_image;
                 $data_array['address'] = $result[0]->address;
                 $data_array['mobile_status'] = $result[0]->mobile_status;
                 $data_array['status'] = $result[0]->status;
                 $response_data[] = $data_array;
                 echo json_encode(array('status' => 'success',
                                 'errorCode' => 0,
                                 'message' => 'Your Account Successfully Created.', 
                                 'data' => $response_data));

        }
      
    }
    

}
}

// Customer Logout API

public function customer_logout_api()
{
    $phone_number = post('phone_number');
    // $password = post('password');
    if( if_empty($phone_number)){
        echo e_response('Phone Number required.');
    }else{
                
                $where = "phone_number='".$phone_number."' AND mobile_status = 'online'";
                $result = select_data('tbl_customers', $where);
                if($result == true){

                    $data = array('mobile_status' => 'offline');
                    update_data('tbl_customers', $data, $result[0]->id);

                         echo json_encode(array('status' => 'success',
                                         'errorCode' => 0,
                                         'message' => 'Logout Successfully.',
                                         'data_list' => ''));

                }
                else{
                    echo e_response('your are Allready logged out.');
                }
                
    }

}


// End customer Logout API

// Customer Profile API
public function customer_profile_api()
{
    $phone_number = post('phone_number');
    $customer_name = post('customer_name');
    $email = post('email');
    $address = post('address');

    // $password = post('password');
    if( if_empty($phone_number)){
        echo e_response('Phone Number required.');
    }else{
                
                $where = "phone_number='".$phone_number."' AND mobile_status = 'online'";
                $result = select_data('tbl_customers', $where);
                if($result == true){

                    $data = array(
                        'customer_name' => $customer_name,
                        'email' => $email,
                        'address' => $address
                    );
                    update_data('tbl_customers', $data, $result[0]->id);

                         echo json_encode(array('status' => 'success',
                                         'errorCode' => 0,
                                         'message' => 'Profile Updated Successfully.',
                                         'data_list' => ''));

                }
                else{
                    echo e_response('Please Login First!.');
                }
                
    }

}

// End Customer Profile API

public function shops_api()
{
    $key = '12345';
    if( if_empty($key)){
        echo e_response('Key is Required');
    }else{
                $sql_query = get_query_data("SELECT * FROM tbl_shops where status = 'Active'");
                if($sql_query > 0){
                     $shop_data = array();
                     foreach ($sql_query as $values):
                       $shop_data['id'] = $values->id;
                       $shop_data['shop_name'] = $values->shop_name;
                       $shop_data['shop_image'] = $values->shop_image;
                       $shop_data['phone_number'] = $values->phone_number;
                       $shop_data['address'] = $values->address;
                       $shop_data['email'] = $values->email;
                       $shop_data['status'] = $values->status;
                       $shop_array[] = $shop_data;
                     endforeach;

                    echo json_encode(array('status' => 'success',
                                         'errorCode' => 0,
                                         'message' => 'Shops Found.',
                                         'data_list' => $shop_array));
                }else{
                    echo json_encode(array('status' => 'failed',
                                         'errorCode' => 1,
                                         'message' => 'Shops Not Found.',
                                         'data_list' => ''));
                }
    }
}

public function category_api()
{
    $key = '12345';
    if( if_empty($key)){
        echo e_response('Key is Required');
    }else{
                $sql_query = get_query_data("SELECT * FROM tbl_product_category where status = 'Active'");
                if($sql_query > 0){
                     $shop_data = array();
                     foreach ($sql_query as $values):
                       $shop_data['id'] = $values->id;
                       $shop_data['category_name'] = $values->category_name;
                       $shop_data['category_image'] = $values->category_image;
                       $shop_array[] = $shop_data;
                     endforeach;

                    echo json_encode(array('status' => 'success',
                                         'errorCode' => 0,
                                         'message' => 'Shops Cateogy Found.',
                                         'data_list' => $shop_array));
                }else{
                    echo json_encode(array('status' => 'failed',
                                         'errorCode' => 1,
                                         'message' => 'Category Not Found.',
                                         'data_list' => ''));
                }
    }
}

public function shops_category_api()
{
    $shop_id = post('shop_id');
    $key = '12345';
    if( if_empty($key)){
        echo e_response('Key is Required');
    }else{
                $sql_query = get_query_data("SELECT * FROM tbl_shop_categories JOIN tbl_product_category on tbl_product_category.id = tbl_shop_categories.category_id where shop_id = ".$shop_id."");
                if($sql_query > 0){
                     $shop_data = array();
                     foreach ($sql_query as $values):
                       $shop_data['id'] = $values->id;
                       $shop_data['category_name'] = $values->category_name;
                       $shop_data['category_image'] = $values->category_image;
                       $shop_array[] = $shop_data;
                     endforeach;

                    echo json_encode(array('status' => 'success',
                                         'errorCode' => 0,
                                         'message' => 'Shops Cateogy Found.',
                                         'data_list' => $shop_array));
                }else{
                    echo json_encode(array('status' => 'failed',
                                         'errorCode' => 1,
                                         'message' => 'Category Not Found.',
                                         'data_list' => ''));
                }
    }
}

public function shops_product_api()
{
    $shop_id = post('shop_id');
    $category_id = post('category_id');
    $key = '12345';
    if( if_empty($key)){
        echo e_response('Key is Required');
    }else{
                $sql_query = get_query_data("SELECT *, tbl_shop_products.price as product_price FROM tbl_shop_products JOIN tbl_product_sub_category on tbl_product_sub_category.id = tbl_shop_products.sub_category_id where shop_id = ".$shop_id." AND tbl_shop_products.category_id = ".$category_id." AND tbl_shop_products.status = 'Active'");
                if($sql_query){
                     $shop_data = array();
                     foreach ($sql_query as $values):
                       $shop_data['id'] = $values->id;
                       $shop_data['product_name'] = $values->sub_cat_name;
                       $shop_data['product_image'] = $values->sub_image;
                       $shop_data['price'] = $values->product_price;
                       $shop_data['type'] = $values->type;
                       $shop_data['description'] = $values->description;
                       $shop_array[] = $shop_data;
                     endforeach;

                    echo json_encode(array('status' => 'success',
                                         'errorCode' => 0,
                                         'message' => 'Shops Product Found.',
                                         'data_list' => $shop_array));
                }else{
                    echo json_encode(array('status' => 'failed',
                                         'errorCode' => 1,
                                         'message' => 'Shops Product Not Found.',
                                         'data_list' => ''));
                }
    }
}

public function notification_api()
{
    $key = '12345';
    if( if_empty($key)){
        echo e_response('Key is Required');
    }else{
                $sql_query = get_query_data("SELECT * FROM tbl_notification where status = 'Active' ORDER BY created_at DESC");
                if($sql_query){
                     $shop_data = array();
                     foreach ($sql_query as $values):
                       $shop_data['id'] = $values->id;
                       $shop_data['notification'] = $values->notification;
                       $shop_data['promo_code'] = $values->promo_code;
                       $shop_data['notification_image'] = $values->notification_image;
                       $shop_data['status'] = $values->status;
                       $shop_data['created_at'] = $values->created_at;
                       $shop_array[] = $shop_data;
                     endforeach;

                    echo json_encode(array('status' => 'success',
                                         'errorCode' => 0,
                                         'message' => 'Notification Found.',
                                         'data_list' => $shop_array));
                }else{
                    echo json_encode(array('status' => 'failed',
                                         'errorCode' => 1,
                                         'message' => 'Notification Not Found.',
                                         'data_list' => ''));
                }
    }
}

public function sub_category_api()
{
    $category_id = post('category_id');
    $key = '12345';
    if( if_empty($key) || if_empty($category_id)){
        echo e_response('Key is Required');
    }else{
                $sql_query = get_query_data("SELECT * FROM tbl_product_sub_category where status = 'Active' AND category_id = '".$category_id."' ORDER BY created_at DESC");
                if($sql_query){
                     $shop_data = array();
                     foreach ($sql_query as $values):
                       $shop_data['id'] = $values->id;
                       $shop_data['sub_cat_name'] = $values->sub_cat_name;
                       $shop_data['type'] = $values->type;
                       $shop_data['price'] = $values->price;
                       $shop_data['sub_image'] = $values->sub_image;
                       $shop_data['status'] = $values->status;
                       $shop_array[] = $shop_data;
                     endforeach;

                    echo json_encode(array('status' => 'success',
                                         'errorCode' => 0,
                                         'message' => 'Sub Categories Found.',
                                         'data_list' => $shop_array));
                }else{
                    echo json_encode(array('status' => 'failed',
                                         'errorCode' => 1,
                                         'message' => 'Sub Categories Not Found.',
                                         'data_list' => ''));
                }
    }
}

public function add_product_api()
{
    $shop_id = post('shop_id');
    $category_id = post('category_id');
    $sub_category_id = post('sub_category_id');
    $price = post('price');
    $description = post('description');
    $key = '12345';
    if( if_empty($key) || if_empty($category_id) || if_empty($shop_id) || if_empty($sub_category_id)){
        echo e_response('Key is Required');
    }else{

        $where = "shop_id='".$shop_id."' AND sub_category_id = '".$sub_category_id."'";
        $data1 = select_data('tbl_shop_products', $where);

        if($data1 == true){
             echo json_encode(array('status' => 'failed',
                                    'errorCode' => 2,
                                    'message' => 'Sorry! Product already exist. Please add new Product.',
                                    'data_list' => ''));
        }
        else{



                $data = array(
                            'shop_id' => $shop_id,
                            'category_id' => $category_id,
                            'sub_category_id' => $sub_category_id,
                            'price' => $price,
                            'description' => $description
                );

                $result = save_data('tbl_shop_products', $data);
                if($result){
                    echo json_encode(array('status' => 'success',
                                         'errorCode' => 0,
                                         'message' => 'Product Successfully Added to Shop.',
                                         'data_list' => ''));
                }
                else{
                    echo json_encode(array('status' => 'failed',
                                         'errorCode' => 1,
                                         'message' => 'Sorry! Product Not Added Due to error. Please try again later.',
                                         'data_list' => ''));
                }
            }
    }
}

public function all_shop_products_api()
{
    $shop_id = post('shop_id');
    $key = '12345';
    if( if_empty($key) || if_empty($shop_id)){
        echo e_response('Key is Required');
    }else{
                $sql_query = get_query_data("SELECT * FROM tbl_shop_products JOIN tbl_product_sub_category on tbl_product_sub_category.id = tbl_shop_products.sub_category_id where tbl_shop_products.status = 'Active' AND shop_id = '".$shop_id."' ORDER BY tbl_shop_products.created_at DESC");
                if($sql_query){
                     $shop_data = array();
                     foreach ($sql_query as $values):
                       $shop_data['product_id'] = $values->id;
                       $shop_data['sub_cat_name'] = $values->sub_cat_name;
                       $shop_data['type'] = $values->type;
                       $shop_data['sub_image'] = $values->sub_image;
                       $shop_data['price'] = $values->price;
                       $shop_data['description'] = $values->description;
                       $shop_array[] = $shop_data;
                     endforeach;

                    echo json_encode(array('status' => 'success',
                                         'errorCode' => 0,
                                         'message' => 'Sub Categories Found.',
                                         'data_list' => $shop_array));
                }else{
                    echo json_encode(array('status' => 'failed',
                                         'errorCode' => 1,
                                         'message' => 'Sub Categories Not Found.',
                                         'data_list' => ''));
                }
    }
}

public function single_products_data_api()
{
    $shop_id = post('shop_id');
    $product_id = post('product_id');
    $key = '12345';
    if( if_empty($key) || if_empty($product_id)){
        echo e_response('Key is Required');
    }else{
                $sql_query = get_query_data("SELECT * FROM tbl_shop_products JOIN tbl_product_sub_category on tbl_product_sub_category.id = tbl_shop_products.sub_category_id where tbl_shop_products.status = 'Active' AND tbl_shop_products.id = '".$product_id."' ORDER BY tbl_shop_products.created_at DESC");
                if($sql_query){
                     $shop_data = array();
                     foreach ($sql_query as $values):
                       $shop_data['product_id'] = $values->id;
                       $shop_data['sub_cat_name'] = $values->sub_cat_name;
                       $shop_data['type'] = $values->type;
                       $shop_data['sub_image'] = $values->sub_image;
                       $shop_data['price'] = $values->price;
                       $shop_data['description'] = $values->description;
                       $shop_array[] = $shop_data;
                     endforeach;

                    echo json_encode(array('status' => 'success',
                                         'errorCode' => 0,
                                         'message' => 'Sub Categories Found.',
                                         'data_list' => $shop_array));
                }else{
                    echo json_encode(array('status' => 'failed',
                                         'errorCode' => 1,
                                         'message' => 'Sub Categories Not Found.',
                                         'data_list' => ''));
                }
    }
}

public function update_product_data_api()
{
    $shop_id = post('shop_id');
    $product_id = post('product_id');
    $price = post('price');
    $description = post('description');
    $key = '12345';
    if( if_empty($key) || if_empty($product_id) || if_empty($shop_id)){
        echo e_response('Key is Required');
    }else{
                $data = array(
                            'price' => $price,
                            'description' => $description
                );

                $result = update_data('tbl_shop_products', $data, $product_id);
                if($result){
                    echo json_encode(array('status' => 'success',
                                         'errorCode' => 0,
                                         'message' => 'Product Price Updated.',
                                         'data_list' => ''));
                }
                else{
                    echo json_encode(array('status' => 'failed',
                                         'errorCode' => 1,
                                         'message' => 'Sorry! Product Price Not Updated Due to error. Please try again later.',
                                         'data_list' => ''));
                }
    }
}






















///////////////////////////////////////////SHOP API's////////////////////////////////////////////////

public function shop_login()
{
    $email = post('email');
    $password = post('password');
    // $password = post('password');
    if( if_empty($email) || if_empty($password)){
        echo e_response('Email and Password required.');
    }else{
        $where = "email='".$email."' AND password = '".md5($password)."' AND status = 'Active'";
        $data = select_data('tbl_shops', $where);

                if($data){

                 $data_array['shop_id'] = $data[0]->id;
                 $data_array['shop_name'] = $data[0]->shop_name;
                 $data_array['shop_image'] = $data[0]->shop_image;
                 $data_array['phone_number'] = $data[0]->phone_number;
                 $data_array['email'] = $data[0]->email;
                 $data_array['address'] = $data[0]->address;
                 $data_array['status'] = $data[0]->status;
                 $response_data[] = $data_array;
                 echo json_encode(array('status' => 'success',
                                 'errorCode' => 0,
                                 'message' => 'Successfully logged in.', 
                                 'data' => $response_data));
             
            }
            else{

                echo e_response('Email And Password Not Correct! Please Try Again Later.');
            }       
   
    

}
}


public function delete_shop_product()
{
    $shop_id = post('shop_id');
    $category_id = post('category_id');
    $sub_category_id = post('sub_category_id');
    // $password = post('password');
    if( if_empty($shop_id) || if_empty($sub_category_id)){
        echo e_response('Shop ID and Product ID required.');
    }else{
        $where = "shop_id='".$shop_id."' AND sub_category_id = '".$sub_category_id."' AND category_id = '".$category_id."' AND status = 'Active'";
        $data = select_data('tbl_shop_products', $where);

                if($data){

                 $id = $data[0]->id;

                 $result =delete_data('tbl_shop_products', $id);

                 if($result == false){
                    echo json_encode(array('status' => 'success',
                                 'errorCode' => 0,
                                 'message' => 'Product Deleted Successsfully.', 
                                 'data' => ''));

                 }
                 else{

                 echo json_encode(array('status' => 'success',
                                 'errorCode' => 1,
                                 'message' => 'Sorry Product Not deleted due to Error.', 
                                 'data' => ''));
                 }
             
            }
            else{

                echo e_response('product Not found! Please Try Again Later.');
            }       
   
    

}
}

public function assign_category_to_shop_api()
{
    $shop_id = post('shop_id');
    $category_id = post('category_id');
    $key = '12345';
    if( if_empty($key) || if_empty($category_id) || if_empty($shop_id)){
        echo e_response('Key is Required');
    }else{
        $where = "shop_id='".$shop_id."' AND category_id = '".$category_id."'";
        $data1 = select_data('tbl_shop_categories', $where);

        if($data1 == true){
             echo json_encode(array('status' => 'failed',
                                    'errorCode' => 2,
                                    'message' => 'Sorry! Category already added in this shop. Please add new category.',
                                    'data_list' => ''));
        }
        else{

                $data = array(
                            'shop_id' => $shop_id,
                            'category_id' => $category_id
                );

                $result = save_data('tbl_shop_categories', $data);
                if($result){
                    echo json_encode(array('status' => 'success',
                                         'errorCode' => 0,
                                         'message' => 'Category Assign to Shop Successsfully.',
                                         'data_list' => ''));
                }
                else{
                    echo json_encode(array('status' => 'failed',
                                         'errorCode' => 1,
                                         'message' => 'Sorry! Category Not assign Due to error. Please try again later.',
                                         'data_list' => ''));
                }
                }
    }
}



// cart api

public function add_product_to_cart_api(){
     $customer_id = post('customer_id');    
     $shop_id = post('shop_id');    
     $product_id = post('product_id');  
     $quantity = post('quantity');  
     
       if( if_empty($customer_id) || if_empty($product_id) || if_empty($quantity)){
            echo e_response('Customer is required.');
        }else{
            $data = array(
                    'user_id' => $customer_id,
                    'product_id' => $product_id,
                    'quantity' => $quantity,
                    'shop_id' => $shop_id,
                    'status' => 'Active'  
                );

                    $result = save_data('tbl_cart',$data);
                    if($result){

                        echo json_encode(array('status' => 'success', 
                                        'errorCode' => 0,
                                        'message' => 'Product Add to Cart Successfully.'));
                        
                    }else{

                        echo json_encode(array('status' => 'error', 
                                        'errorCode' => 1,
                                        'message' => 'Order Not Added to Cart Due to Error. Please try Again.'));
                }   
               
        }
}

// end cart api

// select cart data
public function select_cart_data()
{
    $shop_id = post('shop_id');
    $customer_id = post('customer_id');
    $key = '12345';
    if( if_empty($key) || if_empty($shop_id)){
        echo e_response('Key is Required');
    }else{
                $sql_query = get_query_data("SELECT tbl_cart.id as cart_id, tbl_product_sub_category.sub_cat_name as product_name, tbl_shop_products.price as product_price, tbl_product_sub_category.sub_image as product_image, tbl_cart.quantity as product_quantity
                FROM tbl_cart 
                 JOIN tbl_shop_products on tbl_shop_products.id = tbl_cart.product_id
                 JOIN tbl_product_sub_category on tbl_product_sub_category.id = tbl_shop_products.sub_category_id
                            
                          
                            where tbl_cart.shop_id = '".$shop_id."' AND tbl_cart.user_id = '".$customer_id."' ORDER BY tbl_cart.created_at DESC");
                if($sql_query){
                     $shop_data = array();
                     foreach ($sql_query as $values):
                       $shop_data['cart_id'] = $values->cart_id;
                       $shop_data['product_name'] = $values->product_name;
                       $shop_data['product_price'] = $values->product_price;
                       $shop_data['product_image'] = $values->product_image;
                       $shop_array[] = $shop_data;
                     endforeach;

                    echo json_encode(array('status' => 'success',
                                         'errorCode' => 0,
                                         'message' => 'Cart Product Found.',
                                         'data_list' => $shop_array));
                }else{
                    echo json_encode(array('status' => 'failed',
                                         'errorCode' => 1,
                                         'message' => 'Cart Product Not Found.',
                                         'data_list' => ''));
                }
    }
}


//end select cart data

// delete product from cart

public function delete_cart_product()
{
    $cart_id = post('cart_id');
    // $password = post('password');
    if( if_empty($cart_id)){
        echo e_response('Cart ID required.');
    }else{

                 $result =delete_data('tbl_cart', $cart_id);

                 if($result){
                    echo json_encode(array('status' => 'success',
                                 'errorCode' => 0,
                                 'message' => 'Product Deleted Successsfully.', 
                                 'data' => ''));

                 }
                 else{

                 echo json_encode(array('status' => 'success',
                                 'errorCode' => 1,
                                 'message' => 'Sorry Product Not deleted due to Error.', 
                                 'data' => ''));
                 }
                  
   
    

}
}



// end delete product from cart


// checkout API

public function checkout_api(){
     $customer_id = post('customer_id');    
     $shop_id = post('shop_id');    
     $promo_id = post('promo_id');  
     $promo_discount = post('promo_discount');
     $sub_total = post('sub_total');
     $order_grand_total = post('order_grand_total');


     $product_id = post('product_id');  
     // $product_id = '2,3,4';  
     $product_quantity = post('product_quantity');  
     //$product_quantity = '4,3,4'; 
     
       if( if_empty($customer_id) ){
            echo e_response('Customer is required.');
        }else{
            $data = array(
                    'user_id' => $customer_id,
                    'shop_id' => $shop_id,
                    'promo_id' => $promo_id,
                    'promo_discount' => $promo_discount,
                    'sub_total' => $sub_total,
                    'order_grand_total' => $order_grand_total,      
                );

                    $result = save_data('tbl_order',$data);
                    if($result){

                        $im_product_id = explode(',', $product_id);
                        $im_product_quantity = explode(',', $product_quantity);
                        $tax_array = array_combine($im_product_id, $im_product_quantity);

                            foreach ($tax_array as $key => $data){

                                
                                $tax_data['product_id'] = $key;
                                $tax_data['product_quantity'] = $data;
                                $tax_data['order_id'] = $result;

                                save_data('tbl_order_detail', $tax_data);
                            }
  
            // foreach ($im_product_id as $data){

                
            //  $tax_data['product_id'] = $data;
            //  $tax_data['order_id'] = $result;

            //  save_data('tbl_order_detail', $tax_data);
            // }
                        echo json_encode(array('status' => 'success', 
                                        'errorCode' => 0,
                                        'message' => 'Thanks for the Order'));
                        
                    }else{

                        echo json_encode(array('status' => 'error', 
                                        'errorCode' => 1,
                                        'message' => 'Order Not Added Successfully'));
                }   
               
        }
}

// end checkout api











}
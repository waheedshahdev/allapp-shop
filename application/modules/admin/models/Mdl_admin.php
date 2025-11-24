<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mdl_admin extends CI_Model
{

function __construct() {
parent::__construct();
}

    var $table = "tbl_users";  
      var $select_column = array("tbl_users.id", "username", "email","status", "created_at");  
        var $order_column = array(null, "tbl_users.id", "username", null, null); 

        //customer list 

        var $customer_table = "tbl_customers";  
        var $customer_select_column = array("tbl_customers.id", "customer_name", "phone_number", "email", "address", "status", "created_at");  
        var $customer_order_column = array(null, "tbl_customers.id", "customer_name", null, null); 

        var $shop_table = "tbl_shops";  
        var $shop_select_column = array("tbl_shops.id", "shop_name", "phone_number", "email", "address", "status", "created_at", "shop_image");  
        var $shop_order_column = array(null, "tbl_shops.id", "shop_name", null, null); 

        var $product_table = "tbl_shop_products";  
        var $product_select_column = array("tbl_shop_products.id", "tbl_shop_products.sub_category_id", "tbl_shop_products.price","tbl_shop_products.description", "tbl_shop_products.status", "tbl_shop_products.created_at", "tbl_product_category.category_name", "tbl_shops.shop_name", "tbl_product_sub_category.sub_cat_name", "tbl_product_sub_category.sub_image");  
        var $product_order_column = array(null, "tbl_shop_products.id", "product_name", null, null);


        var $category_order_column = array(null, "tbl_product_category.id", "tbl_product_category.category_name", null, null); 
        
         var $notification_table = "tbl_notification";  
        var $notification_select_column = array("tbl_notification.id", "notification", "promo_code", "promo_price","status", "created_at");  
        var $notification_order_column = array(null, "tbl_notification.id", "promo_code", null, null); 


        // sub category code


        var $sub_category_table = "tbl_product_sub_category";  
        var $sub_category_select_column = array("tbl_product_sub_category.id", "sub_cat_name", "type", "sub_image", "tbl_product_sub_category.status", "tbl_product_sub_category.created_at", "tbl_product_category.category_name");  
        var $sub_category_order_column = array(null, "tbl_product_sub_category.id", "sub_cat_name", null, null);

        // Shop categories
        var $shop_category_table = "tbl_shop_categories";  
        var $shop_category_select_column = array("tbl_shop_categories.id", "tbl_shop_categories.category_id", "tbl_shop_categories.shop_id", "tbl_shop_categories.created_at", "tbl_product_category.category_name", "tbl_product_category.category_image","tbl_shops.shop_name");  
        var $shop_category_order_column = array(null, "tbl_shop_categories.id", "tbl_product_category.category_name", null, null);

        // end shop categories



public function validate_credentials($email, $password){
        $sql = "SELECT * FROM tbl_users WHERE email='".$email."' AND password='".md5($password)."' AND user_type = 'Admin'";
          if($query=$this->db->query($sql))
          {
              return $query->row_array();
          }
          else{
            return false;
          }
    
    }


     // user list 
    function make_query()  
      {  
           $this->db->select($this->select_column);  
           $this->db->from($this->table);
          
           
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("username", $_POST["search"]["value"]);  
                $this->db->or_like("status", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('id', 'DESC');  
           }  
      }  
      function make_datatables(){  
           $this->make_query();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }  
      function get_filtered_data(){  
           $this->make_query();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function get_all_data()  
      {  
           $this->db->select("*");  
           $this->db->from($this->table); 

           return $this->db->count_all_results();  
      }

      // end user list 

           // customer list 
    function customer_make_query()  
      {  
           $this->db->select($this->customer_select_column);  
           $this->db->from($this->customer_table);
          
           
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("customer_name", $_POST["search"]["value"]);  
                $this->db->or_like("status", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->customer_order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('id', 'DESC');  
           }  
      }  
      function customer_make_datatables(){  
           $this->customer_make_query();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }  
      function customer_get_filtered_data(){  
           $this->customer_make_query();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function customer_get_all_data()  
      {  
           $this->db->select("*");  
           $this->db->from($this->customer_table); 

           return $this->db->count_all_results();  
      }

      // end cusotmer list 

                 // shop list 
    function shop_make_query()  
      {  
           $this->db->select($this->shop_select_column);  
           $this->db->from($this->shop_table);
          
           
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("shop_name", $_POST["search"]["value"]);  
                $this->db->or_like("status", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->shop_order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('id', 'DESC');  
           }  
      }  
      function shop_make_datatables(){  
           $this->shop_make_query();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }  
      function shop_get_filtered_data(){  
           $this->shop_make_query();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function shop_get_all_data()  
      {  
           $this->db->select("*");  
           $this->db->from($this->shop_table); 

           return $this->db->count_all_results();  
      }

      // end shop list 

                     // customer list 
    function product_make_query($id)  
      {  
           $this->db->select($this->product_select_column);  
           $this->db->from($this->product_table);
           $this->db->join('tbl_product_category','tbl_product_category.id = tbl_shop_products.category_id');
           $this->db->join('tbl_product_sub_category','tbl_product_sub_category.id = tbl_shop_products.sub_category_id');
           $this->db->join('tbl_shops','tbl_shops.id = tbl_shop_products.shop_id');
           $this->db->where('tbl_shop_products.shop_id = '.$id.'');
          
           
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("tbl_product_sub_category.sub_cat_name", $_POST["search"]["value"]);  
                //$this->db->or_like("tbl_shops.shop_name", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->product_order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('id', 'DESC');  
           }  
      }  
      function product_make_datatables($id){  
           $this->product_make_query($id);  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }  
      function product_get_filtered_data($id){  
           $this->product_make_query($id);  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function product_get_all_data($id)  
      {  
           $this->db->select("*");  
           $this->db->from($this->product_table); 

           return $this->db->count_all_results();  
      }

      // end cusotmer list


               // category list 
    function category_make_query()  
      {  
           $this->db->select('*');  
           $this->db->from('tbl_product_category');
          
           
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("category_name", $_POST["search"]["value"]);  
                $this->db->or_like("status", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->category_order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('id', 'DESC');  
           }  
      }  
      function category_make_datatables(){  
           $this->category_make_query();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }  
      function category_get_filtered_data(){  
           $this->category_make_query();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function category_get_all_data()  
      {  
           $this->db->select("*");  
           $this->db->from('tbl_product_category'); 

           return $this->db->count_all_results();  
      }

      // end category list 
      
      
                           // Notification list 
    function notification_make_query()  
      {  
           $this->db->select('*');  
           $this->db->from('tbl_notification');
          
           
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("notification", $_POST["search"]["value"]);  
                $this->db->or_like("promo_code", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->notification_order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('id', 'DESC');  
           }  
      }  
      function notification_make_datatables(){  
           $this->notification_make_query();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }  
      function notification_get_filtered_data(){  
           $this->notification_make_query();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function notification_get_all_data()  
      {  
           $this->db->select("*");  
           $this->db->from('tbl_notification'); 

           return $this->db->count_all_results();  
      }

      // end Notification list 


      // sub category code

           function sub_category_make_query()  
      {  
           $this->db->select($this->sub_category_select_column);  
           $this->db->from($this->sub_category_table);
           $this->db->join('tbl_product_category','tbl_product_category.id = tbl_product_sub_category.category_id');
           
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("tbl_product_sub_category.sub_cat_name", $_POST["search"]["value"]);  
                $this->db->or_like("tbl_product_sub_category.status", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->sub_category_order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('id', 'DESC');  
           }  
      }  
      function sub_category_make_datatables(){  
           $this->sub_category_make_query();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }  
      function sub_category_get_filtered_data(){  
           $this->sub_category_make_query();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function sub_category_get_all_data()  
      {  
           $this->db->select("*");  
           $this->db->from($this->sub_category_table); 

           return $this->db->count_all_results();  
      }


      // end subcategory

            // shop category code

           function shop_category_make_query($id)  
      {  
           $this->db->select($this->shop_category_select_column);  
           $this->db->from($this->shop_category_table);
           $this->db->join('tbl_product_category','tbl_product_category.id = tbl_shop_categories.category_id');
           $this->db->join('tbl_shops','tbl_shops.id = tbl_shop_categories.shop_id');
           $this->db->where('tbl_shop_categories.shop_id = '.$id.'');
           
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("tbl_product_category.category_name", $_POST["search"]["value"]);  
               // $this->db->or_like("tbl_product_category.status", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->shop_category_order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('id', 'DESC');  
           }  
      }  
      function shop_category_make_datatables($id){  
           $this->shop_category_make_query($id);  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }  
      function shop_category_get_filtered_data($id){  
           $this->shop_category_make_query($id);  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function shop_category_get_all_data($id)  
      {  
           $this->db->select("*");  
           $this->db->from($this->shop_category_table); 

           return $this->db->count_all_results();  
      }


      // end shopcategory



}
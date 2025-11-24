<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrator Allapp</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?php echo base_url();?>adminfiles/assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url();?>adminfiles/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>adminfiles/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>adminfiles/assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url();?>adminfiles/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>adminfiles/assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url();?>adminfiles/assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo base_url();?>adminfiles/assets/scss/style.css">
    <link href="<?php echo base_url();?>adminfiles/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link rel="stylesheet" href="<?php echo base_url();?>adminfiles/assets/css/lib/datatable/dataTables.bootstrap.min.css">

</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="<?php echo base_url();?>adminfiles/images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="<?php echo base_url();?>adminfiles/images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo base_url();?>admin"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>admin/customers"> <i class="menu-icon fa fa-dashboard"></i>Customers </a>
                    </li>
                     <li>
                        <a href="<?php echo base_url();?>admin/shops"> <i class="menu-icon fa fa-dashboard"></i>Shops </a>
                    </li>
                     <li>
                        <a href="<?php echo base_url();?>admin/product_category"> <i class="menu-icon fa fa-dashboard"></i>Product Category</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>admin/product_sub_category"> <i class="menu-icon fa fa-dashboard"></i>Product Sub Category</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>admin/products"> <i class="menu-icon fa fa-dashboard"></i>Products</a>
                    </li>
                     <li>
                        <a href="<?php echo base_url();?>admin/orders"> <i class="menu-icon fa fa-dashboard"></i>Orders </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>admin/notification"> <i class="menu-icon fa fa-user"></i>Notifications</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>admin/users"> <i class="menu-icon fa fa-user"></i>Users</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Settings</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="<?php echo base_url();?>admin/product_type">Add Product Type</a></li>
                        </ul>
                    </li>
                  
                    <!-- <h3 class="menu-title">Extras</h3> -->
                  
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                       

                     <!--    <div class="dropdown for-notification">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">5</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                          </div>
                        </div> -->

                    <!--     <div class="dropdown for-message">
                          <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-email"></i>
                            <span class="count bg-primary">9</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="message">
                            <p class="red">You have 4 Mails</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="<?php echo base_url();?>adminfiles/images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="<?php echo base_url();?>adminfiles/images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="<?php echo base_url();?>adminfiles/images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="<?php echo base_url();?>adminfiles/images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                          </div>
                        </div> -->
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?php echo base_url();?>adminfiles/images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="<?php echo base_url();?>admin/logout"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                    <div style="color: black;" class="language-select dropdown" id="language-select">
                        
                            <?php echo $this->session->userdata('username');?>
                        </a>

                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <?php if(isset($view_files))

          $this->load->view($view_module.'/'.$view_files);

       ?>
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
   <script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
    <script src="<?php echo base_url();?>adminfiles/assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  

    <script src="<?php echo base_url();?>adminfiles/assets/js/plugins.js"></script>
    <script src="<?php echo base_url();?>adminfiles/assets/js/main.js"></script>


        <script src="<?php echo base_url();?>adminfiles/assets/js/lib/data-table/datatables.min.js"></script>
    <script src="<?php echo base_url();?>adminfiles/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>adminfiles/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>adminfiles/assets/js/lib/data-table/datatables-init.js"></script>
    <script src="<?php echo base_url();?>adminfiles/assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="<?php echo base_url();?>adminfiles/assets/js/dashboard.js"></script>
    <script src="<?php echo base_url();?>adminfiles/assets/js/widgets.js"></script>
    <script src="<?php echo base_url();?>adminfiles/assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="<?php echo base_url();?>adminfiles/assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url();?>adminfiles/assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="<?php echo base_url();?>adminfiles/assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>
    <script type="text/javascript">
    // start users list
    var tbl_category;
    $(document).ready(function(){  
      tbl_category = $('#user_table').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'admin/user_list'; ?>",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                },  
           ],  
      });  
 });
    // end users list

     // customer list
    var tbl_category;
    $(document).ready(function(){  
      tbl_category = $('#customer_table').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'admin/customers_list'; ?>",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                },  
           ],  
      });  
 });
    // end customer list

         // start purchase list
    var tbl_category;
    $(document).ready(function(){  
      tbl_category = $('#contact_table').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'admin/contact_list'; ?>",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                },  
           ],  
      });  
 });
    // end purchase list


    // Block customer

$(document).on('click','.block_customer', function(){
  var id = $(this).attr('id');

  $.ajax({
    url: "<?php echo base_url(). 'admin/block_customer'?>",
    method: 'post',
    data: {id:id},
    success:function(data){
      alert(data);
      $('#customer_table').DataTable().ajax.reload();


    }

  })


});
    // end Block customer

    // Unblock customer

$(document).on('click','.unblock_customer', function(){
  var id = $(this).attr('id');

  $.ajax({
    url: "<?php echo base_url(). 'admin/unblock_customer'?>",
    method: 'post',
    data: {id:id},
    success:function(data){
      alert(data);
      $('#customer_table').DataTable().ajax.reload();


    }

  })


});
    // end unblock customer


    // add shop

      $(document).on('submit','#add_shop',function(event){
            event.preventDefault();
            var shop_name = $('#shop_name').val();
            var shop_phone = $('#shop_phone').val();
            var shop_password = $('#shop_password').val();
            var shop_email = $('#shop_email').val();
            var shop_address = $('#shop_address').val();
            var shop_image = $('#shop_image').val();

                     
                $.ajax({
                    url: "<?php echo base_url();?>admin/add_shop",
                    method: 'POST',
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    success: function(data)
                    {
                        
                        //alert(data);
                        location.reload();
                         $('#add_shop')[0].reset();
                        // var id = $('#vendor_id').val();
                        // location.href = '<?php echo base_url();?>admin/update_vendor/'+id;
                    }
                });
          

        });



     // shop list
    var tbl_category;
    $(document).ready(function(){  
      tbl_category = $('#shop_table').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'admin/shops_list'; ?>",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                },  
           ],  
      });  
 });
    // end shop list

        // Block shop

$(document).on('click','.block_shop', function(){
  var id = $(this).attr('id');

  $.ajax({
    url: "<?php echo base_url(). 'admin/block_shop'?>",
    method: 'post',
    data: {id:id},
    success:function(data){
      alert(data);
      $('#shop_table').DataTable().ajax.reload();


    }

  })


});
    // end Block shop

    // Unblock shop

$(document).on('click','.unblock_shop', function(){
  var id = $(this).attr('id');

  $.ajax({
    url: "<?php echo base_url(). 'admin/unblock_shop'?>",
    method: 'post',
    data: {id:id},
    success:function(data){
      alert(data);
      $('#shop_table').DataTable().ajax.reload();


    }

  })


});
    // end unblock shop


        // add shop product

      $(document).on('submit','#add_shop_product',function(event){
            event.preventDefault();
            var shop_id = $('#shop_id').val();
            var category_id = $('#category_id').val();
            var product_name = $('#product_name').val();
            var price = $('#price').val();
            var quantity = $('#quantity').val();
            var description = $('#description').val();

                     
                $.ajax({
                    url: "<?php echo base_url();?>admin/add_shop_product",
                    method: 'POST',
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    success: function(data)
                    {
                        
                        //alert(data);
                        $('#product_table').DataTable().ajax.reload();
                    }
                });
          

        });

           // shop product list
    var tbl_category;
    $(document).ready(function(){ 
      var shop_id = $('#shop_id').val();
      tbl_category = $('#product_table').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'admin/shop_product_list/'; ?>"+shop_id,  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                },  
           ],  
      });  
 });
    // end shop list

               // shop product list
    var tbl_category;
    $(document).ready(function(){  
      tbl_category = $('#category_table').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'admin/category_list'; ?>",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                },  
           ],  
      });  
 });
    // end shop list
    
    
                       // shop Notification list
    var tbl_category;
    $(document).ready(function(){  
      tbl_category = $('#notification_table').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'admin/notification_list'; ?>",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                },  
           ],  
      });  
 });
    // end Notification list


        // sub category table
    var tbl_category;
    $(document).ready(function(){  
      tbl_category = $('#sub_category_table').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'admin/sub_category_list'; ?>",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                },  
           ],  
      });  
 });

    // end subcategory


    // dependent dropdown of categor and sub category

    $(document).on('change','#shop_category_id', function(){

  var category_id = $('#shop_category_id').val();


  if(category_id !=''){
    $.ajax({
      url: '<?php echo base_url();?>admin/fetch_sub_cat',
      method: 'post',
      data: {category_id:category_id},
      success:function(data){
        
       $('#sub_category_id').html(data);

      }

    })  

  }


});
    // end dependent dropdown

    // delete category 
    $(document).on('click','.delete_category', function(){
  var id = $(this).attr('id');

  if(confirm('Are you Sure you want to delete Category?')){

  $.ajax({
    url: "<?php echo base_url(). 'admin/delete_category'?>",
    method: 'post',
    data: {id:id},
    success:function(data){
      alert(data);
      $('#category_table').DataTable().ajax.reload();


    }

  })
  }
  else{
    return false;
  }


});
    // end delete category

        // delete category 
    $(document).on('click','.delete_sub_category', function(){
  var id = $(this).attr('id');

  if(confirm('Are you Sure you want to delete Category?')){

  $.ajax({
    url: "<?php echo base_url(). 'admin/delete_sub_category'?>",
    method: 'post',
    data: {id:id},
    success:function(data){
      alert(data);
      $('#sub_category_table').DataTable().ajax.reload();


    }

  })
  }
  else{
    return false;
  }


});
    // end delete category


    // shop category list
    var tbl_category;
    $(document).ready(function(){ 
      var shop_id = $('#add_shop_id').val();
      tbl_category = $('#shop_category_table').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'admin/shop_category_list/'; ?>"+shop_id,  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                },  
           ],  
      });  
 });
    // end shop category list

            // delete shop category 
    $(document).on('click','.delete_shop_category', function(){
  var id = $(this).attr('id');

  if(confirm('Are you Sure you want to delete Shop Category?')){

  $.ajax({
    url: "<?php echo base_url(). 'admin/delete_shop_category'?>",
    method: 'post',
    data: {id:id},
    success:function(data){
      alert(data);
      $('#shop_category_table').DataTable().ajax.reload();


    }

  })
  }
  else{
    return false;
  }


});
    // end delete shop category


    </script>

</body>
</html>

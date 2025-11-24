
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active"><?php echo $title;?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

 <?php 
             if($this->session->flashdata("error_msg") != ''){?>
             <div class="alert alert-danger">
                 <button class="close" data-dismiss="alert"></button>
                 <?php echo $this->session->flashdata("error_msg");?>
             </div>
          <?php
            }
          ?>
          <?php 
             if($this->session->flashdata("success") != ''){?>
             <div class="alert alert-success">
                 <button class="close" data-dismiss="alert"></button>
                 <?php echo $this->session->flashdata("success");?>
             </div>
          <?php
            }
          ?>

        <div class="content mt-4">
            <div class="animated fadeIn">
                <div class="row">
                    <!-- Model -->
                <div class="col-md-6 col-md-offset-2 ">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Product Category</strong>
                        </div>
                        <div class="card-body">
                          <?php foreach ($category_data as $value) {
                            # code...
                          } ?>
                		  <form action="<?php echo base_url();?>admin/product_category/<?php echo $value->id;?>" method="post" enctype="multipart/form-data">
                			 <div class="form-group">
					                <label>Category Name</label>
					                <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Enter Category Name" value="<?php echo $value->category_name;?>">
					            </div> 
					            <div class="form-group">
                          <label>Category Image</label>
                          <input type="file" class="form-control" name="category_image" id="category_image">
                      </div> 
					       
					            <div class="form-group">

                          <?php 
                              $id = $this->uri->segment(3);
                              if($id == ''){
                           ?>
					                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success">
                          <?php }
                            elseif ($id != '') {?>

                            <input type="submit" name="submit" id="submit" value="Update" class="btn btn-success">
                              
                           <?php }
                           ?>
					            </div>


                		</form>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <!-- Model -->


                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Items</strong>
                        </div>
                        <div class="card-body">
                 <table id="category_table" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>Category Name</th>
                    <th>Picture</th>
                    <th>Status</th>
                    <th>Created</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                </tbody>

              </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
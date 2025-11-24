
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
                          <?php foreach ($sub_category_data as $sub) {
                            # code...
                          } ?>

                		<form action="<?php echo base_url();?>admin/product_sub_category/<?php echo $this->uri->segment(3);?>" method="post" enctype="multipart/form-data">
                			 <div class="form-group">
					                <label>Select Category</label>
					                <select name="category_id" class="form-control">
                            <?php if(isset($sub->category_id)){
                                 echo '<option value="'.$sub->category_id.'">'.$sub->category_name.'</option>';
                               } ?>
					                	<option>----</option>
					                	<?php foreach ($category as $value):?>
					                		<option value="<?php echo $value->id;?>"><?php echo $value->category_name;?></option>
					                	<?php endforeach;?>
					                </select>
					            </div> 

					            <div class="form-group">
			                        <label>Sub Category Name</label>
			                        <input type="text" class="form-control" name="sub_cat_name" id="sub_cat_name" value="<?php if(isset($sub->sub_cat_name)){ echo $sub->sub_cat_name;}?>">
			                     </div> 
			                     <div class="form-group">
			                        <label>Type</label>
			                        <select name="type" class="form-control">
                                <?php if(isset($sub->type)){
                                 echo '<option value="'.$sub->type.'">'.$sub->type.'</option>';
                               } ?>
			                        	<option>Select Type</option>
                                
                                <?php foreach ($product_type as $values):?>
			                        	<option value="<?php echo $values->product_type;?>"><?php echo $values->product_type;?></option>

                              <?php endforeach; ?>
			                        	

			                        </select>
			                     </div> 
			                      <div class="form-group">
                              <label>Product Price</label>
                              <input type="number" class="form-control" name="price" id="price" value="<?php echo $sub->price;?>">
                           </div> 
			                     <div class="form-group">
			                        <label>Sub Category Image</label>
			                        <input type="file" class="form-control" name="sub_image" id="sub_image">
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
                 <table id="sub_category_table" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>Category Name</th>
                    <th>Sub Category Name</th>
                    <th>Type</th>
                    <th>Image</th>
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
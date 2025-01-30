<?php
include_once('header.php');
?>

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Manage Product</h1>
                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Product
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID#</th>
											<th>Categories id</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Price</th>
											<th>Image</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
									
									foreach($products_arr as $data)
									{
									?>
                                        <tr>
                                            <td><?php echo $data->id;?></td>
											<td><?php echo $data->cate_id;?></td>
                                            <td><?php echo $data->name;?></td>
                                            <td><?php echo $data->description;?></td>
                                            <td><?php echo $data->price;?></td>
											<td><?php echo $data->image;?></td>
											<td>
												<a class="btn btn-danger" href="">Delete</a>
												<a class="btn btn-primary" href="">Edit</a>
											</td>
                                        </tr>
                                    <?php
									}
									?>    
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
       
            </div>



            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
  <?php
   include_once('footer.php');
   ?>
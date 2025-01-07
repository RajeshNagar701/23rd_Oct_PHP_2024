<?php
include_once('header.php');
?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add Categories</h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Add Categories
                        </div>
                        <div class="panel-body">
                            <form role="form">
                                        <div class="form-group">
                                            <label>Enter Categories Name</label>
                                            <input name="cate_name" class="form-control" type="text">
                                        </div>
										<div class="form-group">
                                            <label>Upload Categories Image</label>
                                            <input name="cate_img" class="form-control" type="file">
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-info">Submit</button>
                                    </form>
                            </div>
                        </div>
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
<?php $this->load->view('frontend/header');?>     
                <style type="text/css"> 
                    select{ width: 80% !important; margin-top: 20px; } 
                    input{ width: 80% !important; margin-top: 20px; }
                    .error{color: red;}
                </style>
                <!-- page content wrapper -->
                <div class="page-content-wrap bg-light">
                    <!-- page content holder -->
                    <div class="page-content-holder no-padding">
                        <!-- page title -->
                        <div class="page-title">                            
                            <h1>Reset Password</h1>
                            <!-- breadcrumbs -->
                            <ul class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li class="active"><a href="#">Reset Password</a></li>
                               
                            </ul>               
                            <!-- ./breadcrumbs -->
                        </div>
                        <!-- ./page title -->
                    </div>
                    <!-- ./page content holder -->
                </div>
                <!-- ./page content wrapper -->
                
                               
                <!-- page content wrapper -->
                <div class="page-content-wrap">                    
                    <!-- page content holder -->
                    <div class="page-content-holder">
                        
                        <div class="block-heading this-animate" data-animate="fadeIn">
                            <h2>Reset Password</h2>
                            <div align="center"><?php echo @$_REQUEST['msg'];?></div>
                            <div class="block-heading-text">
                            <form class="cmxform" id="commentForm" method="post" action="<?php echo base_url();?>user/resetPassword">
                                     <div class="form-group">
                                <label class="col-sm-4 control-label" for="username"> Email:</label>
                                <div class="col-sm-5">
                                    <input id="email" name="username"  type="text" required placeholder="Email">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-4"><br>
                                   <button class="btn btn-info" type="submit" value="Submit">Submit</button>
				  <a href="<?php echo base_url(); ?>user/login" class="btn btn-info">Login</a>
                                </div>
                            </div>
                               
                                </form>
                            </div>
                        </div>
                   
                                                                 
                        
                    </div>
                    <!-- ./page content holder -->
                </div>
                <!-- ./page content wrapper -->
                                
            </div>
            <!-- ./page content -->
            
<?php $this->load->view('frontend/footer');?>

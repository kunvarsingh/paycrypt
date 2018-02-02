<?php $this->load->view('frontend/headerfront');?>  
               
                 <div class="page-content-wrap bg-light">
                    <div class="page-content-holder no-padding">    
                        <div class="page-title">                            
                            <h1>Welcome Shubham</h1> 
                        </div>
                    </div>
                </div>
                <div class="page-content-wrap bg-light">
                    <div class="page-content-holder no-padding">
                        <div class="page-title">                            
                            <a class="btn btn-info" href="<?php echo base_url();?>account/my-account-details">Your Persional Details</a> 
                            <ul class="breadcrumb">
                                <li><a href="#">Image</a></li>
                                
                            </ul>               
                        </div>
                    </div>
                </div>          
                <!-- page content wrapper -->
                <div class="page-content-wrap">                    
                    <!-- page content holder -->
                    <div class="page-content-holder">
                        
                        <div class="block-heading block-heading-centralized this-animate" data-animate="fadeInDown">
                            <h2 class="heading-underline">1. Gourl.io Monetiser Online</h2>
                            <div class="block-heading-text">
                            Use our GoUrl Monetiser Online if you don't have your own website -
                            Monetise/sell your Files & Music & Texts & Images & Video online for cryptocoins - Bitcoin, Bitcoin Cash, Litecoin, Dash, etc. Create Your Free GoUrl Payment Urls below (it will protect your information from visitors directly proceeding and monetise it) and after share them on the web - twitter / forums / websites / etc. Make Cryptocoins Money/USD Online   <a href="">Read More</a>
                            </div>
                    <div class=" bg-light">
                        <div class="page-content-holder no-padding">
                                    <table class="table datatable">
                                        <thead>
                                          <tr>
                                            <th>No</th>
                                            <th>Payment Url</th>
                                            <th>Currency</th>
                                            <th>Amount in Box</th>
                                            <th>Amount in USD</th>
                                            <th>Active ?</th>
                                            <th>Url Expiry Date</th>
                                            <th>Total Confirmed Received</th>
                                            <th>Count - Total Confirmed Received</th>
                                            <th>Total Unconfirmed Received</th>
                                            <th>Count - Total Unconfirmed Received</th>
                                            <th>Edit</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <?php $i=1; foreach($getMonitiger as $monList):?>
                                          <tr>
                                            <td><?php echo $i++;?></td>
                                            <td><?php echo $monList->privateURL;?></td>
                                            <td><img src="<?= base_url();?>uploads/<?php echo $monList->coin_image;?>" width="60" height="60"></td>
                                            <td><?php echo $monList->coinRate;?></td>
                                            <td><?php echo $monList->monUSD;?></td>
                                            <td><?php echo $monList->privateURL;?></td>
                                            <td><?php echo $monList->expiryDate;?></td>
                                            <td><?php echo $monList->monConfirmed;?></td>
                                             <td><?php echo $monList->monConfirmedReceived;?></td>
                                            <td><?php echo $monList->monUnconfirmed;?></td>
                                             <td><?php echo $monList->monUnconfirmedReceived;?></td>
                                            <td style="width: 20%"><!-- <a class="btn btn-info" href="<?php //echo base_url();?>monetiser/monEdit/<?php // echo $monList->monetiser_id;?>">Edit</a> -->&nbsp;<a class="btn btn-info" href="<?php echo base_url();?>monetiser/monEdit/<?php echo $monList->monetiser_id;?>">Delete</a></td>
                                          </tr>      
                                     <?php endforeach;?>
                                        </tbody>
                                    </table>
                                    <div class="page-content-holder no-padding">
                                    <div class="page-title"><a class="btn btn-info" href="<?php echo base_url();?>monetiser/my-monitiser-online">Create New Payment Url Online</a></div><br>
                                </div>
                                </div>
                             </div>


                              <!-- page content holder -->
                                
                            </div>
                      
                </div>
            </div>
               
                <!-- 2next -->
                <div class="page-content-wrap">                    
                    <!-- page content holder -->
                    <div class="page-content-holder">
                        
                        <div class="block-heading block-heading-centralized this-animate" data-animate="fadeInDown">
                            <h2 class="heading-underline">2. Your Cryptocoin Payment Box / Captcha</h2>
                            <div class="block-heading-text">
                              If you have your own website, use PHP Class, Wordpress Bitcoin/Altcoin plugins or use Payment API - crypto payment box on your website -
                                  <a href="">Read More</a>
                            </div>
                            <div class="page-content-wrap bg-light">
                            <!-- page content holder -->
                                <div class="page-content-holder no-padding">
                                     <table class="table">
                                        <thead>
                                          <tr>
                                            <th>#</th>
                                            <th>No</th>
                                            <th>Your Payment Box</th>
                                            <th>Coin</th>
                                            <th>Total Confirmed Payments, ~ USD</th>
                                            <th>Total Confirmed Payments</th>
                                            <th>Count Confirmed</th>
                                            <th>Unconfirmed Payments</th>
                                            <th>Unconf. Count</th>
                                            <th>Latest Payment Forwarded to You</th>
                                            <th>Edit</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                           <?php 
                                            $i=1;
                                            foreach($getKey as $bitcoin){ 
                                            ?>
                                          <tr>
                                            <td><?php echo $i++;?></td>
                                            <td><?php echo $bitcoin->key_id;?></td>
                                            <td><?php echo $bitcoin->boxName;?></td>
                                           
                                             <td><img src="<?php echo base_url();?>uploads/<?php echo $bitcoin->coin_image;?>" height="60" width="60"></td>
                                            
                                            <td><?php echo $bitcoin->amountUSD;?></td>
                                            <td><?php echo $bitcoin->amount;?></td>
                                            <td><?php echo $bitcoin->txConfirmed;?></td>
                                            <td><?php echo $bitcoin->unrecognised;?></td>
                                            <td><?php echo $bitcoin->unrecognised;?></td>
                                            <td><?php echo $bitcoin->processed;?></td>
                                           
                                            <td width="200">
                                                <a class="btn btn-info" href="<?php echo base_url();?>account/coinbox/<?php echo $bitcoin->multicurrencyID.'/'.$this->session->userdata('box_id').'/'.str_replace(' ','',$bitcoin->coinName);?>">Edit</a> 
                                              <a class="btn btn-info" href="<?php echo base_url();?>account/coin_boxes/<?php echo $this->session->userdata('box_id');?>/<?php echo str_replace(' ','',$bitcoin->coinName);?>">Start</a></td>
                                          </tr>      
                                         <?php }?>     
                                         
                                        </tbody>
                                      </table>
                                </div>
                                  <div class="page-content-holder no-padding">
                                    <div class="page-title"><a class="btn btn-info" href="<?php echo base_url();?>account/public_key">Create New Payment Box fro Your Website</a></div>
                                </div>
                                <div class="page-content-holder">
                                    <div class="pull-left">
                                      <h1>Common Statistics for All Your Payment Boxes</h1>
                                    </div>
                                    <div class="col-sm-12">
                                        <a class="btn btn-info" href="<?php echo base_url();?>payment/payment-successfull">Payments Successfully Received & Processed</a>
                                        <a class="btn btn-info" href="<?php echo base_url();?>payment/Unrecognised-Received-Payments">Unrecognised Received Payments</a>
                                        <a class="btn btn-info" href="<?php echo base_url();?>payment/auto-payments-external-wallet">Auto Payments to Your Wallet</a>
                                    </div>
                                </div>
                             
                             </div>
                        </div>
                        
                    </div>
                    <!-- ./page content holder -->
                </div>
                <!-- close -->

                <!--3 next -->
                <div class="page-content-wrap">                    
                    <!-- page content holder -->
                    <div class="page-content-holder">
                        
                        <div class="block-heading block-heading-centralized this-animate" data-animate="fadeInDown">
                            <h2 class="heading-underline">3. Affiliate Programs</h2>
                            <div class="block-heading-text">
                              If you have your own website, use PHP Class, Wordpress Bitcoin/Altcoin plugins or use Payment API - crypto payment box on your website -
                                  <a href="">Read More</a>
                            </div>
                            <div class="page-content-wrap bg-light">
                            <!-- page content holder -->
                                <div class="page-content-holder no-padding">
                                     <table class="table" border="1">
                                            <thead>
                                              <tr>
                                                <th>No</th>
                                                <th>Affiliate Title</th>
                                                <th>Earnings Bitcoins</th>
                                                <th>Earnings BitcoinCash</th>
                                                <th>Earnings Litecoins</th>
                                                <th>Earnings Dash</th>
                                                <th>Earnings Dogecoins</th>
                                                <th>Earnings Reddcoins</th>
                                                <th>Earnings Potcoins</th>
                                                <th>Earnings Feathercoins</th>
                                                <th>Earnings Vertcoins</th>
                                                <th>Earnings Peercoins</th>
                                                <th>Earnings MonetaryUnits</th>
                                                <th>Latest Affiliate Received, GMT Time</th>
                                                <th>Action</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=1; foreach($getaffiliated as $affiliate):?>
                                              <tr>
                                                <td><?php echo $i++;?></td>
                                                <td><?php echo $affiliate->title?></td>
                                                <td><?php echo $affiliate->bitcoinAddress?></td>
                                                <td><?php echo $affiliate->bitcoinCashAddress?></td>
                                                <td><?php echo $affiliate->litecoinAddress?></td>
                                                <td><?php echo $affiliate->dashcoinAddress?></td>
                                                <td><?php echo $affiliate->dogecoinAddress?></td>
                                                <td><?php echo $affiliate->reddcoinAddress?></td>
                                                <td><?php echo $affiliate->potcoinAddress?></td>
                                                <td><?php echo $affiliate->feathercoinAddress?></td>
                                                 <td><?php echo $affiliate->vertcoinAddress?></td>
                                                 <td><?php echo $affiliate->peercoinAddress?></td>
                                                <td><?php echo $affiliate->MonetaryUnitAddress?></td>
                                                <td><?php echo $affiliate->key_created?></td>
                                                <td><a  class="btn btn-info" href="<?= base_url();?>affiliated/edit_data/<?php echo $affiliate->affiliated_id;?>">EDIT</a> &nbsp;<a  class="btn btn-info" href="">Stats</a></td>
                                              </tr>      
                                             <?php endforeach;?>
                                            </tbody>
                                          </table>
                                          <div class="page-title"><a class="btn btn-info" href="<?php echo base_url();?>affiliated">Get New Additional Affilate Key</a></div><br>
                                    </div>
                                   
                            <!-- ./page content holder -->
                             </div>
                        </div>
                        
                    </div>
                    <!-- ./page content holder -->
                </div>
                <!-- close -->
                <!-- page content wrapper -->
                              
                <!-- ./page content wrapper -->
                
                <!-- page content wrapper -->
                <div class="page-content-wrap bg-light">
                    
                    <div class="divider"><div class="box"><span class="fa fa-angle-down"></span></div></div>                    
                    
                    <!-- page content holder -->
                    <div class="page-content-holder">
                                                
                        <div class="row">
                            
                            <div class="col-md-4">                                
                                <div class="text-column text-column-centralized this-animate" data-animate="fadeInLeft">
                                    <div class="text-column-icon">
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <h4>Company Mission</h4>
                                    <div class="text-column-info">
                                        Fugiat dapibus, tellus ac cursus commodo, mauris sit condim eser ntumsi nibh, uum a justo vitaes amet risus amets un. Posi sectetut amet fermntum orem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nons.
                                    </div>
                                </div>                                
                            </div>
                            
                            <div class="col-md-4">                                
                                <div class="text-column text-column-centralized this-animate" data-animate="fadeInUp">
                                    <div class="text-column-icon">
                                        <span class="fa fa-hand-o-up"></span>
                                    </div>
                                    <h4>Our Skills</h4>
                                    <div class="text-column-info">
                                        Donec eget bibendum purus. Pellentesque risus dui, fringilla et luctus sit amet, pulvinar eget ante. Nulla a venenatis metus. Vivamus dignissim urna eget velit luctus, ut vestibulum mi dignissim. Maecenas imperdiet.
                                    </div>
                                </div>                                
                            </div>
                            
                            <div class="col-md-4">                                
                                <div class="text-column text-column-centralized this-animate" data-animate="fadeInRight">
                                    <div class="text-column-icon">
                                        <span class="fa fa-clock-o"></span>
                                    </div>
                                    <h4>Work Progress</h4>
                                    <div class="text-column-info">
                                        Morbi iaculis finibus nisi sed convallis. Sed id ex varius, suscipit orci in, rhoncus magna. Aliquam aliquam magna felis, ac euismod ligula blandit id. Praesent ac mollis enim, eget euismod ligula.
                                    </div>
                                </div>                                
                            </div>
                            
                        </div>
                    </div>
                    <!-- ./page content holder -->
                </div>
                <!-- ./page content wrapper -->
                
            </div>
            <!-- ./page content -->
            
           <?php $this->load->view('frontend/footer');?>  

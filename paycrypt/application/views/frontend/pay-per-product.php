<?php $this->load->view('frontend/headerfront');?>  

<div class="page-content-wrap bg-light">
    <div class="page-content-holder no-padding">
        <div class="page-title">
            <h1>Pay Per Product</h1>
            <ul class="breadcrumb">
                <li><a style="color: black;" class="btn btn-success" href="<?php echo base_url();?>product/all-product-show">All Product Show</a>
                </li>
               
            </ul>
        </div>
    </div>
</div>
<div class="page-content-wrap">
    <div class="page-content-holder">
        <div class="block-heading this-animate" data-animate="fadeInDown">
            <h2>Payment Box</h2>
            <div class="block-heading-text">
                <a class="btn btn-info" href="<?php echo base_url();?>product/add-product">Add Product</a>
            </div>
        </div>
        <div class="row">
           <table class="table datatable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Active?</th>
                        <th>Title</th>
                        <th>Price in USD</th>
                        <th>Price in Coins</th>
                        <th>Total Sold</th>
                        <th>Latest Received Payment, GMT</th>
                        <th>Record Updated, GMT</th>
                        <th>Record Created, GMT</th>
                        <th>Payment Expiry Period</th>
                        <th>Default Payment Box Coin</th>
                        <th>Default Coin only?</th>
                         <th>Default Box Language</th>
                        <th>Purchase Limit</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $i=1;
                    foreach($getProduct as  $value){ 
                        ?>
                    <tr>
                        <td><?php echo $i++;?></td>
                        <td><?php echo$value->active; ?></td>
                        <td><?php echo $value->productTitle; ?></td>
                        <td><?php echo $value->priceUSD; ?></td>
                        <td><?php echo $value->priceCoin; ?></td>
                        <td><?php echo $value->priceLabel; ?></td>
                        <td><?php echo $value->paymentCnt; ?></td>
                        <td><?php echo $value->createtime; ?></td>
                        <td><?php echo $value->updatetime; ?></td>
                        <td><?php echo $value->expiryPeriod; ?></td>
                        <td><?php echo $value->ak_action; ?></td>
                        <td><?php echo $value->defCoin; ?></td>
                        <td><?php echo $value->lang;?></td>
                        <td><?php echo $value->purchases; ?></td>
                        <td>
                            <a class="btn btn-info" href="<?php echo base_url();?>product/product-edit/<?= $value->productID;?>"> Edit </a><a class="btn btn-info" style="margin-top: 5px;" href="<?php echo base_url();?>product/product-delete/<?= $value->productID;?>"> Delete </a>
                            </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>
            <?php $this->load->view('frontend/footer');?>  

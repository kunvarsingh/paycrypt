<?php $this->load->view('frontend/header');?>
<div class="col-sm-3"></div>
  <div class="panel panel-default col-sm-6">
    <div class="panel-heading">Total: <?php echo $balance; ?> BCH (BCC)
        <div class="pull-right"><img style="margin-top: -10px;" src="<?php echo base_url();?>;assets/images/payment.png" width="200" height="30">
        </div>
    </div>
    <div class="panel-body">
        <form action="<?php echo base_url();?>wallet/payment-wallet" method="post">
            
            <div align="center"> 
                <a onclick=copy("<?php echo $newaddress?>"); class="btn btn-primary">Copy</a>
                    <input type="text" style="margin-top: 20px; width:60%;" name="copy" disabled value="<?= $newaddress?>">
            </div>
            Public Key:<input type="text" name="publicURL" value="<?php echo $privateURL;?>"><br>
            Price:<input type="text" name="coinRate" value="<?php echo $coinRate;?>"><br>
            Coin Name:<input type="hidden" name="coinLabel" value="<?php echo $coinLabel;?>"><br>

           
            
            <div align="center">
               <!--  <input class="btn btn-info" type="submit" style="margin-top: 20px; width:60%;" name="submit" value="<?= $coinLabel?>"> -->
               <input type="image" name="submit" src="<?php echo base_url();?>assets/images/images1.jpeg" height="100" width="130" border="0" alt="Submit" />
            </div>
         </form>
          <div align="center">
                <textarea class="form-control" rows="10" cols="40">
                    <form action="<?php echo base_url();?>wallet/payment-wallet" method="post">
                        <input type="hidden" name="id" value="<?php echo $id?>">
                        <input type="hidden" name="publicURL" value="<?php echo $privateURL?>">
                        <input type="hidden" name="coinRate" value="<?php echo $coinRate;?>">
                        <input type="hidden" name="coinLabel" value="<?php echo $coinLabel?>">
                        <div align="center">
                        <input type="image" name="submit" src="<?php echo base_url();?>assets/images/images1.jpeg" height="100" width="130" border="0" alt="Submit" />
                    </div>
                    </form>
                </textarea>
            </div>
     </div>
 </div>
<script>
  function copy($addr)
  {
    confirm($addr);
  }
</script>
  
<?php $this->load->view('frontend/footer');?>

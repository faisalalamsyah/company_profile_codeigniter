<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<title>Modern Business - Start Bootstrap Template</title>
    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h4 class="page-header">Our Product</h2>
            </div>
    <?php foreach ($gambar as $k => $row) {?>
            <div class="col-md-2 col-sm-6 col-xs-6">    		
			<a href=""><img class="img-thumbnail" src="<?php echo base_url();?>admin/assets/img/portfolio/<?=$row->gambar1?>" alt=""></a>
            <p align="center"> <b><?=$row->judul?></p></b>
            </div> 
        
  <?php  } ?>
  </div>
        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h4 class="page-header">Customer</h4>
            </div>
            <?php foreach ($customer as $b => $row) {?>
            <div class="col-md-2 col-sm-6 col-xs-6">
                <a href="portfolio-item.html">
                    <img  class="img-responsive customer-img" src="<?php echo base_url();?>admin/assets/img/customer/<?=$row->gambar?>" alt="<?=$row->website?>" title="<?=$row->customer?>">
                </a>
            </div> 
            <?php }?>

        </div>
        <!-- /.row -->


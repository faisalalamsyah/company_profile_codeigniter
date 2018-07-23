<!-- Page Content -->
    <div class="container">
       <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?=$judul?>
                    <small><?=$title?></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>">Home</a>
                    </li>
                    <li class="active"><?=$title?></li>
                </ol>
            </div>
        </div>
        <!-- Project One -->
        <div class="row">

        <?php 
        $no = $this->uri->segment('8') + 1;
        foreach ($tb_portfolio as $b => $row) {?>
        <div class="col-md-7" style="padding: 10px">
             
                <a href="<?php echo base_url('portfolio/detail/'); ?><?=$row->id?>/<?=$row->slug?>"><img width="500" class="img-thumbnail" src="<?php echo base_url('admin/assets/img/portfolio/'); ?><?=$row->gambar1?>" alt="">
                </a>

            </div>
            <div class="col-md-5">
                <h2><?=$row->judul?></h2>
                <p><?php echo word_limiter($row->deskripsi,90); ?></p>
                <a class="btn btn-primary" href="<?php echo base_url('portfolio/detail/'); ?><?=$row->id?>/<?=$row->slug?>">View Project</i></a>

            </div>  <?php }?>
        </div>

         <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">

                <h3><?php 
                    echo $this->pagination->create_links();?></h3>
                </ul>
            </div>
        </div>
        
      
        
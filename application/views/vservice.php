  <!-- Page Content -->
  <div class="container"> 
      <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Service<br>
                <small>kami melayani</small></h1>

                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>">Home</a>
                    </li>
                    <li class="active">Service</li>
                </ol>
            </div>
            <div class="col-lg-12">

              
                    
                <ul id="myTab" class="nav nav-tabs nav-justified">
                  <?php foreach ($hasil as $b => $row) { 
                    $n=1; ?>

                    <li class="<?=$row->aktif?>"><a href="#<?=$row->id?>" data-toggle="tab"><i class="fa fa-tree "></i> <?=$row->service?></a>
                    </li><?php } ?>
                </ul>  


                <div id="myTabContent" class="tab-content">
                 <?php foreach ($hasil as $b => $row) {
                    $n=1; ?>
                    <div class="tab-pane fade in <?=$row->aktif?>" id="<?=$row->id?>">
                        <h4><?=$row->judul?></h4>
                       <p><?=$row->deskripsi?></p>
                       <p></p>
                    </div>

                    <?php } ?>
                </div>



            </div>
        </div>
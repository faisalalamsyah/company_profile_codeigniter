  <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?=$title?>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>">Home</a>
                    </li>
                    <li class="active">About</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="admin/assets/img/slide/<?=$gambar?>" alt="<?=$judul?>" title="<?=$judul?>">
            </div>
            <div class="col-md-6">
                <?php foreach ($hasil as $b => $row) {?>
                <h2><?=$row->judul?></h2>
                <p><?=$row->deskripsi?></p>
                    
                <?php }?>

            </div>
        </div>
        <!-- /.row -->

    



     

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
 <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact
                    <small>Subheading</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->

             <iframe src="<?=$hasil->google_maps?>" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Contact Details</h3>
                <p><?=$hasil->company?></p>
                <p><?=$hasil->alamat?><p/>
                
                <p><i class="fa fa-phone"></i> <?=$hasil->phone?></p>
                <p><i class="fa fa-instagram"></i> <?=$hasil->instagram?></p>
                <p><i class="fa fa-twitter"></i> <?=$hasil->twitter?></p>
                <p><i class="fa fa-facebook"></i> <?=$hasil->facebook?></p>
                <p><i class="fa fa-envelope-o"></i> <a href=""> <?=$hasil->email?></a>
                </p>
                <p><i class="fa fa-clock-o"></i> Monday - Friday: 9:00 AM to 5:00 PM</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        

    
    </div>
    <!-- /.container -->


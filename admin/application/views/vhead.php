<?php
defined ('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url("assets/css/bootstrap.css");?>" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="<?php echo base_url("assets/css/sb-admin.css"); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url("assets/font-awesome/css/font-awesome.min.css"); ?>">
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>">ADMINISTRATOR</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
          
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i>Form<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url('user'); ?>">User</a></li>
                <li><a href="<?php echo base_url('slide'); ?>">Slide</a></li>
                <li><a href="<?php echo base_url('about'); ?>">About</a></li>
                <li><a href="<?php echo base_url('company'); ?>">Company Name</a></li>
                <li><a href="<?php echo base_url('customer'); ?>">Our Happy Customer</a></li>
                <li><a href="<?php echo base_url('service'); ?>">Service</a></li>
                <li><a href="<?php echo base_url('list_portfolio'); ?>">Portfolio</a></li>
                <li><a href="<?php echo base_url('category'); ?>">Category Product</a></li>
                </ul>
  <!--               <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-pencil-square-o"></i>Post
                <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="">Test</a></li>
                </li> -->
              </ul>
            </li>
          </ul>

         
        </div><!-- /.navbar-collapse -->
      </nav>

      
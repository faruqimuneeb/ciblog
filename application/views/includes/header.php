<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>Blog</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />



   <!-- BEGIN GLOBAL MANDATORY STYLES -->          
   <!--- <link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>-->
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <!-- END GLOBAL MANDATORY STYLES -->
   
   <!-- BEGIN PAGE LEVEL PLUGIN STYLES --> 
   <link href="<?php echo base_url(); ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />              
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/revolution_slider/css/rs-style.css" media="screen">
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/revolution_slider/rs-plugin/css/settings.css" media="screen"> 
   <link href="<?php echo base_url(); ?>assets/plugins/bxslider/jquery.bxslider.css" rel="stylesheet" />                
   <!-- END PAGE LEVEL PLUGIN STYLES -->

   <!-- BEGIN THEME STYLES --> 
   <link href="<?php echo base_url(); ?>assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url(); ?>assets/css/themes/blue.css" rel="stylesheet" type="text/css" id="style_color"/>
   <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url(); ?>assets/css/themes/green.css" rel="stylesheet" type="text/css"/>
   <!-- END THEME STYLES -->
   <link rel="shortcut icon" href="favicon.ico" />

   <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="footer-fixed">
	
    <!-- BEGIN HEADER -->
    <div class="header navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				
				<!-- BEGIN LOGO (you can use logo image instead of text)-->
				<a class="navbar-brand" href="<?php echo base_url(); ?>">
					<img src="<?php echo base_url(); ?>assets/img/logo_1.png" id="logoimg" alt="" style="width: 160px; ">
				</a>
				<!-- END LOGO -->
			</div>
		
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-left">
					<li class="">
            <a href="<?php echo base_url(); ?>">Home</a>
					</li>					
					<li><a href="<?php echo base_url(); ?>about">About</a></li>
          <li><a href="<?php echo base_url(); ?>contactus">Contact us</a></li>
          <li class=""><a href="<?php echo base_url(); ?>posts">Blog</a></li>                        
          <li class=""><a href="<?php echo base_url(); ?>categories">Categories</a></li>                        
        </ul>
        <ul class="nav navbar-nav pull-right">

          <li class="">
              <a href="<?php echo base_url(); ?>posts/create" ><i class="fa fa-sticky-note" aria-hidden="true"></i>
Create Post</a>
          </li>
          <li class="">
              <a href="<?php echo base_url(); ?>categories/create" ><i class="fa fa-list" aria-hidden="true"></i>
Create Category</a>
          </li>         
          <li class="">
              <a href="<?php echo base_url(); ?>users/register" ><i class="fa fa-user-plus" aria-hidden="true"></i>
Register</a>
          </li>
				</ul>
			</div>
			<!-- BEGIN TOP NAVIGATION MENU -->
		</div>
    </div>
    <!-- END HEADER -->
    <!-- BEGIN REVOLUTION SLIDER -->
    <div class="fullwidthbanner-container slider-main margin-bottom-10">
        <div class="fullwidthabnner">
            <div class="tp-bannertimer tp-bottom"></div>
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->
    <!-- BEGIN PAGE CONTAINER -->  
    <div class="page-container">
      <div class="container">
        <!-- displaying flash messages -->

        <?php 
            if($this->session->flashdata('user_registered')){
              echo "<p class=\"alert alert-success\">".$this->session->flashdata('user_registered')."</p>";
            }

            if($this->session->flashdata('post_created')){
              echo "<p class=\"alert alert-success\">".$this->session->flashdata('post_created')."</p>";
            }
            if($this->session->flashdata('post_updated')){
              echo "<p class=\"alert alert-success\">".$this->session->flashdata('post_updated')."</p>";
            }
            if($this->session->flashdata('post_deleted')){
              echo "<p class=\"alert alert-success\">".$this->session->flashdata('post_deleted')."</p>";
            }
            if($this->session->flashdata('category_created')){
              echo "<p class=\"alert alert-success\">".$this->session->flashdata('category_created')."</p>";
            }
        ?>
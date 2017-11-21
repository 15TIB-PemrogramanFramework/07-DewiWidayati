<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Free Multipager Template : Linuji</title>

    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet" />
    <!-- ANIMATE STYLE  -->
    <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet" />
    <!-- FLEXSLIDER STYLE  -->
    <link href="<?php echo base_url();?>assets/css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONTS  -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css' />
     <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />
    
</head>
<body>

 <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
             
                    <img src="<?php echo base_url();?>assets/img/logo1.png" />
               
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                   <?php $this->load->view('Member/Menu_member');?>
                </div>

            </div>
        </div>
    </section>
     <!-- MENU SECTION END-->
    <div id="slideshow-sec">
        <div id="carousel-div" class="carousel slide" data-ride="carousel" >
                   
                    <div class="carousel-inner">
                        <div class="item active">

                            <img src="<?php echo base_url();?>assets/img/1b.jpg" alt=""/>
                            <div class="carousel-caption">
                          <h1 class="wow slideInLeft" data-wow-duration="2s" > Welcome to Almadani Shop</h1>      
                                 <h2 class="wow slideInRight" data-wow-duration="2s" >Happy Shopping</h2>  
                            </div>
                           
                        </div>
                        <div class="item">
                            <img src="<?php echo base_url();?>assets/img/1a.jpg" alt="" />
                            <div class="carousel-caption">
                          <h1 class="wow slideInLeft" data-wow-duration="2s" >Welcome to almadani shop</h1>      
                                 <h2 class="wow slideInRight" data-wow-duration="2s" >Happy shopping</h2>  
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo base_url();?>assets/img/1d.jpg" alt="" />
                            <div class="carousel-caption">
                          <h1 class="wow slideInLeft" data-wow-duration="2s" >Welcome to almadani shop</h1>      
                                 <h2 class="wow slideInRight" data-wow-duration="2s" >Happy shopping</h2>  
                            </div>
                           
                        </div>
                    </div>
                    <!--INDICATORS-->
                     <ol class="carousel-indicators">
                        <li data-target="#carousel-div" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-div" data-slide-to="1"></li>
                        <li data-target="#carousel-div" data-slide-to="2"></li>
                    </ol>
                    <!--PREVIUS-NEXT BUTTONS-->
                     <a class="left carousel-control" href="#carousel-div" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-div" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
    </div>
    <!-- BELOW SLIDESHOW SECTION END-->
      <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <h3 class="tag-home"><b>Almadani Shop </br> Pusatnya gamis dan jilbab muslimah </br> Happy Shopping :)</h3> 
               <hr />
                 </div>
            </div>
  
     <!-- PARALLAX LIKE SECTION END-->
    <div class="just-sec">
        <div class="container">
             <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="head-line">Our Product </h1>
                </div>
            </div>
       <div class="col-md-4 ">

                    <div class="portfolio-item awesome mix_all" data-cat="awesome" >


                        <img src="<?php echo base_url();?>assets/img/a.jpg" class="img-responsive " alt="" />
                        
                      </div></div>
                       <div class="col-md-4 ">

                    <div class="portfolio-item awesome mix_all" data-cat="awesome" >


                        <img src="<?php echo base_url();?>assets/img/f.jpg" class="img-responsive " alt="" />
                       
                            
            </div></div>
             <div class="col-md-4 ">

                    <div class="portfolio-item awesome mix_all" data-cat="awesome" >


                        <img src="<?php echo base_url();?>assets/img/i.jpg" class="img-responsive " alt="" />
                       
                          
    </div>
    </div>   
    </div> 
    <br><center>
                  <a href="<?php echo base_url()."index.php/Welcome/Produk_member"; ?>" class="btn btn-info btn-lg"><b>MORE ALL</a></center></div> </div>
     <!--JUST SECTION END-->
    
      <!--SET-DIV SECTION END-->
   
    <div class="footer-sec">
         <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div style="text-align:right;padding:5px;"><center>
                   &copy;2014 yourdomain.com | <a href="http://www.binarytheme.com/" style="color:#fff;" target="_blank" >Designed By: Binarytheme.com</a>
                </div></center>
            </div>
    </div>
    </div>
       </div>
     <!--FOOTER SECTION END-->
      <!-- WE PUT SCRIPTS AT THE END TO LOAD PAGE FASTER-->
     <!--CORE SCRIPTS PLUGIN-->
    <script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
     <!--BOOTSTRAP SCRIPTS PLUGIN-->
<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
     <!--WOW SCRIPTS PLUGIN-->
    <script src="<?php echo base_url();?>assets/js/wow.js"></script>
     <!--FLEXSLIDER SCRIPTS PLUGIN-->
    <script src="<?php echo base_url();?>assets/js/jquery.flexslider.js"></script>
     <!--CUSTOM SCRIPTS -->
    <script src="<?php echo base_url();?>assets/js/custom.js"></script>
</body>

</html>
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
  <div class="just-sec">
         <div class="container">
             <div class="row">
             <div class="below-slideshow">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="head-line">Our Product </h1>
                <br>
                </div>
            </div><?php foreach ($Barang as $key => $value) { ?>
       <div class="col-md-4 ">
         
                   <a href="#"><img class="card-img-top" src="<?php echo site_url()?>assets/admin/uploads/<?php echo $value->gambar; ?>" alt="" width="350" height="250"></a>
            <div class="card-body">
              <h4 class="card-title">
                
              </h4>
                 <ul class="list-group list-group-flush">
                   <b>
                    <li class="list-group-item"> <?php echo $value->nama_barang; ?></li>
                    <li class="list-group-item"> <?php echo $value->bahan;; ?></li>
                    <li class="list-group-item"> <?php echo $value->keterangan;; ?></li>
                    <li class="list-group-item"><?php echo $value->harga; ; ?></li>

                    <li class="list-group-item">
                        <center> <a href="<?php echo base_url()."index.php/Memesan/tambah/".$value->id_barang?>" class="btn btn-primary">Pesan</a></center>
                    </li>
                </ul>      
                          
    </div>
    </div> <?php } ?>  
    </div> 
    </div>
</div>
     <!--JUST SECTION END-->

     <!-- PARALLAX LIKE SECTION END-->

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
     <!--PRETTY PHOTO FOR GALLERY -->
    <script src="<?php echo base_url();?>assets/js/jquery.prettyPhoto.js"></script>
     <!--PHOTO FILTER -->
    <script src="<?php echo base_url();?>assets/js/jquery.mixitup.min.js"></script>
     <!--CUSTOM SCRIPTS -->
    <script src="<?php echo base_url();?>assets/js/custom.js"></script>
</body>

</html>

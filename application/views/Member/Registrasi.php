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
		<!--_______________________________________Register_________________________________ -->

<b>
<center>


					<form action="<?php echo base_url(). 'index.php/Customer/daftar_aksi'; ?>" method="post">
						<table>
							<tbody>
							<tr> <td> Nama </td>
								<td> : 	   </td>
								<td> <div class=""><br>
									<input type="text" class="form-control" name="nama" size="50">
							<br></div></td>
							</tr>
							
							<tr> <td> Username </td>
								<td> : </td>
								<td> <div class="">
									<input type="text" class="form-control" name="username" size="50">
							</div></td>
							</tr>
								<tr> <td> Password </td>
								<td> : </td>
								<td><div class=""><br>
									<input type="password" class="form-control" name="password" size="50">
							<br></div></td>
							</tr>

							<tr> <td> Alamat </td>
								<td> : </td>
								<td><div class="">
									<input type="text" class="form-control" name="alamat" size="50">
							</div></td>
							</tr>
							<tr> <td> No Hp </td>
								<td> : </td>
								<td> <div class=""><br>
									<input type="text" class="form-control" name="no_hp" size="50">
							<br></div></td>
							</tr>
							<tr> <td></td>
								<td><td><input type="submit" class="btn btn-primary" value="DAFTAR" /></td></td>
							<br><td></td>
							</tr>
						</table>
					</form>
					
				</center>
			</div>
		</div>
	</div>
	
	<br><br><br><br>
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
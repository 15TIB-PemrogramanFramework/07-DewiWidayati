<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_sidemenu()
	{
		return ' <li>
                        <a href="'.site_url('index.php/Home').'"><i class="fa fa-home fa-3x"></i> Dashboard</a>
                    </li>
	   
                     <li>
                        <a  href="'.site_url('index.php/Barang').'"><i class="fa fa-archive fa-3x"></i>Data Barang</a>
                    </li>
                    <li>
                        <a  href="'.site_url('index.php/Customer/data_customer').'"><i class="fa fa-user fa-3x"></i>Data Customer</a>
                    </li>
                           <li  >
                        <a  href="'.site_url('index.php/Memesan').'"><i class="fa fa-shopping-cart fa-3x"></i>Data Pesanan</a>
                    </li>   
                      <li  >
                        <a href="'.site_url('index.php/Konfirmasi').'"><i class="fa fa-download fa-3x"></i>Data Konfirmasi</a>
                    </li>
                   
		</li>';
	}


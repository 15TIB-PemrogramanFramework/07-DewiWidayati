 <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo base_url()."index.php/Welcome/Index_member"; ?>" class="menu-top-active" >HOME</a></li>
                            <li><a href="<?php echo base_url()."index.php/Welcome/About_member"; ?>" class="menu-top-active">ABOUT US</a></li>
                            <li><a href="<?php echo base_url()."index.php/Welcome/Produk_member"; ?>" class="menu-top-active">PRODUK</a></li>
                            <li><a href="<?php echo base_url()."index.php/Welcome/Contact_member"; ?>" class="menu-top-active">CONTACT US</a></li>
                            <li><a href="<?php echo base_url()."index.php/Welcome/Status_member/".$this->session->userdata('username'); ?>" class="menu-top-active">Konfirmasi Pembayaran</a></li>
                            <li><a href="<?php echo base_url()."index.php/LoginMember/logout"; ?>" class="menu-top-active">LOG OUT</a></li>
                        </ul>
                    </div>
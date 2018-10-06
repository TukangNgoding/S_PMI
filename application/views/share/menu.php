<div class="header-default">
  <div class="header-topbar">
      <div class="container">
          <div class="header-topbar__contact-info">

          </div>
          <ul class="nav header-topbar__nav">
          </ul>
      </div>
  </div>
    <div id="header-menu" class="header-default__menu">
        <div class="container">
            <nav class="navbar navbar-toggleable-lg">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#header-default-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src='<?php echo site_url();?>dist/download.png' width="50" ><a class="navbar-brand" href="<?php echo site_url();?>home">&nbsp P<span class="colorred">  M</span>  I<br></a></img>

                <div id="header-default-menu" class="collapse navbar-collapse">
                    <div class="header-default__menu-collapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="<?php echo site_url();?>home" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                            </li>
                            <?php
                               $rs=$this->session->userdata('rs');
                               if(isset($rs)){
                            ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Info Pelayanan Darah</a>
								                <div class="dropdown-menu" data-dropdown-in="zoomIn" data-dropdown-out="zoomOut">
                                    <a class="dropdown-item" href="<?php echo site_url();?>permintaan_darah">Permintaan Darah</a>
                                    <a class="dropdown-item" href="<?php echo site_url();?>pemesanan/status_permintaan_darah">Status Permintaan</a>

                                </div>
						                </li>
                          <?php }?>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="<?php echo site_url();?>darah/lihat_stok_darah" role="button" aria-haspopup="true" aria-expanded="false">Stok Darah</a>
                            </li>
                            <?php
                               $user=$this->session->userdata('user');
                               $rs=$this->session->userdata('rs');
                               if(isset($rs)||isset($user)){
                               }
                               else{
                            ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Info Pelayanan Darah</a>
								                <div class="dropdown-menu" data-dropdown-in="zoomIn" data-dropdown-out="zoomOut">
                                    <a class="dropdown-item" href="<?php echo site_url();?>donasi">Donasi</a>
                                    <a class="dropdown-item" href="<?php echo site_url();?>pengolahan_darah">Pengolahan Darah</a>
                                    <a class="dropdown-item" href="<?php echo site_url();?>pengujian_darah">Pengujian Darah</a>
                                    <a class="dropdown-item" href="<?php echo site_url();?>penyimpanan_darah">Penyimpanan Darah</a>
                                    <a class="dropdown-item" href="<?php echo site_url();?>distribusi_darah">Distribusi Darah</a>
                                    <a class="dropdown-item" href="<?php echo site_url();?>serba_serbi">Serba-Serbi Darah</a>
                                </div>
						                </li>
                          <?php }?>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="<?php echo site_url();?>lihat_jadwal_mobil" role="button" aria-haspopup="true" aria-expanded="false">Jadwal Mobil</a>

                            </li>
                            <?php
                               $user=$this->session->userdata('user');
                               if($user==2){
                            ?>
                            <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Setting</a>
                                <div class="dropdown-menu" data-dropdown-in="zoomIn" data-dropdown-out="zoomOut">
                                    <a class="dropdown-item" href="<?php echo site_url();?>darah/lihat_stok_darah">Profile PMI</a>
                                    <a class="dropdown-item" href="<?php echo site_url();?>tambah_pendonor">Tambah Pendonor</a>
                                    <a class="dropdown-item" href="<?php echo site_url();?>tambah_stok">Tambah Stok</a>
                                    <a class="dropdown-item" href="<?php echo site_url();?>tambah_ukuran">Ubah Password</a>

                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="<?php echo site_url();?>pemesanan/data_permintaan" role="button" aria-haspopup="true" aria-expanded="false">Data Permintaan Darah</a>
                            </li>

                            <?php } ?>
                            <?php
                               $rs=$this->session->userdata('rs');
                               if(isset($rs)){
                            ?>
                            <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Setting</a>
                                <div class="dropdown-menu" data-dropdown-in="zoomIn" data-dropdown-out="zoomOut">
                                    <a class="dropdown-item" href="<?php echo site_url();?>darah/lihat_stok_darah">Profile Rumah Sakit</a>
                                    <a class="dropdown-item" href="<?php echo site_url();?>tambah_ukuran">Ubah Password</a>

                                </div>
                            </li>
                            <?php } ?>
                            <?php
                               $user=$this->session->userdata('user');
                               if($user==1){
                            ?>
              							<li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Setting</a>
              								  <div class="dropdown-menu" data-dropdown-in="zoomIn" data-dropdown-out="zoomOut">
                                    <a class="dropdown-item" href="<?php echo site_url();?>darah/lihat_stok_darah">Lihat Stok Darah</a>
                                    <a class="dropdown-item" href="<?php echo site_url();?>tambah_stok">Tambah Stok</a>
                                    <a class="dropdown-item" href="<?php echo site_url();?>tambah_ukuran">Tambah Ukuran</a>
                                    <a class="dropdown-item" href="<?php echo site_url();?>tambah_pendonor">Tambah Pendonor</a>
                                    <a class="dropdown-item" href="<?php echo site_url();?>lihat_jadwal_mobil">Tambah Mobil Unit</a>
                                    <a class="dropdown-item" href="<?php echo site_url();?>komponen">Tambah Komponen</a>
                                    <a class="dropdown-item" href="<?php echo site_url();?>rs/tambah_rs">Tambah Rumah Sakit</a>
                                    <a class="dropdown-item" href="<?php echo site_url();?>pmi">Tambah PMI</a>
                                </div>
						                </li>
                            <?php } ?>
                            <?php
                               $user=$this->session->userdata('user');
                               $rs=$this->session->userdata('rs');
                               if(isset($rs)||isset($user)){
                            ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="<?php echo site_url();?>proses_login/logout" role="button" aria-haspopup="true" aria-expanded="false">logout</a>
                            </li>


                          <?php }else{ ?>

                            <li class="nav-item dropdown">
                                <a class="nav-link" href="<?php echo site_url();?>login" role="button" aria-haspopup="true" aria-expanded="false">Login</a>
                            </li>
                          <?php } ?>

                        </ul>

                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

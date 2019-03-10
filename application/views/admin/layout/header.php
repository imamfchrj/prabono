<!-- ########## START: HEAD PANEL ########## -->
<div class="br-header">
      <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- br-header-left -->
      <div class="br-header-right">
        <nav class="nav">
           <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name hidden-md-down"><?=$this->session->userdata('username');?></span>
                <?php
                 ?>
                <img src="<?php echo base_url().'probono_asset/probono/asset/default-avatar.png'; ?>" class="wd-25 rounded-circle" alt="">
              <span class="square-10 bg-success"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href="<?=base_url()?>admin/logout"><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
      </div><!-- br-header-right -->
    </div><!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    
    <script src="<?=base_url()?>assets_123/lib/jquery/jquery.js"></script>
    <script src="<?=base_url()?>assets_123/lib/popper.js/popper.js"></script>
    <script src="<?=base_url()?>assets_123/lib/bootstrap/bootstrap.js"></script>
    <script src="<?=base_url()?>assets_123/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="<?=base_url()?>assets_123/lib/moment/moment.js"></script>
    <script src="<?=base_url()?>assets_123/lib/jquery-ui/jquery-ui.js"></script>
    <script src="<?=base_url()?>assets_123/lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="<?=base_url()?>assets_123/lib/peity/jquery.peity.js"></script>
    <script src="<?=base_url()?>assets_123/lib/morris.js/morris.js"></script>
    <script src="<?=base_url()?>assets_123/lib/raphael/raphael.min.js"></script>
    <script src="<?=base_url()?>assets_123/lib/highlightjs/highlight.pack.js"></script>
    <!-- table -->

    <script src="<?=base_url()?>assets_123/js/bracket.js"></script>
    <script src="<?=base_url()?>assets_123/js/chart.morris.js"></script>
    
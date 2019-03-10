<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Bracket Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="<?=base_url()?>assets_123/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?=base_url()?>assets_123/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="<?=base_url()?>assets_123/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="<?=base_url()?>assets_123/lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
    <link href="<?=base_url()?>assets_123/lib/datatables/jquery.dataTables.css" rel="stylesheet"> <!-- table -->
    <link href="<?=base_url()?>assets_123/lib/morris.js/morris.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets_123/css/bracket.css">
  </head>
  <script>
    var ROOT="<?=base_url()?>";
  </script>
  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href="<?=base_url()?>admin/index"><span>[</span>E-Probono<span>]</span></a></div>
    <div class="br-sideleft overflow-y-auto">
      <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
      <div class="br-sideleft-menu">
        <a href="<?=base_url()?>admin/dashboard" class="br-menu-link <?php if($menu == 'dashboard') echo 'active'?>">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="<?=base_url()?>admin/admin" class="br-menu-link <?php if($menu == 'admin') echo 'active'?>">
          <div class="br-menu-item">
              <i class="menu-item-icon icon ion-ios-people tx-22"></i>
              <span class="menu-item-label">Admin Management</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="<?=base_url()?>admin/client" class="br-menu-link <?php if($menu == 'client') echo 'active'?>">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-people tx-22"></i>
            <span class="menu-item-label">Client Management</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="#" class="br-menu-link <?php if($menu == 'lawyers') echo 'active show-sub'?>">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-eye tx-24"></i>
            <span class="menu-item-label">Advokat Management</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="<?=base_url()?>admin/act_lawyers" class="nav-link <?php if($sub_menu == 'act_lawyers') echo 'active'?>">Active Users</a></li>
          <li class="nav-item"><a href="<?=base_url()?>admin/kpi_lawyers" class="nav-link <?php if($sub_menu == 'kpi_lawyers') echo 'active'?>">KPI</a></li>
          <li class="nav-item"><a href="<?=base_url()?>admin/approval_lawyers" class="nav-link <?php if($sub_menu == 'approval_lawyers') echo 'active'?>">Approval Menu</a></li>
        </ul>
        <a href="<?=base_url()?>admin/status_probono" class="br-menu-link <?php if($menu == 'status') echo 'active'?>">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-list-outline tx-24"></i>
            <span class="menu-item-label">Pro Bono Status</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="<?=base_url()?>admin/tracking_agenda" class="br-menu-link <?php if($menu == 'agenda') echo 'active'?>">
          <div class="br-menu-item">
              <i class="menu-item-icon icon ion-ios-list-outline tx-24"></i>
              <span class="menu-item-label">Tracking Agenda</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="<?=base_url()?>admin/complaint" class="br-menu-link <?php if($menu == 'complaint') echo 'active'?>">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
            <span class="menu-item-label">Complaint</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->          
        <a href="#" class="br-menu-link <?php if($menu == 'master') echo 'active show-sub'?>">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Master</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="<?=base_url()?>admin/mst_category" class="nav-link <?php if($sub_menu == 'mst_category') echo 'active'?>">Kategori Probono</a></li>
          <li class="nav-item"><a href="<?=base_url()?>admin/mst_news" class="nav-link <?php if($sub_menu == 'mst_news') echo 'active'?>">Berita</a></li>
          <li class="nav-item"><a href="<?=base_url()?>admin/mst_news_kategori" class="nav-link <?php if($sub_menu == 'mst_news_kategori') echo 'active'?>">Kategori Berita</a></li>
          <li class="nav-item"><a href="<?=base_url()?>admin/mst_jasa" class="nav-link <?php if($sub_menu == 'mst_jasa') echo 'active'?>">Jasa</a></li>
          <li class="nav-item"><a href="<?=base_url()?>admin/mst_publikasi" class="nav-link <?php if($sub_menu == 'mst_publikasi') echo 'active'?>">Publikasi</a></li>
        </ul>
        <!--<a href="#" class="br-menu-link <?php if($menu == 'report') echo 'active show-sub'?>">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-book-outline tx-22"></i>
            <span class="menu-item-label">Report</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div>--><!-- menu-item -->
        <!--</a>--><!-- br-menu-link -->
        <!--<ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="<?//=base_url()?>admin/report_a" class="nav-link <?php// if($sub_menu == 'report_a') echo 'active'?>">Report A</a></li>
          <li class="nav-item"><a href="<?//=base_url()?>admin/report_b" class="nav-link <?php //if($sub_menu == 'report_b') echo 'active'?>">Report B</a></li>
        </ul>-->
      </div><!-- br-sideleft-menu -->

      <br>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->
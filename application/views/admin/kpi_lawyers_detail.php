<?php
$this->load->view('admin/layout/sidebar');
$this->load->view('admin/layout/header');
?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">KPI Advokat Detail</h4>
    </div><!-- d-flex -->
    <div class="br-pagebody">
    <div class="br-section-wrapper">
    <div class="form-layout form-layout-1">
        <div class="card shadow-base bd-0 rounded-0 widget-4">
            <div class="card-header ht-75">
            </div><!-- card-header -->
            <div class="card-body">
                <div class="card-profile-img">
                    <?php
                    $photo_profile = !empty($profile->foto)?base_url().'probono_asset/probono/asset/'.$profile->foto:base_url().'assets_123/img/default-avatar.png';
                    ?>
                    <img src="<?php echo $photo_profile ?>" width="120" height="110" class="img-responsive" alt="">
                </div><!-- card-profile-img -->
                <h4 class="tx-normal tx-roboto tx-black"><?php echo !empty($profile->firstname)?$profile->firstname.' '.$profile->lastname:""; ?></h4>
                <p class="mg-b-25"><?php echo !empty($profile->id_kta_advokat)?$profile->id_kta_advokat:""; ?></p>
                <p class="mg-b-0 tx-24">
<!--                    <a href="" class="tx-white-8 mg-r-5"><i class="fa fa-facebook-official"></i></a>-->
<!--                    <a href="" class="tx-white-8 mg-r-5"><i class="fa fa-twitter"></i></a>-->
<!--                    <a href="" class="tx-white-8 mg-r-5"><i class="fa fa-pinterest"></i></a>-->
<!--                    <a href="" class="tx-white-8"><i class="fa fa-instagram"></i></a>-->
                </p>
            </div><!-- card-body -->
        </div><!-- card -->
        <div class="row mg-b-25">
            <div class="col-lg-12">
                <div class="bd rounded table-responsive">
                    <table id="tableProfile" class="table table-bordered mg-b-0">
                        <thead>
                        <tr>
                            <th class="wd-5p">No</th>
                            <th class="wd-25p">Kasus</th>
                            <th class="wd-25p">Agenda</th>
                            <th class="wd-35p">Deskripsi</th>
                            <th class="wd-10p">Time Sheet</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no=1;
                        foreach ($values as $key => $row) {
                        ?>
                            <tr>
                                <th class="wd-5p"><?php echo $no++; ?></th>
                                <td class="wd-25p"><?php echo !empty($row->judul_kasus) ? $row->judul_kasus : ""; ?></td>
                                <td class="wd-25p"><?php echo !empty($row->title) ? $row->title : ""; ?></td>
                                <td class="wd-35p"><?php echo !empty($row->description) ? $row->description : ""; ?></td>
                                <td class="wd-10p"><?php echo !empty($row->hours) ? $row->hours : ""; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                        <tr>
                            <th colspan="4" class="wd-95p">TOTAL</th>
                            <th class="wd-10p"><?php echo !empty($kpi->hours) ? $kpi->hours : ""; ?></th>
                        </tr>
                        </tbody>
                    </table>
                </div><!-- bd-0 -->
            </div><!-- col-4 -->
        </div>
    </div><!-- form-layout -->
    </div>

    <!-- ########## END: MAIN PANEL ########## -->

    <script>


    </script>
<?php
$this->load->view('admin/layout/footer');
?>
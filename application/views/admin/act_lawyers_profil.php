<?php
$this->load->view('admin/layout/sidebar');
$this->load->view('admin/layout/header');
?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Advokat Profile</h4>
    </div><!-- d-flex -->
    <div class="br-pagebody">
    <div class="br-section-wrapper">
    <div class="form-layout form-layout-1">
        <div class="card shadow-base bd-0 rounded-0 widget-4">
            <div class="card-header ht-75">
            </div><!-- card-header -->
            <div class="card-body">
                <div class="card-profile-img">
                    <img src="http://via.placeholder.com/280x280" alt="">
                </div><!-- card-profile-img -->
                <h4 class="tx-normal tx-roboto tx-black"><?php echo !empty($values->firstname)?$values->firstname.' '.$values->lastname:""; ?></h4>
                <p class="mg-b-25"><?php echo !empty($values->id_kta_advokat)?$values->id_kta_advokat:""; ?></p>

                <p class="wd-md-500 mg-md-l-auto mg-md-r-auto mg-b-25"><?php echo !empty($values->biography)?$values->biography:""; ?></p>

                <p class="mg-b-0 tx-24">
                    <a href="" class="tx-white-8 mg-r-5"><i class="fa fa-facebook-official"></i></a>
                    <a href="" class="tx-white-8 mg-r-5"><i class="fa fa-twitter"></i></a>
                    <a href="" class="tx-white-8 mg-r-5"><i class="fa fa-pinterest"></i></a>
                    <a href="" class="tx-white-8"><i class="fa fa-instagram"></i></a>
                </p>
            </div><!-- card-body -->
        </div><!-- card -->
        <div class="row mg-b-25">
            <div class="col-lg-12">
                <div class="bd rounded table-responsive">
                    <table id="tableProfile" class="table table-bordered mg-b-0">
                        <tbody>
                        <tr>
                            <td width="30%"><b>NIK</b></td>
                            <td>
                                <?php echo !empty($values->id_ktp)?$values->id_ktp:"TEEEEEEEEES"; ?>
                            </td>
                        </tr>
                        <td width="30%"><b>Foto KTP</b></td>
                        <td>
                            <?php
                                $photo_ktp = !empty($values->photo_ktp)?base_url().$values->photo_ktp:'http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image';
                            ?>
                            <a class="mix-preview fancybox-button" href="<?php echo base_url($values->photo_ktp); ?>" title="KTP atas nama : <?php echo $values->firstname.' '.$values->lastname?> No KTP : <?php echo $values->id_ktp?>">
                                <img src="<?php echo $photo_ktp?>" width="200px" />
                            </a>
                            <div class="clearfix">&nbsp</div>

                        </td>
                        <tr>
                            <td width="30%"><b>Nama Lengkap</b></td>
                            <td>
                                <?php echo !empty($values->firstname)?$values->firstname.' '.$values->lastname:""; ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="30%"><b>ID Advokat</b></td>
                            <td>
                                <?php echo !empty($values->id_kta_advokat)?$values->id_kta_advokat:""; ?>
                            </td>
                        </tr>
                        <td width="30%"><b>Foto ID Advokat</b></td>
                        <td>
                            <?php
                            $photo_kta_advokat = !empty($values->kta_advokat)?base_url().$values->kta_advokat:'http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image';
                            ?>
                            <a class="mix-preview fancybox-button" href="<?php echo base_url($values->kta_advokat); ?>" title="KTA atas nama : <?php echo $values->firstname.' '.$values->lastname?> No KTA Advokat : <?php echo $values->id_kta_advokat?>">
                                <img src="<?php echo $photo_kta_advokat?>" width="200px" />
                            </a>
                            <div class="clearfix">&nbsp</div>
                        </td>
                        <tr>
                            <td width="30%"><b>Firts Title</b></td>
                            <td>
                                <?php echo !empty($values->first_title)?$values->first_title:""; ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="30%"><b>Last Title</b></td>
                            <td>
                                <?php echo !empty($values->last_title)?$values->last_title:""; ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="30%"><b>Email</b></td>
                            <td>
                                <?php echo !empty($values->email)?$values->email:""; ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="30%"><b>No Handphone</b></td>
                            <td>
                                <?php echo !empty($values->hp)?$values->hp:""; ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="30%"><b>Alamat Domisili</b></td>
                            <td>
                                <?php echo !empty($values->alamat_domisili)?$values->alamat_domisili:""; ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="30%"><b>Alamat KTP</b></td>
                            <td>
                                <?php echo !empty($values->alamat_ktp)?$values->alamat_ktp:""; ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="30%"><b>Provinsi</b></td>
                            <td>
                                <?php echo !empty($values->province)?$values->province:""; ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="30%"><b>Company Name</b></td>
                            <td>
                                <?php echo !empty($values->company_firm_name)?$values->company_firm_name:""; ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="30%"><b>Position</b></td>
                            <td>
                                <?php echo !empty($values->position_at_company)?$values->id_kta_advokat:""; ?>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div><!-- bd-0 -->
            </div><!-- col-4 -->
        </div>
    </div><!-- form-layout -->

    <!-- ########## END: MAIN PANEL ########## -->

    <script>


    </script>
<?php
$this->load->view('admin/layout/footer');
?>
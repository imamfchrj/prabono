<?php
    $this->load->view('admin/layout/sidebar');
    $this->load->view('admin/layout/header');
?>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="pd-30">
            <h4 class="tx-gray-800 mg-b-5">Advokat Management - Approval Menu</h4>
        </div><!-- d-flex -->
        <div class="br-approve-lawyers-body">
            <?php if(count($values) < 1){?>
                <div class="col-md-12 text-center">
                    <div class="field clearfix " style="margin-top:24px;">
                        <div class="form-group row form-biodata" style="background:black;">
                            <div href="#" class="blue_deep form-control col-md-12">Belum Tersedia</div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php
            foreach ($values as $key => $row) {
            ?>
            <div class="form-layout form-layout-1">
                <div class="br-lawyers-body rounded-10">
                    <div class="br-lawyers-header d-flex justify-content-between">
                        <div class="media align-items-center">
                            <?php
                            $photo_profile = !empty($row->foto)?base_url().'probono_asset/probono/asset/'.$row->foto:base_url().'assets_123/img/default-avatar.png';
                            ?>
                            <img src="<?php echo $photo_profile ?>" class="wd-75 rounded-circle" alt="">
                            <div class="media-body mg-l-10">
                                <p class="tx-inverse tx-medium mg-b-0"><?php echo $row->firstname.' '.$row->lastname; ?></p>
                                <p class="tx-12 mg-b-0">
                                <span><?php echo $row->id_kta_advokat; ?></span>
                                </p>
                            </div><!-- media-body -->
                        </div><!-- media -->
                        <nav class="nav nav-inline tx-size-24 mg-b-0 lh-0">
<!--                            <a href="" class="nav-link tx-gray-light hover-inverse pd-x-5"><i class="icon ion-printer"></i></a>-->
                            <a id="closeMail" href="" class="nav-link pd-x-5 mg-l-15 hidden-xl-up">
                            <i class="icon ion-close"></i>
                            </a>
                        </nav>
                    </div><!-- br-lawyers-header -->
                    <hr>
                    <p><b>My Biography :</b></p>
                    <p><?php echo $row->biography; ?></p>

                    <p><b>Lokasi Praktek :</b></p>
                    <p><?php echo $row->name; ?></p>
                    <a href="act_lawyers_profil/<?php echo $row->id; ?>"><p class="tx-purple tx-bold">Read More >></p></a>
                    <!-- <input class="form-control" type="hidden" id="id_advokat" name="id_advokat" value="<?php echo $row->id; ?>"> -->
                    <hr>
                    <div class="form-layout-footer-imam tx-center">
                        <button class="btn btn-info btn-submit-form" onclick="update(<?=$row->id;?>,1)">Approve</button>
                        <button class="btn btn-secondary" onclick="update(<?=$row->id;?>,0)">Reject</button>
                    </div><!-- form-layout-footer -->
                </div><!-- br-lawyers-body rounded-10 -->
            </div><!-- row -->
            <?php
            }
            ?>
        </div><!-- br-approve-lawyers-body -->
    <script>
        // $(".btn-submit-form").click(function(){
        //         update();
        // });
        function update($advokat_id,$verified){
            $.ajax({
                url: ROOT+'/admin_api/advokat_approve',
                dataType: 'json',
                type: 'post',
                data: {
                    id: $advokat_id,
                    verified: $verified,

                }
            })
            .done(function(data) {
                if(data.is_error){
                    alert(data.error_message);
                    return;
                }
                window.location = ROOT+'admin/approval_lawyers';
                //location.reload();
            })
            .always(function(){
                // $('#buy_button_loading').addClass('d-none');
                // $('#buy_button').removeClass('d-none');
            })
            .error(function(data){
                }
            );
        }

    </script>
<?php
    $this->load->view('admin/layout/footer');
?>
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
            <?php if(count($complaint) < 1){?>
                <div class="col-md-12 text-center">
                    <div class="field clearfix " style="margin-top:24px;">
                        <div class="form-group row form-biodata" style="background:black;">
                            <div href="#" class="blue_deep form-control col-md-12">Belum Tersedia</div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php
            foreach ($complaint as $row) {
                $kasus=["","User Ingin Mengganti Advokat","User Ingin Menutup Kasus","Advokat Ingin Berhenti Membantu Kasus","Advokat Menutup Kasus"];
            ?>
            <div class="form-layout form-layout-1">
                <div class="br-lawyers-body rounded-10">
                    <hr>
                    <h5 class="text-center"><b>Pelapor</b></h5>
                    <hr>
                    <p><b>Tanggal :</b></p>
                    <p><?php echo $row->created_at; ?></p>

                    <?php if($row->is_user){?>
                        <p><b>Nama Client : </b><?=$row->firstname_client?></p>
                        <p><b>Email Client : </b><?=$row->email_client?></p>
                        <p><b>No HP Client : </b><?=$row->hp_client?></p>
                    <?php }else{?>
                        <p><b>Nama Advokat : </b><?=$row->firstname?></p>
                        <p><b>Email Advokat : </b><?=$row->email?></p>
                        <p><b>No HP Advokat : </b><?=$row->hp?></p>
                    <?php }?>

                    <hr>
                    <h5 class="text-center"><b>Terlapor</b></h5>
                    <hr>
                    <?php if($row->is_user){?>
                        <p><b>Nama Advokat : </b><?=$row->firstname?></p>
                        <p><b>Email Advokat : </b><?=$row->email?></p>
                        <p><b>Email Advokat : </b><?=$row->hp?></p>
                    <?php }else{?>
                        <p><b>Nama Client : </b><?=$row->firstname_client?></p>
                        <p><b>Email Client : </b><?=$row->email_client?></p>
                        <p><b>No HP Client : </b><?=$row->hp_client?></p>

                    <?php }?>

                    <hr>
                    <h5 class="text-center">Alasan :</h5>
                    <hr>
                    <p><?php echo $row->description; ?></p>

                    <div class="form-layout-footer-imam tx-center">
                        <button class="btn btn-info btn-submit-form" onclick="update(<?=$row->id?>,<?=$row->kasus_id?>)">Approve</button>
                        <button class="btn btn-secondary" id="maintabel" onclick="update(<?=$row->id?>,<?=$row->kasus_id?>,2)">Reject</button>
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
        function update($id,$kasus_id,$status=1){
            $.ajax({
                url: ROOT+'admin_api/change_status_complaint',
                dataType: 'json',
                type: 'post',
                data: {
                    id: $id,
                    kasus_id : $kasus_id,
                    status : $status,
                }
            })
            .done(function(data) {
                if(data.is_error){
                    alert(data.error_message);
                    return;
                }
                location.reload();
            })
            .always(function(){
                // $('#buy_button_loading').addClass('d-none');
                // $('#buy_button').removeClass('d-none');
            })
            .error(function(data){
                }
            );
        }

        $( "#maintabel" ).click(function() {
            $('#buy_button_loading').addClass('d-none');
            $('#buy_button').removeClass('d-none');
            //location.reload();
        });
    </script>
<?php
    $this->load->view('admin/layout/footer');
?>
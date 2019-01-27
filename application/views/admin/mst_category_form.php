<?php
$this->load->view('admin/layout/sidebar');
$this->load->view('admin/layout/header');
?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Form Input Kategori Probono</h4>
    </div><!-- d-flex -->
    <div class="br-pagebody">
    <div class="br-section-wrapper">
    <div class="form-layout form-layout-1">
        <div class="row mg-b-25">
            <div class="col-lg-8">
                <div class="form-group">
                    <label class="form-control-label">Kategori Probono: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" id="katprobono" name="katprobono" value="<?php if($values){echo $values->bidang_keahlian;}?>"  placeholder="Enter Kategori Probono">
                </div>
            </div><!-- col-4 -->
        </div>
        <div class="form-layout-footer">
            <button class="btn btn-info btn-submit-form">Submit Form</button>
            <button class="btn btn-secondary" id="maintabel">Cancel</button>
        </div><!-- form-layout-footer -->
    </div><!-- form-layout -->

    <!-- ########## END: MAIN PANEL ########## -->

    <script>
        var id="<?php if($values){echo $values->id;}else{echo '0';}?>";

        $(".btn-submit-form").click(function(){
            // alert("The paragraph was clicked.");
            if(id !=0){
                update();
            }else{
                insert();
            }
        });
        function insert(){
           // alert('tes');
            $.ajax({
                url: ROOT+'/admin_api/probono_insert',
                dataType: 'json',
                type: 'post',
                data: {
                    bidang_keahlian: $('#katprobono').val()
                }
            })
            .done(function(data) {
                if(data.is_error){
                    alert(data.error_message);
                    return;
                }
                window.location = ROOT+'admin/mst_category';
            })
            .always(function(){
                // $('#buy_button_loading').addClass('d-none');
                // $('#buy_button').removeClass('d-none');
            })
            .error(function(data){
                }
            );
        }
        function update(){
            if($('#katprobono').val()==""){
                console.log("Tidak boleh kosong");
                return;
            }
            if(id==0){
                console.log("Tidak boleh 0");
                return;
            }
            $.ajax({
                url: ROOT+'/admin_api/probono_update',
                dataType: 'json',
                type: 'post',
                data: {
                    bidang_keahlian: $('#katprobono').val(),
                    id: id
                }
            })
                .done(function(data) {
                    if(data.is_error){
                        alert(data.error_message);
                        return;
                    }
                    window.location = ROOT+'admin/mst_category';
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
            window.location = ROOT+'admin/mst_category';
        });
    </script>
<?php
$this->load->view('admin/layout/footer');
?>
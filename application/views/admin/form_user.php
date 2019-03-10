<?php
    $this->load->view('admin/layout/sidebar');
    $this->load->view('admin/layout/header');
?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
  <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
    <h4 class="tx-gray-800 mg-b-5">Edit Users</h4>
  </div>
    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <div class="form-layout form-layout-1">
                <div class="row mg-b-25">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Username: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" id="username" value="<?php if($values){echo $values->username;}?>" placeholder="Enter Username">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Password <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" id="password" value="" placeholder="Enter Password">
                        </div>
                    </div><!-- col-4 -->
                </div><!-- row -->

                <div class="form-layout-footer">
                    <button class="btn btn-info btn-submit-form">Submit Form</button>
                    <button class="btn btn-secondary" id="maintabel">Cancel</button>
                </div><!-- form-layout-footer -->
            </div><!-- form-layout -->

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
            $.ajax({
                url: ROOT+'/admin_api/admin_insert',
                dataType: 'json',
                type: 'post',
                data: {
                    username: $('#username').val(),
                    password: $('#password').val()
                }
            })
            .done(function(data) {
                if(data.is_error){
                    alert(data.error_message);
                    return;
                }
                window.location = ROOT+'admin/admin';
            })
            .always(function(){
                // $('#buy_button_loading').addClass('d-none');
                // $('#buy_button').removeClass('d-none');
            })
            .error(function(data){

            });
        }

        function update(){
            // alert('imam');
            if($('#username').val()==""){
                console.log("Tidak boleh kosong");
                return;
            }
            if($('#password').val()==""){
                console.log("Tidak boleh kosong");
                return;
            }
            if(id==0){
                console.log("Tidak boleh 0");
                return;
            }
            $.ajax({
                url: ROOT+'/admin_api/admin_update',
                dataType: 'json',
                type: 'post',
                data: {
                    username: $('#username').val(),
                    password: $('#password').val(),
                    id: id
                }
            })
            //alert ('aaa');
                .done(function(data) {
                    if(data.is_error){
                        alert(data.error_message);
                        return;
                    }
                    window.location = ROOT+'admin/admin';
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
            window.location = ROOT+'admin/admin';
        });
    </script>

<?php
    $this->load->view('admin/layout/footer');
?>
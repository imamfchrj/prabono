
<?php $this->load->view('client/layout/header_not_login')?>


<main class="main-content" id="main-content">

    <section id="services" class="flat-row vc wrap-iconbox">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-3">
                   <div class="title-section">
                        <div>
                        <div class="daftar-steps">
                            <h3>Login</h3>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-3">
                    <div id="loginform" class="flat-request-form style3" method="post">
                        <div class="field clearfix "> 
                            <div class="form-group row form-biodata">
                                
                                
                                <div class="col-md-12">
                                    <p class="text-danger float-right" id="email-text"></p>
                                    <input type="text" id="email" class="form-control" placeholder="Email">
                                    
                                </div>
                                <div class="col-md-12">
                                    <p class="text-danger float-right" id="password-text"></p>
                                    <input type="password" id="password" class="form-control" placeholder="Password">
                                </div>
                                <!-- <div class="col-md-12">
                                    
                                    <div class="float-right">
                                    <label><a href="#" class="text-primary">Lupa password!</a> </label>
                                    </div>
                                </div> -->
                                
                            </div>
                            
                        </div>
                        <div class="field clearfix field-btn">
                            <button class="flat-button submit" style="float:right;">Login</button>
                        </div>

                    </div>

                </div>
        </div> 
        
        <div class="row">
                <div class="divider h70">
                </div>
        </div>  
    </section> 
</main>


<script type="text/javascript">
$(function(){
    $(".submit").click(function(){
        console.log($("#setuju").is(":checked"));
        if($("#email").val().length < 5){
            $("#email-text").html("Format email salah");
            return;
        }
        if(!validateEmail($("#email").val())){
            $("#email-text").html("Format email salah");
            return;
        }
            $("#email-text").html("");
        if($("#password").val().length < 8){
            $("#password-text").html("Panjang password kurang dari 8 karakter");
            return;
        }
        submit();
    });
   
});
</script>

<script>
tmp=true;
var submit = function (){  
    $.ajax({
        url: ROOT+'client/ajax_daftar',
        type: 'post',
        dataType: 'json',
        data: {
            // csrf_token: ""
        }
    })
    .done(function(data) {
        if(data.is_error==1){ 
            alert_error(data.error);
            return; 
        }
        window.location = "<?php echo base_url('client/kasus_aktif'); ?>";
    })
    .fail(function() {
        if(tmp){
            alert_error( "Server tidak merespon. Mohon cek koneksi internet anda.\nServer not responding. Please check your internet connection." );
            tmp = false;
        }
    })
    .always(function() {
        
    }) ;
}
</script>


<?php $this->load->view('landing_page/layout/footer')?>
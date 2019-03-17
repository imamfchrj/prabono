
<?php $this->load->view('client/layout/header_not_login')?>

<main class="main-content" id="main-content">

    <section id="services" class="flat-row vc wrap-iconbox">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-3">
                   <div class="title-section">
                        <div>
                        <div class="daftar-steps">
                            <h3>Daftar Advokat</h3>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-3">
                    <div id="biodataform" class="flat-request-form style3" method="post">
                        <div class="field clearfix "> 
                            <div class="form-group row form-biodata">
                                
                                
                                <div class="col-md-12">
                                    <label for="exampleInputEmail1">Username<span class="text-danger email-error"></span></label>
                                    <input type="text" id="email" class="form-control" placeholder="Email">
                                    <p class="text-danger float-left top-min" id="email-text"></p>
                                </div>

                                <div class="col-md-12">
                                    <label for="exampleInputEmail1">No Handphone<span class="text-danger email-error"></span></label>
                                    <input type="text" id="hp" class="form-control" placeholder="No Handphone">
                                    <p class="text-danger float-left top-min" id="hp-text"></p>
                                </div>

                                <div class="col-md-12">
                                    <label for="exampleInputEmail1">Password<span class="text-danger email-error"></span></label>
                                    <input type="password" id="password" class="form-control" placeholder="Password">
                                    <p class="text-danger float-left top-min" id="password-text"></p>
                                </div>
                                <div class="col-md-12">
                                    <label for="exampleInputEmail1">Retype Password<span class="text-danger email-error"></span></label>
                                    <input type="password" id="c-password" class="form-control" placeholder="Ulangi Password">
                                    <p class="text-danger float-left top-min" id="c-password-text"></p>
                                </div>
                                <div class="col-md-12">
                                    
                                    <div style="margin-bottom:20px;">
                                    <label><input type="checkbox" id="setuju" value=""> Setuju dengan <a class="blue" href="<?=base_url().'probono_asset/probono/asset/term_conditions.pdf'?>" target="_blank">Syarat & Ketentuan</a> yang berlaku. <span id="setuju-text" class="text-danger"><span></label>
                                    </div>
                                </div>
                                <div class="col-md-12 g-cap">
                                    <div id="html_element"></div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="field clearfix field-btn">
                            <button class="flat-button submit" style="float:right;">Daftar</button>
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
        if($("#email").val().length < 5){
            $("#email-text").html("Format email salah");
            return;
        }
        if($("#hp").val().length < 11){
            $("#hp-text").html("Format No Handphone salah");
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
        $("#password-text").html("");
        if($("#password").val()!=$("#c-password").val()){
            $("#c-password-text").html("Password yang di ulang tidak sama");
            return;
        }
        $("#c-password-text").html("");

        if($("#setuju").is(":checked")==false){
            return;
        }
        var response = grecaptcha.getResponse();
        if(response.length == 0){
            $("#setuju-text").html("Please accept gcaptcha");
        }
        console.log(response);
        $("#setuju-text").html("");
        submit(response);
    });
   
});
</script>
<script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : '<?=config_item('recatpcha_site_key');?>'
        });
      };
    </script>

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer></script>
<script>
tmp=true;
var submit = function (response){  
    console.log(response);
    $.ajax({
        url: ROOT+'clients_nl/ajax_register_advokat',
        type: 'post',
        dataType: 'json',
        data: {
            "email":$("#email").val(),
            "hp":$("#hp").val(),
            "password":$("#password").val(),
            "setuju":$("#setuju").is(":checked"),
            "g-recaptcha-response":response
        }
    })
    .done(function(data) {
        if(data.is_error==1){ 
            grecaptcha.reset();
            alert_error(data.error_message);
            return; 
        }
        window.location = "<?php echo base_url(); ?>";
    })
    .fail(function() {
        if(tmp){
            grecaptcha.reset();
            alert_error( "Server tidak merespon. Mohon cek koneksi internet anda. (Lakukan refresh jika dibutuhkan)\n" );
            tmp = false;
        }
    })
    .always(function() {
        
    }) ;
}
</script>


<?php $this->load->view('landing_page/layout/footer')?>
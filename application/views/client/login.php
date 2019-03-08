
<?php $this->load->view('client/layout/header_not_login')?>

<main class="main-content" id="main-content">

    <section id="services" class="flat-row vc wrap-iconbox">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-3">
                   <div class="title-section">
                        <div>
                        <div class="daftar-steps">
                            <h3>Login User</h3>
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
                                    <input type="text" id="email" class="form-control" placeholder="Email">
                                    <p class="text-danger float-left top-min" id="email-text"></p>
                                </div>
                                <div class="col-md-12">
                                    <input type="password" id="password" class="form-control" placeholder="Password">
                                    <p class="text-danger float-left top-min" id="password-text"></p>
                                </div>
                                <div class="col-md-12 g-cap">
                                    <div id="html_element"></div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="field clearfix field-btn">
                            <button class="flat-button submit" style="float:right;">Login</button>
                            <button class="flat-button btn-success" style="float:left;">Daftar</button>
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
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : '<?=config_item('recatpcha_site_key');?>'
        });
      };
    </script>

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
        
<script type="text/javascript">

$(function(){
    $(".submit").click(function(){
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
        $("#password-text").html("");
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
<script>
tmp=true;
var submit = function (response){  
    $.ajax({
        url: ROOT+'clients_nl/ajax_login',
        type: 'post',
        dataType: 'json',
        data: {
            "email":$("#email").val(),
            "password":$("#password").val(),
            "setuju":$("#setuju").is(":checked"),
            "g-recaptcha-response":grecaptcha.getResponse()
        }
    })
    .done(function(data) {
        if(data.is_error==1){ 
            console.log(data);
            alert_error(data.error_message);
            grecaptcha.reset();
            return; 
        }
        grecaptcha.reset();
        window.location = "<?php echo base_url(DEFAULT_PAGE_USER); ?>";
    })
    .fail(function() {
        if(tmp){
            alert_error( "Server tidak merespon. Mohon cek koneksi internet anda. (Lakukan refresh jika dibutuhkan)\n" );
            grecaptcha.reset();
            tmp = false;
        }
    })
    .always(function() {
        
    }) ;
}
</script>


<?php $this->load->view('landing_page/layout/footer')?>
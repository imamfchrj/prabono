
<?php $this->load->view($header.'/layout/header')?>

<main class="main-content" id="main-content">

    <section id="services" class="flat-row vc wrap-iconbox">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-3">
                   <div class="title-section">
                        <div>
                        <div class="daftar-steps">
                            <h3>Pendaftaran Berhasil</h3>
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
                                    
                                    <div style="margin-bottom:20px;">
                                    <label>Anda dapat masuk ke dalam dashboard dan mengecek kasus dengan email dan sandi yang telah didaftarkan sebelumnya</label>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="field clearfix field-btn">
                            <a class="blue" href="<?=base_url().$header?>/daftar_kasus" style="float:right;">Home</a>
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

 


<?php $this->load->view('landing_page/layout/footer')?>

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
                                    <label>Kasus Anda telah berhasil didaftarkan. Proses selanjutnya adalah menunggu advokat mengambil kasus Anda. Anda dapat melihat status kasus secara berkala di menu “Kasus” dengan masuk menggunakan email dan sandi yang telah Anda daftarkan.</label>
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
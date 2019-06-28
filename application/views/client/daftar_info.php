
<?php $this->load->view('client/layout/header_not_login')?>

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
                                    <label>Kami sudah menerima permintaan pendaftaran Anda. Kami akan melakukan proses verifikasi. Anda dapat masuk kembali dengan <a class="blue" href="<?=base_url()?>">alamat email dan kata sandi yang sudah didaftarkan</a>. Jika belum bisa masuk, Anda berarti belum terverifikasi</label>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="field clearfix field-btn">
                            <a class="blue" href="<?=base_url()?>" style="float:right;">Home</a>
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
<?php $this->load->view('users/layout/header')?>
            

            <main class="main-content" id="main-content">

                <section id="services" class="flat-row vc wrap-iconbox">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                               <div class="title-section">
                                    <h1 class="title">Verifikasi Status</h1>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div id="biodataform" class="flat-request-form style3" method="post">
                                     
                                <div class="form-group row text-center">

                                         <div class="col-md-12">
                                            <h5>Tunggu verifikasi</h5>
                                        </div>

                                        <div class="col-md-12">
                                            <p>Mohon tunggu kami akan melakukan proses verifikasi <br>otomatis, atau maksimal 24 jam jika manual review diperlukan.</p>
                                        </div>

                                        <div class="col-md-12" style="height:100px;">
                                            <div class="loading-verify">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <p>Kami akan mengirimkan email pemberitahuan setelah validasi selesai.</p>
                                        </div>
                                        <div class="col-md-12">
                                            <a class="blue" href="<?=base_url()?>">Kembali ke halaman utama.</a>
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
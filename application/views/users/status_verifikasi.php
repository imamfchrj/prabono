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
                                            <!-- <p>Mohon tunggu kami akan melakukan proses verifikasi<br> 2 x 24 jam <br> setelah Anda melengkapi data profile.</p> -->

                                    <label>Kami sudah menerima permintaan pendaftaran Anda. Kami akan melakukan proses verifikasi. Anda dapat masuk kembali dengan <a class="blue" href="<?=base_url().$header?>/daftar_kasus">alamat email dan kata sandi yang sudah didaftarkan</a>. Jika belum bisa masuk, Anda berarti belum terverifikasi</label>
                                        </div>

                                        <div class="col-md-12" style="height:100px;">
                                            <div class="loading-verify">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
<!--                                            <p>Kami akan mengirimkan email pemberitahuan setelah validasi selesai.</p>-->
                                        </div>
                                        <div class="col-md-12">
                                            <a class="blue" href="<?=base_url()?>users/daftar">Kembali ke halaman profile.</a>
                                        </div>
                                       
                                        


                                </div>

                            </div>
                    </div> 
                    
                    <div class="row">
                            <div class="divider h70">
                            </div>
                    </div>  
                    <div class="row">
                            <div class="divider h70">
                            </div>
                    </div>
                </section> 
            </main>
<?php $this->load->view('landing_page/layout/footer')?>
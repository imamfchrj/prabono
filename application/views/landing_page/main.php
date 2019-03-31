<?php
   $this->load->view('landing_page/layout/header');
   ?>
<main class="main-content" id="main-content">
   <section class="section-main-menu"  >
      <div class="overlay-parallax"></div>
      <div class="video">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="title-section left  section-main-menu-opacity">
                     <h1 class="title color-white">Pro Bono Wadah dunia untuk keadila</h1>
                     <div class="sub-title font-playfair">
                        Bantuan hukum untuk rakyat miskin, buta hukum, dan korban pelanggaran HAM.
                     </div>
                  </div>
               </div>
               <!-- <div class="col-md-6">
                  <div class="box-primary">
                     <div class="box-primary-header left">
                        <div class="box-title">
                           <div>Mulai konsultasi dengan kami</div>
                           <p>Bantuan hukum untuk rakyat miskin, buta hukum, dan korban pelanggaran HAM.</p>
                        </div>
                     </div>
                     <div class="box-primary-body left ">
                        <div class="field clearfix">
                           <div class="wrap-type-input clearfix">
                              <div class="input-wrap " >
                                 <input class="input-responsive" type="text" value="" tabindex="1" placeholder="Uraian singkat" name="title" id="title" required="">
                              </div>
                              <div class="input-wrap" >
                                 <input class="input-responsive" type="text" value="" tabindex="2" placeholder="Email" id="uraian" name="email" required="">
                              </div>
                           </div>
                        </div>
                        <div class="box-primary-footer submit-wrap">
                           <div class="box-text-footer-right">
                              <button name="submit" class="flat-button" id="submit" title="Submit now"  onclick="location.href='<?=base_url()?>laporkan-masalah-hukum'">SUBMIT</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div> -->
            </div>
         </div>
      </div>
   </section>
<!--   <section class="flat-row vc section-client" style="background-color:rgba( 0, 0, 0, 0.80);background:#f7f7f7;">-->
<!--      <div class="container-fluid">-->
<!--         <div class="clients-image" data-item="9" data-nav="true" data-dots="false" data-auto="false">-->
<!--            <div class="client-item">-->
<!--               <img src="http://www.thecastlegrp.com/wp-content/uploads/2013/09/advisian-logo.jpg" alt="image">-->
<!--            </div>-->
<!--            <div class="client-item">-->
<!--               <img src="http://www.thecastlegrp.com/wp-content/uploads/2013/09/ariad-logo.jpg" alt="image">-->
<!--            </div>-->
<!--            <div class="client-item">-->
<!--               <img src="http://www.thecastlegrp.com/wp-content/uploads/2013/09/bc-high-logo.jpg" alt="image">-->
<!--            </div>-->
<!--            <div class="client-item">-->
<!--               <img src="http://www.thecastlegrp.com/wp-content/uploads/2018/04/biogen-logo-232x130.jpg" alt="image">-->
<!--            </div>-->
<!--            <div class="client-item">-->
<!--               <img src="http://www.thecastlegrp.com/wp-content/uploads/2013/09/cell-signaling-logo.jpg" alt="image">-->
<!--            </div>-->
<!--            <div class="client-item">-->
<!--               <img src="http://www.thecastlegrp.com/wp-content/uploads/2018/04/boston-business-journal-logo-232x130.jpg" alt="image">-->
<!--            </div>-->
<!--            <div class="client-item">-->
<!--               <img src="http://www.thecastlegrp.com/wp-content/uploads/2013/09/burns-and-levinson-logo.jpg" alt="image">-->
<!--            </div>-->
<!--            <div class="client-item">-->
<!--               <img src="http://www.thecastlegrp.com/wp-content/uploads/2013/09/dell-logo.jpg" alt="image">-->
<!--            </div>-->
<!--            <div class="client-item">-->
<!--               <img src="http://thecastlegrp.wpengine.com/wp-content/uploads/2013/09/ocean-spray-logo.jpg" alt="image">-->
<!--            </div>-->
<!--            <div class="client-item">-->
<!--               <img src="http://www.thecastlegrp.com/wp-content/uploads/2018/04/redstar-logo-232x130.jpg" alt="image">-->
<!--            </div>-->
<!--            <div class="client-item">-->
<!--               <img src="http://www.thecastlegrp.com/wp-content/uploads/2013/09/pepperdine.jpg" alt="image">-->
<!--            </div>-->
<!--         </div>-->
<!--      </div>-->
<!--   </section>-->
   <section class="flat-row v7 bg-theme">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="title-section">
                  <h1 class="title">Punya masalah hukum?</h1>
                  <div class="sub-title">
                     Ceritakan masalah hukum dengan langkah 3 sederhana
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-md-4">
               <div class="imgbox">
                  <div class="box-header">
                     <div class="box-img img-middle">
                        <img src="<?=base_url()?>probono_asset/probono/tellus.svg" alt="image">
                     </div>
                  </div>
                  <div class="box-content">
                     <div class="box-title"><a href="#">Ceritakan</a></div>
                     <p>Ceritakan masalah anda dengan mengisi form yang tersedia!</p>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="imgbox">
                  <div class="box-header">
                     <div class="box-img img-middle">
                        <img src="<?=base_url()?>probono_asset/probono/register.svg" alt="image">
                     </div>
                  </div>
                  <div class="box-content">
                     <div class="box-title"><a href="#">Registrasi</a></div>
                     <p>Isi form biodata diri anda. Agar kami dapat mengenal anda lebih dekat.</p>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="imgbox last">
                  <div class="box-header">
                     <div class="box-img img-middle">
                        <img src="<?=base_url()?>probono_asset/probono/connection.svg" alt="image">
                     </div>
                  </div>
                  <div class="box-content">
                     <div class="box-title"><a href="#">Terkoneksi</a></div>
                     <p>Temukan pengacara terbaik untuk mendapingi anda!</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
<!--   <section class="section-video parallax parallax4">-->
   <section class="section-main-menu">
      <div class="overlay-parallax style3"></div>
      <div class="video">
         <div class="container">
            <div class="row">
               <div class="col-md-12 wrap-video section-main-menu-opacity">
                  <div class="title-section left style4">
                     <h2 class="title color-white">Lawan Kriminalisasi</h2>
                     <div class="sub-title font-playfair">
                        Pembukam gerakan rakyat<br>Kebebasan bersuara di negri yang merdeka. <br>
                     </div>
                  </div>
                  <div class="flat-control">
                     <a class="fancybox fa fa-play" data-type="iframe" href="https://www.youtube.com/embed/ZldeXyTP3RU?autoplay=1"> 
                     </a>
                     <span>Tonton Vidio <br>Tentang Kami</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
<!--    -->
<!--   <section class="flat-row v1 bg-theme">-->
<!--      <div class="container">-->
<!--         <div class="row">-->
<!--            <div class="col-md-12">-->
<!--               <div class="title-section">-->
<!--                  <h1 class="title">Bring Back the Justice!!</h1>-->
<!--                  <div class="sub-title">-->
<!--                     Kasus terakhir yang kita tangani-->
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--            <div class="col-md-12">-->
<!--               <div class="wrap-imgbox-shortcode">-->
<!--                  <div class="wrap-box ">-->
<!--                     <div class="imgbox style2 flat-boxlist imgbox-list-left">-->
<!--                        <div class="box-header">-->
<!--                           <div class="box-img">-->
<!--                              <a href="--><?//=base_url()?><!--berita/terbaru"><img class="imgs-services" src="--><?//=base_url()?><!--probono_asset/images/slides/s11.jpg" alt="image"></a>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="box-content">-->
<!--                           <div class="box-title">-->
<!--                              <a href="--><?//=base_url()?><!--berita/terbaru">Narkoba tingkat 1</a>-->
<!--                              <div><hr><span class="badge badge-info float-right">Sukses</span></div>-->
<!--                           </div>-->
<!--                           <div>-->
<!--                              <a href="--><?//=base_url()?><!--berita/terbaru">21 January 2019</a>-->
<!--                              <p>Thanks to our laser focus on conversion optimization, our clients see at least a 50% increase in quality leads, sales, and opt-ins within the first 6-12 months of our flagship solution.</p>-->
<!--                              <div class="explore">-->
<!--                                 <button type="button" class="flat-button border" onclick="location.href='--><?//=base_url()?><!--/berita/terbaru'">
                                 Baca Selengkapnya</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-12">
               <div class="wrap-imgbox-shortcode">
                  <div class="wrap-box ">
                     <div class="imgbox style2 flat-boxlist imgbox-list-left">
                        <div class="box-header">
                           <div class="box-img">
                              <a href="<?//=base_url()?>berita/terbaru"><img class="imgs-services" src="<?//=base_url()?>probono_asset/images/slides/s9.jpg" alt="image"></a>
                           </div>
                        </div>
                        <div class="box-content">
                           <div class="box-title">
                              <a href="<?//=base_url()?>berita/terbaru">Pelanggaran UU ITE</a>
                              <div><hr><span class="badge badge-info float-right">Sukses</span></div>
                           </div>
                           <div>
                              <a href="<?//=base_url()?>berita/terbaru">21 January 2019</a>
                              <p>Thanks to our laser focus on conversion optimization, our clients see at least a 50% increase in quality leads, sales, and opt-ins within the first 6-12 months of our flagship solution.</p>
                              <div class="explore">
                                 <button type="button" class="flat-button border" onclick="location.href='<?//=base_url()?>berita/terbaru'">
                                 Baca Selengkapnya</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>-->
   <section class="flat-row v9">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="title-section style2">
                  <h1 class="title">Ayo Kunjungi Kantor Kami</h1>
                  <div class="sub-title">
                     Sebagai lembaga bantuan hukum, kami sangat menghormati kalau anda ingin berkonsultasi dengan kami <br> Jl. Universitas Indonesia Salemba <br>RW.5, Kenari, Senen, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10430
                  </div>
                  <div class="sub-title">Tidak berada di daerah Jabodetabek? jangan khawatir. Banyak dari <span>client kami</span> berada diluar Jabodetabek</div>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>
<?php
   $this->load->view('landing_page/layout/footer');
   ?>
<?php $this->load->view('landing_page/layout/header')?>
    <main class="main-content" id="main-content">
        
        <!-- Services -->
        <section class="flat-row section-services v16">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="featured-services">
                            <img src="<?=base_url()?>probono_asset/images/services/bg.jpg" alt="image">
                        </div>
                        <div class="divider h98"></div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                       <div class="title-section">
                            <h1 class="title">Daftar Publikasi</h1>
                            <!-- <div class="sub-title">
                                Simply looking for a pretty website? We're much more.
                            </div> -->
                        </div> 
                    </div>
                </div>
            </div>
            <div class="container">
                <?php $i=0;
                foreach($results as $list){ ?>
                    <?php if($i%3==0){ ?>
                    <div class="row">
                    <?php } ?>


                    <div class="col-md-4">
                        <div class="imgbox style2 position-title">
                            <div class="box-header">
                                <div class="box-img">
                                    <a href="#"><img src="<?=base_url()?>probono_asset/images/src/<?=$list->thumbnail?>" alt="image"></a>
                                </div>
                                <div class="box-title"><a href="#"><?=$list->title?></a></div> 
                            </div>
                            <div class="box-content">
                                <p><?=$list->text?></p>
                                <div class="explore">
                                    <a class="read-more" href="#<?=$list->file_pendukung?>" target="_blank" title="">Baca Selengkapnya</a>
                                </div> 
                            </div>
                        </div>
                    </div>

                    <?php $i++;
                    if($i%3==0){ ?>
                        
                    </div>
                <div class="divider h65"></div>
                    <?php } ?>


                <?php } ?>
            </div>
        </section>  
    </main>
<?php $this->load->view('landing_page/layout/footer')?>
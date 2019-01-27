<?php $this->load->view('landing_page/layout/header')?>
    <main class="main-content" id="main-content">
        
        <!-- Services -->
        <section class="flat-row section-services pd-bottom4">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="wrap-services-sidebar clearfix">
                            <?php foreach($results as $list){?>
                            <div class="imgbox style2 left">
                                <div class="box-header">
                                    <div class="box-img">
                                        <a href="#"><img src="<?=base_url()?>probono_asset/images/src/<?=$list->thumbnail?>" alt="image"></a>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <div class="box-title"><a href="#"><?=$list->title?></a></div> 
                                    <p><?=$list->text?></p>
                                    <!-- <div class="explore">
                                        <a class="read-more" href="#" title="">Baca Selengkapnya</a>
                                    </div>  -->
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php $this->load->view('landing_page/widget/widget-3');?>
                </div>
            </div>
        </section>  
    </main>
<?php $this->load->view('landing_page/layout/footer')?>
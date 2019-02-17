<?php $this->load->view('users/layout/header')?>

    <script>
        var kasus_id=<?=$kasus->id?>;
    </script>
            <main class="main-content" id="main-content">

                <section id="services" class="flat-row vc wrap-iconbox">
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-md-12 header-daftar">
                                <div class=" style3">
                                <div class="widget widget_search widget_search_left" >
                                    <form role="search" method="get" class="search-form" action="#">
                                        <input type="search" class="search-field" placeholder="Search…" value="" name="s" > 
                                        <input type="submit" class="search-submit" id="searchwidget" value="">
                                    </form>                            
                                </div>
                                </div>
                            </div>
                            <div class="col-md-12 box-kasus">
                                <div class="flat-team team-list style2 clearfix">    
                                    <div class="content">
                                        <!-- <span class="position">Firda Safridi</span> -->
                                        <?php if($kasus->status==1){?>
                                         <span class="badge badge-success float-right">Open</span>
                                        <?php }else if($kasus->status==2){?>
                                         <span class="badge badge-primary float-right">Aktif</span>
                                        <?php }else{?>
                                         <span class="badge badge-dark float-right">Closed</span>
                                        <?php }?>
                                        <h5 class="blue_deep name"><?=$kasus->judul?></h5>
                                        <p><?=$kasus->created_at?></p>
                                        <p>
                                        
                                        <p><b>Kronologi Masalah</b></p>
                                        <p>
                                        <?=strip_tags($kasus->kronologi_masalah)?>
                                        </p>
                                        <p><b>Ekspektasi Kasus</b></p>
                                        <p>
                                        <?=strip_tags($kasus->ekspektasi_kasus)?>
                                        </p>
                                        
                                        <?php if(isset($kronologi_masalah_list)){?>
                                        <div class="float-right">
                                            <?php foreach($kronologi_masalah_list as $list){ ?>
                                            <a class="blue" target="_blank" href="<?=base_url()?>probono_asset/probono/asset/<?=$list->file?>"><i class="fa fa-file-pdf-o text-danger"></i>&nbsp;<?=$list->name?></a><br>
                                            <!-- <a class="blue" target="_blank" href="#"><i class="fa fa-file-pdf-o text-danger"></i>&nbsp;<?=$kronologi_masalah_list->name?></a> -->
                                            <?php } ?>
                                        </div>
                                        <?php }?>
                                        <?php if($kasus->firstname_client){ ?>
                                        <ul class="info-team">
                                            <li><span>Nama Advokat:</span><?=$kasus->firstname_client?> <?=$kasus->lastname_client?></li>
                                            <li><span>Telpon:</span><?=$kasus->hp_client?></li>
                                            <li><span>Email:</span><?=$kasus->email_client?></li>
                                            <!-- <li><span>Tanggal Sidang:</span>22 January 2019</li> -->
                                            <!-- <li><span>Lokasi:</span>DKI Jakarta</li> -->
                                        </ul>
                                        <?php }?>
                                        <div class="flat-view">
                                                <hr>
                                                <?php if($kasus->status==1){?>
                                                <button type="button" class="flat-button terima_kasus" >Terima Kasus</button>
                                                <?php } ?>
                                        </div>
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
            <script>
                
    $(".terima_kasus").on("click", function() {
        $.ajax({
            url: ROOT+'users_ajax/terima_kasus',
            type: 'post',
            dataType: 'json',
            data: {
                id_kasus:kasus_id,
            }
        })
        .done(function(data) {
            if(data.is_error==1){ 
                alert_error(data.error);
                return; 
            }
            alert("Kasus Berhasil diterima");
            $(".terima_kasus").hide();
        })
        .fail(function() {
            if(tmp){
                alert_error( "Server tidak merespon. Mohon cek koneksi internet anda.\nServer not responding. Please check your internet connection." );
                tmp = false;
            }
        })
        .always(function() {
            
        }) ;

    });
            </script>
<?php $this->load->view('landing_page/layout/footer')?>
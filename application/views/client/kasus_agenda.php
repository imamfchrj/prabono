<?php $this->load->view('client/layout/header')?>

<script>
var id = <?=$kasus->id?>;
</script>
            <main class="main-content" id="main-content">

                <section id="services" class="flat-row vc wrap-iconbox">
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-md-12 header-daftar">
                                <div class=" style3">
                                <div class="widget widget_search widget_search_left" >
<!--                                    <form role="search" method="get" class="search-form" action="#">-->
<!--                                        <input type="search" class="search-field" placeholder="Search…" value="" name="s" > -->
<!--                                        <input type="submit" class="search-submit" id="searchwidget" value="">-->
<!--                                    </form>                            -->
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
                                        <?php if($kasus->status>1){?>


                                        <ul class="nav nav-tabs nav-single">
                                            <li <?php if($menu!="agenda") {?>class="active"<?php } ?>><a href="<?=base_url()?>client/kasus_aktif/<?=$kasus->id?>">Kasus</a></li>
                                        <li <?php if($menu=="agenda") {?>class="active"<?php } ?>><a href="<?=base_url()?>clients/agenda/<?=$kasus->id?>">Agenda</a></li>
                                        <li <?php if($menu=="point") {?>class="active"<?php } ?>><a href="<?=base_url()?>clients/request/<?=$kasus->id?>">Request Time Sheet</a></li>
                                        </ul>
                                        <?php } ?>
                                        <?php if(count($agenda)==0){?>
                                        <div class="row-striped">
                                            <div class="pad15">
                                                <p>Agenda tidak ditembukan</p>
                                            </div>
                                        </div>
                                            
                                        <?php }else{?>
                                            <?php foreach($agenda as $list){?>
                                            <div class="row-striped">
                                                <div class="pad15">
                                                <h5 class="blue_deep name"><?=$list->title?></h5>
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> <?=$list->fromdate?></li>
                                                        <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> <?=$list->todate?></li>
                                                        <li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> <?=$list->place?></li>
                                                        <li class="list-inline-item"><i class="fa fa-user" aria-hidden="true"></i> <?php if($list->is_accept){ if(strtotime(date("Y-m-d H:i:s"))-strtotime($list->todate) < 0){echo "On Progress";}else{echo "Selesai";}}else{echo "Pending";}?></li>
                                                    </ul>
                                                    <p><?=$list->description?></p>
                                                    <p><?php if(!$list->is_accept){?>
                                                        <button onclick="terimaagenda(<?=$list->id?>)">Terima Jadwal</button>
                                                        <?php }?>
                                                    </p>
                                                </div>
                                            </div>
                                            <?php }?>
                                        <?php }?>
                                        
                                        <div class="flat-view">
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
            function terimaagenda($id){

                $.ajax({
                    url: ROOT+'clients_ajax/accept_agenda',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        agenda_id :$id,

                    }
                })
                .done(function(data) {
                    if(data.is_error==1){ 
                        console.log(data.error);
                        return; 
                    }
                    location.reload();
                })
                .fail(function() {
                    if(tmp){
                        alert_error( "Server tidak merespon. Mohon cek koneksi internet anda.\nServer not responding. Please check your internet connection." );
                        tmp = false;
                    }
                })
                .always(function() {
                    
    }) ;
            }
            </script>
<?php $this->load->view('landing_page/layout/footer')?>
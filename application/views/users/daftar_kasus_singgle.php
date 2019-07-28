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
                                         <?php }else if($kasus->status==4){?>
                                         <span class="badge badge-success float-right">Wait</span>

                                        <?php }else{?>
                                         <span class="badge badge-dark float-right">Closed</span>
                                        <?php }?>
                                        
                                        <?php if($kasus->status==2){?>
                                        <ul class="nav nav-tabs nav-single">
                                            <li <?php if($menu!="agenda") {?>class="active"<?php } ?>><a href="<?=base_url()?>users/daftar_kasus_singgle/<?=$kasus->id?>">Kasus</a></li>
                                        <li <?php if($menu=="agenda") {?>class="active"<?php } ?>><a href="<?=base_url()?>users/agenda/<?=$kasus->id?>">Agenda</a></li>
                                        <li <?php if($menu=="point") {?>class="active"<?php } ?>><a href="<?=base_url()?>users/request/<?=$kasus->id?>">Request Time Sheet</a></li>
                                        </ul>
                                        <?php } ?>
                                        <h5 class="blue_deep name"><?=$kasus->judul?></h5>
                                        <!-- <p><a href="#">#PerdaganganInternationsal</a> <a href="#">#PencucisanUang</a></p> -->
                                        
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> <?=$kasus->created_at?></li>
                                            <li class="list-inline-item float-right "><a  href="javascript:void(0)" onclick="report();return false;" class="color-warning"><i class="fa fa-warning" aria-hidden="true"></i> report </a></li>
                                        </ul>
                                        
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
                                        <?php if($kasus->firstname){ ?>
                                        <ul class="info-team">
                                        <li><span>Nama Client:</span> <?php if (!$kasus->is_kusus) { ?>
                                                                            <?= $kasus->firstname_client ?>
                                                                            <?= $kasus->lastname_client ?>
                                                                            <?php } else {
                                                                                echo $kasus->initial_name;
                                                                            } ?>
                                        </li>
                                            <li><span>Telpon:</span> <?=$kasus->hp_client?></li>
                                            <li><span>Email:</span> <?=$kasus->email_client?></li>
                                        </ul>
                                        <?php }?>

                                        <div class="flat-view">
                                                <hr>
                                                <?php if($kasus->status==1){?>
                                                <button type="button" class="flat-button terima_kasus" >Terima Kasus</button>
                                                <?php } ?>
                                        </div>
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
                            alert_error(data.error_message);
                            return; 
                        }
                        alert("Kasus Berhasil diterima");
                        $(".terima_kasus").hide();
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
            
                });
                        </script>




            <div id="Mreport" class="modal fade " role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Report Advokat</h4>
      </div>
      <div class="modal-body">
        <div class="form-group row">
            <div class="col-md-12" id="error_rubah">
            </div>
            <div class="col-md-12">
                <select class="form-control select-imp" id="status" >
                    <option value="3">Berhenti Membantu Kasus</option>
                    <option value="4">Tutup Kasus</option>
                </select>
            </div>
            <div class="col-md-12">
                    <label>Berikan Alasan Anda</label>
                    <textarea rows="4" class="form-group" id="edit_description"></textarea>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default report_submit">Submit</button>
      </div>
    </div>

  </div>
</div>

<script>
 function report(){
	$("#Mreport").modal();
 }
</script>


<script>


                $(".report_submit").on("click", function() {
                    add_report();
                });
            function add_report(){

                $.ajax({
                    url: ROOT+'users_ajax/report',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        kasus_id :kasus_id,
                        status : $("#status").val(),
                        description : $("#edit_description").val(),
                    }
                })
                .done(function(data) {
                    if(data.is_error==1){ 
                        $("#error_rubah").html(data.error_message);
                        return; 
                    }
                    
                    $("#Mreport").modal('hide');
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
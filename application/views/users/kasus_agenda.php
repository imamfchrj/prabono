<?php $this->load->view('users/layout/header')?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
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
                                        
                                        <?php if($kasus->status>1){?>


                                        <ul class="nav nav-tabs nav-single">
                                            <li <?php if($menu!="agenda") {?>class="active"<?php } ?>><a href="<?=base_url()?>users/daftar_kasus_singgle/<?=$kasus->id?>">Kasus</a></li>
                                        <li <?php if($menu=="agenda") {?>class="active"<?php } ?>><a href="<?=base_url()?>users/agenda/<?=$kasus->id?>">Agenda</a></li>
                                        <li <?php if($menu=="point") {?>class="active"<?php } ?>><a href="<?=base_url()?>users/request/<?=$kasus->id?>">Request Time Sheet</a></li>
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
                                                        <li class="list-inline-item"><i class="fa fa-user" aria-hidden="true"></i> <?php if(!$list->is_accept){echo "Pending";}else{echo "On Progress";}?></li>
                                                    </ul>
                                                    <p><?=$list->description?></p>
                                                </div>
                                            </div>
                                            <?php }?>
                                        <?php }?>
                                        <div class="flat-view">
                                                <hr>
                                                <?php if($kasus->status>1){?>
                                                <button type="button" class="flat-button tambah_agenda float-right" >Tambah Agenda</button>
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


<div id="Mtambah_agenda" class="modal fade " role="dialog">
  <div class="modal-dialog modal-md">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Agenda</h4>
      </div>
      <div class="modal-body">
        <div class="form-group row">
            <div class="col-md-12">
                <label>Judul</label>
                <input type="text" class="form-control" id="title" placeholder="Judul" value="">
            </div>
            <div class="col-md-12">
                <label>Tempat</label>
                <input type="text" class="form-control" id="place" placeholder="Tempat" value="">
            </div>
            
    <div class="col-md-6">
        <div class="form-group">
            <label>Dari Tanggal</label>
            <div class='input-group date' id='fromdate'>
                <input type='text' id="fromdate_input" class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Sampai Dengan</label>
            <div class='input-group date' id='todate'>
                <input type='text'  id="todate_input" class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-12">
            <label>Deskripsi</label>
    <textarea rows="4" class="form-group" id="description">

</textarea>
    </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default tambah_agenda_input">Tambah</button>
      </div>
    </div>

  </div>
</div>


            <script>
                $(".tambah_agenda").on("click", function() {
                    $("#Mtambah_agenda").modal();
                });
                $(".tambah_agenda_input").on("click", function() {
                    console.log($("#fromdate_input").val());
                    tambah_agenda();
                });
                
            </script>

            <script>
            function tambah_agenda(){

                $.ajax({
                    url: ROOT+'users_ajax/tambah_agenda',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        // csrf_token: ""
                        kasus_id :id,
                        title : $("#title").val(),
                        place : $("#place").val(),
                        description : $("#description").val(),
                        fromdate : $("#fromdate_input").val(),
                        todate : $("#todate_input").val()
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

            
<script type="text/javascript">
    $(function () {
        $('#fromdate').datetimepicker({

            format: 'YYYY-MM-DD  HH:mm',
        });
        $('#todate').datetimepicker({
            useCurrent: false, //Important! See issue #1075
            format: 'YYYY-MM-DD  HH:mm',
        });
        $("#fromdate").on("dp.change", function (e) {
            $('#todate').data("DateTimePicker").minDate(e.date);
        });
        $("#todate").on("dp.change", function (e) {
            $('#fromdate').data("DateTimePicker").maxDate(e.date);
        });
    });
</script>
<?php $this->load->view('landing_page/layout/footer')?>
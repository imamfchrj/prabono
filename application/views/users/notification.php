<?php $this->load->view('users/layout/header')?>


            <main class="main-content" id="main-content">

                <section id="services" class="flat-row vc wrap-iconbox">
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-md-12 header-daftar">
                                <div class=" style3">
                                <div class="widget widget_search widget_search_left" >
                                    <!-- <form role="search" method="get" class="search-form" action="#">
                                        <input type="search" class="search-field" placeholder="Search…" value="" name="s" > 
                                        <input type="submit" class="search-submit" id="searchwidget" value="">
                                    </form>                             -->
                                </div>
                                </div>
                            </div>
                            <div class="col-md-12 box-kasus">
                                <div class="flat-team team-list style2 clearfix"> 
                                
                           
                                    <div class="content">
                                        <h5>Pemberitahuan Anda</h5>
                                        <hr>
                                        <?php if(count($notification) < 1){?>
                                            <div class="col-md-12 text-center">
                                                <div class="field clearfix " style="margin-top:24px;">
                                                    <div class="form-group row form-biodata" style="background:black;">
                                                        <div href="#" class="blue_deep form-control col-md-12">Notification Tidak Ditemukan</div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }?>
                                            <table class="table" id="container">
                                                <?php foreach($notification as $list){?>
                                                <tr class='clickable-row' data-href='<?=base_url()?><?=$list->href?>' >
                                                        <td style="border-top:0px;border-bottom: 1px solid #ddd;;"><i class="fa <?=$list->icon?>"></td>
                                                        <td style="border-top:0px;border-bottom: 1px solid #ddd;;"> <?=$list->description?></td>
                                                        <td style="border-top:0px;border-bottom: 1px solid #ddd;;"><?=$list->created_at?></td>

                                                </tr>
                                                <?php } ?>

                                            </table>
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
            function check_timesheet($var,$id_time,$advokat_id){
                var status= 0;
                if($("#time"+$var).is(":checked")){
                    status=1;
                }
                $.ajax({
                        url: ROOT+'clients_ajax/set_point',
                        type: 'post',
                        dataType: 'json',
                        data: {
                            agenda_id:$var,
                            advokat_id:$advokat_id,
                            id_time:$id_time,
                            status:status
                        }
                    })
                    .done(function(data) {
                        if(data.is_error==1){ 
                            alert_error(data.error);
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
            <script>

    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
            </script>
<?php $this->load->view('landing_page/layout/footer')?>
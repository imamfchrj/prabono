<?php $this->load->view('client/layout/header')?>


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
                                            <li><a href="<?=base_url()?>client/kasus_aktif/<?=$kasus->id?>">Kasus</a></li>
                                        <li <?php if($menu=="agenda") {?>class="active"<?php } ?>><a href="<?=base_url()?>clients/agenda/<?=$kasus->id?>">Agenda</a></li>
                                        <li <?php if($menu=="point") {?>class="active"<?php } ?>><a href="<?=base_url()?>clients/request/<?=$kasus->id?>">Request Time Sheet</a></li>
                                        </ul>
                                        <?php } ?>
                                        
                                        <?php if(count($timesheet)==0){?>
                                        <div class="row-striped">
                                            <div class="pad15">
                                                <p>Agenda tidak ditemukan</p>
                                            </div>
                                        </div>
                                            
                                        <?php }else{?>
                                            <table class="table">
                                            <?php foreach($timesheet as $list){?>
                                                <tr>
                                                    <td style="border-top:0px;border-bottom: 1px solid #ddd;;"><?=$list->title?></td>
                                                    <td style="border-top:0px;border-bottom: 1px solid #ddd;;"><?=$list->fromdate?></td>
                                                    <td style="border-top:0px;border-bottom: 1px solid #ddd;;"><?php if($list->is_accept){ if(strtotime(date("Y-m-d H:i:s"))-strtotime($list->todate) < 0){echo "On Progress";}else{echo "Selesai";}}else{echo "Pending";}?></td>
                                                    <td style="border-top:0px;border-bottom: 1px solid #ddd;;"><?php if(isset($list->id)){echo '<i class="fa fa-check aria-hidden="true"></i>';}else{ echo '<i class="fa fa-spinner" aria-hidden="true"></i>';}?></td>
                                                </tr>
                                            <?php }?>

                                            </table>
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
<?php $this->load->view('landing_page/layout/footer')?>
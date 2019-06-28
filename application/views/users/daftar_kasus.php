<?php $this->load->view('users/layout/header')?>


            <main class="main-content" id="main-content">

                <section id="services" class="flat-row vc wrap-iconbox">
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-md-12 header-daftar">
                                <div class=" style3">
                                <div class="widget widget_search_left" >
                                    <form role="search" method="get" class="search-form form-group row" action="">
                                        <input style="margin-right:10px;height:45px;" type="search" name="search" class="search-field col-md-3" placeholder="Search…" value="" >  
                                        <select style="margin-right:10px;height:45px;"  class="search-field select-imp col-md-3" name="domisili">
                                                    <option value="">Pilih Provinsi</option>
                                                    <option value="11">ACEH</option>
                                                    <option value="12">SUMATERA UTARA</option>
                                                    <option value="13">SUMATERA BARAT</option>
                                                    <option value="14">RIAU</option>
                                                    <option value="15">JAMBI</option>
                                                    <option value="16">SUMATERA SELATAN</option>
                                                    <option value="17">BENGKULU</option>
                                                    <option value="18">LAMPUNG</option>
                                                    <option value="19">KEPULAUAN BANGKA BELITUNG</option>
                                                    <option value="21">KEPULAUAN RIAU</option>
                                                    <option value="31">DKI JAKARTA</option>
                                                    <option value="32">JAWA BARAT</option>
                                                    <option value="33">JAWA TENGAH</option>
                                                    <option value="34">DI YOGYAKARTA</option>
                                                    <option value="35">JAWA TIMUR</option>
                                                    <option value="36">BANTEN</option>
                                                    <option value="51">BALI</option>
                                                    <option value="52">NUSA TENGGARA BARAT</option>
                                                    <option value="53">NUSA TENGGARA TIMUR</option>
                                                    <option value="61">KALIMANTAN BARAT</option>
                                                    <option value="62">KALIMANTAN TENGAH</option>
                                                    <option value="63">KALIMANTAN SELATAN</option>
                                                    <option value="64">KALIMANTAN TIMUR</option>
                                                    <option value="65">KALIMANTAN UTARA</option>
                                                    <option value="71">SULAWESI UTARA</option>
                                                    <option value="72">SULAWESI TENGAH</option>
                                                    <option value="73">SULAWESI SELATAN</option>
                                                    <option value="74">SULAWESI TENGGARA</option>
                                                    <option value="75">GORONTALO</option>
                                                    <option value="76">SULAWESI BARAT</option>
                                                    <option value="81">MALUKU</option>
                                                    <option value="82">MALUKU UTARA</option>
                                                    <option value="91">PAPUA BARAT</option>
                                                    <option value="94">PAPUA</option>
                                        </select>
                                        <select style="margin-right:10px;height:45px;"  class="search-field select-imp col-md-2"  name="order_by">
                                                    <option value="desc">Terbaru</option>
                                                    <option value="asc">Terlama</option>
                                        </select>
                                        <button style="margin-right:10px;height:45px;" type="submit" class="col-md-2" id="searchwidget" value="">Cari</button>
                                    </form>                            
                                </div>
                                <h5 class="">Kasus yang dapat dipilih</h5>
                                </div>
                            </div>

                        <?php if(count($kasus) < 1){?>
                        <div class="col-md-12 text-center">
                                <div class="field clearfix " style="margin-top:24px;"> 
                                    <div class="form-group row form-biodata" style="background:black;">
                                        <div href="#" class="blue_deep form-control col-md-12">Kasus Belum Tersedia</div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <?php foreach($kasus as $list){ ?>
                            <div class="col-md-12 box-kasus">
                                <div class="flat-team team-list style2 clearfix">                  
                                    <div class="content">
                                        <!-- <span class="position">Firda Safridi</span> -->
                                        <?php if($list->status==1){?>
                                         <span class="badge badge-success float-right">Open</span>
                                        <?php }else if($list->status==2){?>
                                         <span class="badge badge-primary float-right">Aktif</span>
                                         <?php }else if($kasus->status==4){?>
                                         <span class="badge badge-success float-right">Wait</span>

                                        <?php }else{?>
                                         <span class="badge badge-dark float-right">Closed</span>
                                        <?php }?>
                                        <h5 class="blue_deep name"><?=$list->judul?></h5>
                                        <p><?=$list->created_at?></p>
                                        <!-- <p><a href="#">#PerdaganganInternationsal</a> <a href="#">#PencucisanUang</a></p> -->
                                        
                                        <p><b>Kronologi Masalah</b></p>
                                        <p>
                                            <?php if(strlen(strip_tags($list->kronologi_masalah))>509){?>
                                            <?=strip_tags(substr($list->kronologi_masalah,0,509))?>
                                            <?php }else{?>
                                            <?=strip_tags($list->kronologi_masalah)?>
                                            <?php }?>
                                        </p>
                                        <?php if($list->firstname_client){ ?>
                                        <ul class="info-team">
                                        <li><span>Nama Client:</span> <?php if(!$list->is_kusus){?><?=$list->firstname_client?> <?=$list->lastname_client?><?php }else{ echo $list->initial_name;}?></li>
                                            <li><span>Telpon:</span> <?=$list->hp_client?></li>
                                            <li><span>Email:</span> <?=$list->email_client?></li>
                                            <!-- <li><span>Tanggal Sidang:</span>22 January 2019</li> -->
                                            <!-- <li><span>Lokasi:</span>DKI Jakarta</li> -->
                                        </ul>
                                        <?php }?>
                                        <div class="flat-view">
                                                <button type="button" class="btn-link float-right" onclick="location.href='<?=base_url()?>users/daftar_kasus_singgle/<?=$list->id?>'">Lihat detail kasus</button>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if(count($kasus) > 0){?>
                            <div class="col-md-12 text-center">
                                <div class="field clearfix " style="margin-top:24px;"> 
                                    <div class="form-group row form-biodata" style="background:black;">
                                        <a href="#" class="blue_deep form-control col-md-12">Lihat lebih banyak</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div> 
                    
                    <div class="row">
                            <div class="divider h70">
                            </div>
                    </div>  
                </section> 
            </main>
<?php $this->load->view('landing_page/layout/footer')?>
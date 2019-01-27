                    <div class="col-md-3">
                        <div class="sidebar">
                            <div class="widget widget_search">
                                <form role="search" method="get" class="search-form" action="#">
                                    <input type="search" class="search-field" placeholder="Cari…" value="" name="s"> 
                                    <input type="submit" class="search-submit" id="searchwidget" value="">
                                </form>                            
                            </div><!-- /.widget-search -->

                            <div class="widget widget_categories">
                                <h5 class="widget-title">Kategori</h5>
                                <ul>
                                    <?php
                                    $j=0;
                                     foreach($results_kategori as $list){?>
                                    <li><a href="#"><?=$list->judul_kategori?></a></li>
                                     <?php }?>

                                    <!-- <li><a href="#">Bisnis</a></li>
                                    <li><a href="#">Keuangan</a></li>
                                    <li><a href="#">Asuransi</a></li>   
                                    <li><a href="#">Penipuan</a></li>
                                    <li><a href="#">UU ITE</a></li>   -->
                                </ul>
                            </div><!-- /.widget-categories -->
                            <div class="widget widget_recent">
                                <h5 class="widget-title">Postingan Terakhir</h5>
                                <ul>
                                    <?php
                                    $j=0;
                                     foreach($results as $list){?>
                                        <li><a href="#"><?=$list->title?></a></li>
                                        <?php $j++;
                                        if($j>8)break;?>
                                    <?php }?>
                                    <!-- <li><a href="#">Anti Korupsi</a></li>
                                    <li><a href="#">Hai!</a></li>
                                    <li><a href="#">Hari Anti Korupsi</a></li>
                                    <li><a href="#">Dimulai dari sekarang</a></li>   
                                    <li><a href="#">Best response</a></li> -->
                                </ul>
                            </div><!-- /.widget-categories -->
                            <!-- <div class="widget widget_archives">
                                <h5 class="widget-title">Arsip</h5>
                                <ul>
                                    <li><a href="#">Oktober 2017</a></li>
                                    <li><a href="#">Juli 2017</a></li>
                                    <li><a href="#">Juni 2017</a></li>
                                    <li><a href="#">Maret 2017</a></li>   
                                </ul>
                            </div> -->
                            <!-- /.widget-categories -->
                        </div><!-- /.sidebar -->
                    </div>
<?php $this->load->view('landing_page/layout/header')?>
    <main class="main-content" id="main-content">
        <!-- Blog posts -->
        <section class="main-content blog-posts flat-row pd-bottom">
            <div class="container">
                <div class="row">
                    <?php $this->load->view('landing_page/widget/widget-news')?>
                    <div class="col-md-9">
                        <div class="post-wrap">
                            <?php foreach ($results as $list){
                                $list->deskripsi=strip_tags($list->deskripsi);
                                if(strlen($list->deskripsi)>42){
                                    $list->deskripsi=substr($list->deskripsi,0,42);
                                }
                                if(strlen($list->penulis)==0){
                                    $list->penulis="Admin";
                                }
                                
                                ?>
                            
                            <article class="post clearfix">
                                <div class="featured-post">
                                    <a href="<?=base_url()?>berita/terbaru"> <img src="<?=base_url()?>probono_asset/images/src/<?=$list->thumbnail?>" alt="image"></a>
                                </div><!-- /.feature-post -->
                                <div class="content-post">  
                                    <ul class="meta-post clearfix">
                                        <li class="date">
                                            <a href="#"><?=$list->created_at?></a>
                                        </li>
                                        <li class="author">
                                            <a href="#">By <?=$list->penulis?></a>
                                        </li>
                                        <li class="categories"> 
                                            <a href="#">In <?=$list->id_kategori?></a>
                                        </li>
                                    </ul><!-- /.meta-post -->
                                    <h2 class="title-post"><a href="<?=base_url()?>berita/terbaru/<?=$list->deskripsi?>">
                                    <?=$list->judul?></a></h2>
                                    <div class="entry-post excerpt">                              
                                        <p><?=$list->deskripsi?></p>
                                        <div class="more-link"><button type="button" class="flat-button" onclick="location.href='<?=base_url()?>berita/terbaru<?=$list->id?>'">Baca Selengkapnya</button></div>
                                    </div>
                                </div><!-- /.content-post -->
                            </article>
                            <?php }?>
                            <!-- <article class="post clearfix">
                                <div class="featured-post">
                                    <a href="<?=base_url()?>berita/terbaru"> <img src="<?=base_url()?>probono_asset/images/blog/2.jpg" alt="image"></a>
                                </div>
                                <div class="content-post">  
                                    <ul class="meta-post clearfix">
                                        <li class="date">
                                            <a href="#">20 July 2018</a>
                                        </li>
                                        <li class="author">
                                            <a href="#">By Admin</a>
                                        </li>
                                        <li class="categories"> 
                                            <a href="#">In Probono</a>
                                        </li>
                                    </ul>
                                    <h2 class="title-post"><a href="<?=base_url()?>berita/terbaru">
                                    Bantuan Hukum !!</a></h2>
                                    <div class="entry-post excerpt">                              
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into […] 
                                        </p>
                                        <div class="more-link"><button type="button" class="flat-button" onclick="location.href='<?=base_url()?>berita/terbaru'">Baca Selengkapnya</button></div>
                                    </div>
                                </div>
                            </article> -->
                            
                            
                        </div><!-- /.post-wrap -->  
                        <!-- <div class="blog-pagination">
                            <ul class="flat-pagination clearfix">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next"><a href="#">Selanjutnya</a></li>                                                                
                            </ul>
                        </div>            -->
                    </div><!-- /.col-md-9 -->    
                                
                </div><!-- /.row -->           
            </div><!-- /.container -->   
        </section>   
    </main>
<?php $this->load->view('landing_page/layout/footer')?>
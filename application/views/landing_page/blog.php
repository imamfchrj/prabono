<?php $this->load->view('landing_page/layout/header')?>
    <main class="main-content" id="main-content">
        <!-- Blog posts -->
        <section class="main-content blog-posts flat-row pd-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="sidebar">
                            <div class="widget widget_search">
                                <form role="search" method="get" class="search-form" action="#">
                                    <input type="search" class="search-field" placeholder="Search…" value="" name="s"> 
                                    <input type="submit" class="search-submit" id="searchwidget" value="">
                                </form>                            
                            </div><!-- /.widget-search -->

                            <div class="widget widget_categories">
                                <h5 class="widget-title">Categories</h5>
                                <ul>
                                    <li><a href="#">Graphics</a></li>
                                    <li><a href="#">WordPress</a></li>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Finance</a></li>   
                                    <li><a href="#">Insurance</a></li>
                                    <li><a href="#">Leasing</a></li>  
                                </ul>
                            </div><!-- /.widget-categories -->
                            <div class="widget widget_recent">
                                <h5 class="widget-title">Recent Posts</h5>
                                <ul>
                                    <li><a href="#">Heading into Monday</a></li>
                                    <li><a href="#">There you go</a></li>
                                    <li><a href="#">Everything is included</a></li>
                                    <li><a href="#">Let’s go</a></li>   
                                    <li><a href="#">Best response</a></li>
                                </ul>
                            </div><!-- /.widget-categories -->
                            <div class="widget widget_archives">
                                <h5 class="widget-title">Archives</h5>
                                <ul>
                                    <li><a href="#">October 2016</a></li>
                                    <li><a href="#">July 2016</a></li>
                                    <li><a href="#">June 2016</a></li>
                                    <li><a href="#">March 2016</a></li>   
                                </ul>
                            </div><!-- /.widget-categories -->
                        </div><!-- /.sidebar -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-9">
                        <div class="post-wrap">
                            <article class="post clearfix">
                                <div class="featured-post">
                                    <a href="blog-single.html"> <img src="<?=base_url()?>probono_asset/images/blog/1.jpg" alt="image"></a>
                                </div><!-- /.feature-post -->
                                <div class="content-post">  
                                    <ul class="meta-post clearfix">
                                        <li class="date">
                                            <a href="#">20 July 2017</a>
                                        </li>
                                        <li class="author">
                                            <a href="#">By Admin</a>
                                        </li>
                                        <li class="categories"> 
                                            <a href="#">In WordPress</a>
                                        </li>
                                    </ul><!-- /.meta-post -->
                                    <h2 class="title-post"><a href="blog-single.html">
                                    Responsive layout</a></h2>
                                    <div class="entry-post excerpt">                              
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into […] 
                                        </p>
                                        <div class="more-link"><button type="button" class="flat-button" onclick="location.href='<?=base_url()?>berita/terbaru'">Read More</button></div>
                                    </div>
                                </div><!-- /.content-post -->
                            </article>
                            <article class="post clearfix">
                                <div class="featured-post">
                                    <a href="blog-single.html"> <img src="<?=base_url()?>probono_asset/images/blog/2.jpg" alt="image"></a>
                                </div><!-- /.feature-post -->
                                <div class="content-post">  
                                    <ul class="meta-post clearfix">
                                        <li class="date">
                                            <a href="#">20 July 2017</a>
                                        </li>
                                        <li class="author">
                                            <a href="#">By Admin</a>
                                        </li>
                                        <li class="categories"> 
                                            <a href="#">In WordPress</a>
                                        </li>
                                    </ul><!-- /.meta-post -->
                                    <h2 class="title-post"><a href="blog-single.html">
                                    Responsive layout</a></h2>
                                    <div class="entry-post excerpt">                              
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into […] 
                                        </p>
                                        <div class="more-link"><button type="button" class="flat-button" onclick="location.href='<?=base_url()?>berita/terbaru'">Read More</button></div>
                                    </div>
                                </div><!-- /.content-post -->
                            </article>
                            <article class="post clearfix">
                                <div class="featured-post">
                                    <a href="blog-single.html"> <img src="<?=base_url()?>probono_asset/images/blog/3.jpg" alt="image"></a>
                                </div><!-- /.feature-post -->
                                <div class="content-post">  
                                    <ul class="meta-post clearfix">
                                        <li class="date">
                                            <a href="#">20 July 2017</a>
                                        </li>
                                        <li class="author">
                                            <a href="#">By Admin</a>
                                        </li>
                                        <li class="categories"> 
                                            <a href="#">In WordPress</a>
                                        </li>
                                    </ul><!-- /.meta-post -->
                                    <h2 class="title-post"><a href="blog-single.html">
                                    Responsive layout</a></h2>
                                    <div class="entry-post excerpt">                              
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into […] 
                                        </p>
                                        <div class="more-link"><button type="button" class="flat-button" onclick="location.href='<?=base_url()?>berita/terbaru'">Read More</button></div>
                                    </div>
                                </div><!-- /.content-post -->
                            </article>
                            <article class="post clearfix">
                                <div class="featured-post">
                                    <a href="blog-single.html"> <img src="<?=base_url()?>probono_asset/images/blog/4.jpg" alt="image"></a>
                                </div><!-- /.feature-post -->
                                <div class="content-post">  
                                    <ul class="meta-post clearfix">
                                        <li class="date">
                                            <a href="#">20 July 2017</a>
                                        </li>
                                        <li class="author">
                                            <a href="#">By Admin</a>
                                        </li>
                                        <li class="categories"> 
                                            <a href="#">In WordPress</a>
                                        </li>
                                    </ul><!-- /.meta-post -->
                                    <h2 class="title-post"><a href="blog-single.html">
                                    Responsive layout</a></h2>
                                    <div class="entry-post excerpt">                              
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into […] 
                                        </p>
                                        <div class="more-link"><button type="button" class="flat-button" onclick="location.href='<?=base_url()?>berita/terbaru'">Read More</button></div>
                                    </div>
                                </div><!-- /.content-post -->
                            </article>
                            <article class="post clearfix">
                                <div class="featured-post">
                                    <a href="blog-single.html"> <img src="<?=base_url()?>probono_asset/images/blog/5.jpg" alt="image"></a>
                                </div><!-- /.feature-post -->
                                <div class="content-post">  
                                    <ul class="meta-post clearfix">
                                        <li class="date">
                                            <a href="#">20 July 2017</a>
                                        </li>
                                        <li class="author">
                                            <a href="#">By Admin</a>
                                        </li>
                                        <li class="categories"> 
                                            <a href="#">In WordPress</a>
                                        </li>
                                    </ul><!-- /.meta-post -->
                                    <h2 class="title-post"><a href="blog-single.html">
                                    Responsive layout</a></h2>
                                    <div class="entry-post excerpt">                              
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into […] 
                                        </p>
                                        <div class="more-link"><button type="button" class="flat-button" onclick="location.href='<?=base_url()?>berita/terbaru'">Read More</button></div>
                                    </div>
                                </div><!-- /.content-post -->
                            </article>
                            
                        </div><!-- /.post-wrap -->  
                        <div class="blog-pagination">
                            <ul class="flat-pagination clearfix">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next"><a href="#">Next</a></li>                                                                
                            </ul><!-- /.flat-pagination -->
                        </div><!-- /.blog-pagination -->                  
                    </div><!-- /.col-md-9 -->    
                                
                </div><!-- /.row -->           
            </div><!-- /.container -->   
        </section>   
    </main>
<?php $this->load->view('landing_page/layout/footer')?>
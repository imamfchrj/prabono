<?php $this->load->view('landing_page/layout/header')?>
    <main class="main-content" id="main-content">
        <!-- Blog posts -->
        <section class="main-content blog-single flat-row pd-bottom">
            <div class="container">
                <div class="row">
                    
                    <?php $this->load->view('landing_page/widget/widget-news')?>
                    <div class="col-md-9">
                        <div class="post-wrap">
                            <article class="post clearfix">
                                <div class="featured-post">
                                    <img src="<?=base_url()?>probono_asset/images/blog/1.jpg" alt="image">
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
                                            <a href="#">In Probono</a>
                                        </li>
                                    </ul><!-- /.meta-post -->
                                    <h2 class="title-post">Bantuan Hukum Online</h2>
                                    <div class="entry-post excerpt">                              
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into.
                                        </p>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessita tibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias.</p>
                                    </div>
                                    <div class="footer-post">
                                        <div class="tags-links">
                                            <strong>Tags: </strong>
                                            <a href="#" rel="tag">hukum,</a>
                                            <a href="#" rel="tag"> Kedamaian,</a>
                                            <a href="#" rel="tag"> antikorupsi,</a>
                                        </div>
                                        <div class="social-share-article">
                                            <ul class="social-links style3">
                                                <li><strong>Share:</strong></li>
                                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>  
                                </div><!-- /.content-post -->
                            </article>
                            <div class="main-single">
                              
                                <div class="comments-area">
                                    <h2 class="comments-title">Comments</h2>
                                    <ol class="comment-list">
                                        <li class="comment">
                                            <article class="comment-body">           
                                                <div class="comment-author">
                                                    <img src="<?=base_url()?>probono_asset/images/blog/comment1.jpg" alt="image">  
                                                </div><!-- .comment-author -->
                                                <div class="comment-text">
                                                    <div class="comment-metadata">
                                                        <h5><a href="#">Firda Safridi</a></h5>
                                                        <span class="date">20 July, 2017</span>
                                                        <span class="comment-reply"><a href="#">Reply</a></span>
                                                    </div><!-- .comment-metadata -->
                                                    <div class="comment-content">
                                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati </p>
                                                    </div><!-- .comment-content -->

                                                </div><!-- /.comment-text -->                                       
                                            </article><!-- .comment-body -->
                                            <article class="comment-body">           
                                                <div class="comment-author">
                                                    <img src="<?=base_url()?>probono_asset/images/blog/comment2.jpg" alt="image">  
                                                </div><!-- .comment-author -->
                                                <div class="comment-text">
                                                    <div class="comment-metadata">
                                                        <h5><a href="#">Jacob Reid</a></h5>
                                                        <span class="date">20 July, 2017</span>
                                                        <span class="comment-reply"><a href="#">Reply</a></span>
                                                    </div><!-- .comment-metadata -->
                                                    <div class="comment-content">
                                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati </p>
                                                    </div><!-- .comment-content -->

                                                </div><!-- /.comment-text -->                                       
                                            </article><!-- .comment-body -->
                                        </li><!-- #comment-## -->                                   
                                    </ol><!-- .comment-list -->

                                    <div class="comment-respond" id="respond">
                                        <h2 class="comment-reply-title">Leave Reply</h2>
                                        <form novalidate="" class="comment-form" id="commentform" method="post" action="#">
                                            <p class="comment-notes">Your email address will not be published. Required fields are marked *</p>                          
                                            <p class="comment-form-comment comment-label">
                                                <label>Comment</label> 
                                                <textarea id="comment" name="comment" required="required"></textarea>
                                            </p> 
                                            <p class="comment-form-author comment-label">
                                                <label>Name *</label>
                                                 <input id="author" name="author" type="text" value="" size="30" maxlength="245" aria-required="true" required="required">
                                            </p>
                                            <p class="comment-form-email comment-label">
                                                <label>Email *</label>
                                                <input id="email" name="email" type="email" required="required">
                                            </p>   
                                            <p class="comment-form-url comment-label">
                                                <label>Telpon</label>
                                                <input id="telpon" name="telpon" type="text">
                                            </p>                     
                                            <p class="form-submit">
                                                <button class="flat-button comment-submit">Post Komentar</button>
                                            </p>
                                        </form>
                                    </div><!-- /.comment-respond -->
                                </div><!-- /.comments-area -->
                            </div> 
                        </div><!-- /.post-wrap -->                   
                    </div><!-- /.col-md-9 -->    
                                
                </div><!-- /.row -->           
            </div><!-- /.container -->   
        </section> 
    </main>  
<?php $this->load->view('landing_page/layout/footer')?>
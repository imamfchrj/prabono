<div class="col-md-3">
   <div class="sidebar">
      <div class="widget widget_contact2">
         <h5 class="widget-title style2">Kritik & Saran</h5>
          
         <span class="flat-input wrap-input-name">
             <input type="text" value="" id="name" style="width:100%;" tabindex="1" placeholder="Nama" name="name" required="">
         </span>
         <span class="flat-input wrap-input-name">
             <input type="text" value="" id="hp" style="width:100%;" tabindex="1" placeholder="No Hp" name="hp" required="">
         </span>
         <span class="flat-input wrap-input-name">
             <textarea  id="saran" cols="10" rows="4"></textarea>
         </span>
         <button type="button" onclick="simpan()" class="flat-button">Kirim</button>
      </div>

      <script>
         function simpan() {
            $.ajax({
               url :       ROOT+'/dashboard/ajax_saran',
               dataType :  'json',
               type :      'post',
               data: {
                  name: $("#name").val(),
                  hp: $("#hp").val(),
                  saran: $("#saran").val(),
               } 
            })
            .done(function(data) {
                if(data.is_error){
                    alert(data.error_message);
                    return;
                }
                location.reload();
            })
            .always(function(){
            })
            .error(function(data){
                }
            );
         }
      </script>
      
      <!-- /.widget-contact -->
      <div class="widget widget_download">
         <a href="#"><i class="fa fa-file-word-o"></i>Brosur.doc</a>
         <a href="#"><i class="fa fa-file-pdf-o"></i>Brosur.pdf</a>
      </div>
      <!-- /.widget-download -->
      <div class="widget widget_testimonials">
         <div class="flat-testimonials owl-carousel owl-theme owl-loaded" data-item="1" data-nav="false" data-dots="false" data-auto="true">
            <div class="owl-stage-outer">
               <div class="owl-stage" >
                  <div class="owl-item cloned" style="width: 270px; margin-right: 0px;">
                     <div class="testimonials style3">
                        <div class="testimonial-content">
                           <div class="message">
                              <blockquote class="whisper">
                                 Probono akan membantu masalah hukum anda. Berpihak kepada rakyat dan anti korupsi.
                              </blockquote>
                           </div>
                        </div>
<!--                        <div class="avatar">-->
<!--                           <div class="testimonial-author-thumbnail">    -->
<!--                              <img src="https://images.pexels.com/photos/555790/pexels-photo-555790.png?auto=compress&cs=tinysrgb&dpr=2&h=400&w=400" alt="image">-->
<!--                           </div>-->
<!--                           <div class="name">Firda Safridi</div>-->
<!--                           <div class="position">Ceo &amp; Founder</div>-->
<!--                        </div>-->
                     </div>
                  </div>
               </div>
            </div>
            <div class="owl-controls">
               <div class="owl-nav">
                  <div class="owl-prev" style="display: none;">prev</div>
                  <div class="owl-next" style="display: none;">next</div>
               </div>
               <div class="owl-dots" style="display: none;"></div>
            </div>
         </div>
      </div>
      <!-- /.widget-testimonials -->
   </div>
</div>
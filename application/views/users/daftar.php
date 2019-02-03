
<?php $this->load->view('users/layout/header')?>

            <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
            <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

            <main class="main-content" id="main-content">

                <section id="services" class="flat-row vc wrap-iconbox">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                               <div class="title-section">
                                    <!-- <h1 class="title">Ingin Bergabung?</h1>
                                    <div class="sub-title">
                                        Lakukan 3 langkah sederhana!
                                    </div> -->
                                    <div>
                                    <div class="daftar-steps">
                                            <!-- Stepers Wrapper -->
                                            <ul>

                                                <!-- First Step -->
                                                <li class="form-biodata-step active ">
                                                    <a href="#">
                                                        <div class="ips-step">
                                                            <span class="circle">1</span>
                                                        </div>
                                                        <span class="label">Biodata</span>
                                                    </a>
                                                </li>

                                                <!-- Second Step -->
                                                <li class="form-identitas-step">
                                                    <a href="#">
                                                        <div class="ips-step">
                                                            <span class="circle">2</span>
                                                        </div>
                                                        <span class="label">Identitas</span>
                                                    </a>
                                                </li>
                                                
                                                <!-- Third Step -->
                                                <li class="form-biografi-step">
                                                    <a href="#">
                                                        <div class="ips-step">
                                                            <span class="circle">3</span>
                                                        </div>
                                                        <span class="label">Oto Biografi</span>
                                                    </a>
                                                </li>

                                                <!-- Third Step -->
                                                <li class="form-edukasi-step">
                                                    <a href="#">
                                                        <div class="ips-step">
                                                            <span class="circle">4</span>
                                                        </div>
                                                        <span class="label">Edukasi</span>
                                                    </a>
                                                </li>
                                                <li class="form-bidang-step">
                                                    <a href="#">
                                                        <div class="ips-step">
                                                            <span class="circle">5</span>
                                                        </div>
                                                        <span class="label">Bidang Keahlian</span>
                                                    </a>
                                                </li>

                                            </ul>
                                            <!-- /.Stepers Wrapper -->
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div id="biodataform" class="flat-request-form style3" method="post">
                                    <div class="field clearfix "> 
                                        <div class="form-group row form-biodata">

                                            <label class="col-md-12" for="exampleInputEmail1">Nama Lengkap <span class="text-danger email-error"></span></label>
                                            
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="firstname" placeholder="Nama Depan">
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="lastname" placeholder="Nama Belakang">
                                            </div>

                                            <label class="col-md-12" for="exampleInputEmail1">Jenis Kelamin <span class="text-danger email-error"></span></label>

                                            <div class="col-md-12" for="exampleInputEmail1">
                                                <select class="form-control">
                                                    <option value="0">Pilih Jenis Kelamin</option>
                                                    <option value="1">Laki-laki</option>
                                                    <option value="2">Perempuan</option>
                                                    <option value="3">Tidak ingin disebutkan</option>
                                                </select>
                                            </div>

                                            <label class="col-md-12" for="exampleInputEmail1">Titel Lengkap <span class="text-danger email-error"></span></label>
                                            
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Titel Depan">
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Titel Belakang">
                                            </div>


                                            <label class="col-md-12" for="exampleInputEmail1">No Handphone <span class="text-danger email-error"></span></label>

                                            <div class="col-md-12">
                                                <input type="text" class="form-control" placeholder="Masukkan No Handphone">
                                            </div>

                                            <label class="col-md-12" for="exampleInputEmail1">Email <span class="text-danger email-error"></span></label>

                                            <div class="col-md-12">
                                                <input type="email" class="form-control" placeholder="Masukkan Email">
                                            </div>
                                        </div>
                                        <!-- ["form-biodata", "form-identitas", "form-biografi", "form-edukasi", "form-bidang"]; -->
                                        <div class="form-group row form-identitas" style="display:none ;">

                                            <label class="col-md-12" for="exampleInputEmail1">Kartu Identitas <span class="text-danger email-error"></span></label>

                                            <div class="col-md-6">
                                                <input type="number" class="form-control" placeholder="Nomer Identitas">
                                            </div>

                                            <div class="col-md-6">
                                                Browse for file ... <input class="file-upload" type="file" />
                                            </div>

                                            <label class="col-md-12" for="exampleInputEmail1">Kartu Anggota <span class="text-danger email-error"></span></label>

                                            <div class="col-md-6">
                                                <input type="number" class="form-control" placeholder="Nomer Keanggotaan">
                                            </div>

                                            <div class="col-md-6">
                                                Browse for file ... <input class="file-upload" type="file" />
                                            </div>

                                            <label class="col-md-12" for="exampleInputEmail1">Alamat Domisili <span class="text-danger email-error"></span></label>

                                            <div class="col-md-12">
                                                <!-- <input type="number" class="form-control" placeholder="Alamat"> -->

                                                <textarea class="form-control" rows="3" i></textarea>
                                            </div>

                                            <label class="col-md-12" for="exampleInputEmail1">Alamat <span class="text-danger email-error"></span></label>

                                            <div class="col-md-12">
                                                <!-- <input type="number" class="form-control" placeholder="Alamat"> -->

                                                <textarea class="form-control" rows="3" i></textarea>
                                            </div>

                                            <label class="col-md-12" for="exampleInputEmail1">Area Praktik <span class="text-danger email-error"></span></label>
                                            
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" placeholder="Provinsi">
                                            </div>

                                            <div class="col-md-12">
                                                <input type="checkbox" name="is_lawfirm" id="is_lawfirm" onclick="lawfirm()" value="">    By Law Firm .. ?
                                            </div>

                                            <div class="col-md-6">
                                                <input type="text" style="display:none" class="form-control" name="nama_kantor" id="nama_kantor"  placeholder="Nama Kantor">
                                            </div>

                                            <div class="col-md-6">
                                                <input type="text" style="display:none" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan">
                                            </div>

                                        </div>
                                        <div class="form-group row form-biografi" style="display:none;">
                                            
                                            <label class="col-md-12" for="exampleInputEmail1">Biografi ( Max 150 Characters )</label>
                                            <div class="col-md-12">
                                                <div id="editorBiografi" maxlength="150">
                                            
                                                </div>
                                                <span id="chars">150</span> characters remaining
                                            </div>

                                            <div class="col-md-12">
                                                Browse for file ... <input class="file-upload" type="file" />
                                            </div>
                                        </div>
                                        <div class="form-group row form-edukasi" style="display:none ;">
                                            
                                            <label class="col-md-12" for="exampleInputEmail1">Edukasi <span class="text-danger email-error"></span></label>
                                            <div class="col-md-12">
                                                <div id="editorEdukasi">
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                Browse for file ... <input class="file-upload" type="file" />
                                            </div>

                                        </div>
                                        <div class="form-group row form-bidang" style="display:none  ;">
                                            <label class="col-md-12" for="exampleInputEmail1">Pilih Bidang Keahlian Anda : <span class="text-danger email-error"></span></label>
                                            
                                            <div class="col-md-12">
                                                <?php
                                                foreach($probono as $row)
                                                {
                                                    echo '<input type="checkbox" value="'.$row->id.'"'."$c".'>     '.$row->bidang_keahlian.'<br>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="field clearfix field-btn">
    
                                        <button class="flat-button-back btn-link kembali" style="float:left;display:none;">&nbsp;Kembali</button>
                                        <button class="flat-button lanjut" style="float:right;">Lanjut</button>
                                        <!--<button class="flat-button btn-success submit" style="float:right;display:none;">Submit</button>-->
                                        <button id="submitBtn" data-toggle="modal" data-target="#modal-term-condition" class="flat-button btn-success submit" style="float:right;display:none;">Submit</button>
                                        <!--<input type="button" name="btn" value="Submit" id="submitBtn" data-toggle="modal" data-target="#confirm-submit" class="btn btn-default" />-->
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

            
            <script type="text/javascript">
            $(function(){
                var forms = ["form-biodata", "form-identitas", "form-biografi", "form-edukasi", "form-bidang"];
                var tmp_i =0;
                $(".submit").click(function(){
                   //submit();
                });
                $("#submitend").click(function(){
                    // submit();
                    $('#biodataform').submit();
                    $("#submitend").hide();

                    window.location = ROOT+'users/status_verifikasi';

                });
                $(".lanjut").click(function(){
                    // $(".form-daftar").html("<b>Hello world!</b>");
                    $("."+forms[tmp_i]).hide();
                    tmp_i++;
                    $("."+forms[tmp_i]).show();
                    if(forms[tmp_i]=="form-bidang"){
                        $(".lanjut").hide();
                        $(".submit").show();
                    }else{
                        $(".lanjut").show();
                        $(".submit").hide();
                    }
                    if(tmp_i>0){
                        $(".kembali").show();
                    }
                    steps();
                });
                $(".kembali").click(function(){
                    // $(".form-daftar").html("<b>Hello world!</b>");
                    $("."+forms[tmp_i]).hide();
                    tmp_i--;
                    $("."+forms[tmp_i]).show();
                    if(forms[tmp_i]=="form-bidang"){
                        $(".lanjut").hide();
                        $(".submit").show();
                    }else{
                        $(".lanjut").show();
                        $(".submit").hide();
                    }
                    if(tmp_i==0){
                        $(".kembali").hide();
                    }
                    steps();
                });
                function steps(){
                    if(tmp_i <0){
                        tmp_i=0;
                    }
                    if(tmp_i > forms.length){
                        tmp_i=forms.length;
                    }
                    
                    $("."+forms[0]+"-step").removeClass("active");
                    for (i = 0; i < forms.length; i++) { 
                        // text += cars[i] + "<br>";
                        $("."+forms[i]+"-step").removeClass("completed");
                    }
                    for (i = 0; i < tmp_i; i++) { 
                        // text += cars[i] + "<br>";
                        $("."+forms[i]+"-step").addClass("completed");
                    }
                }
            });

            function lawfirm() {
                var checkBox = document.getElementById("is_lawfirm");
                var jab = document.getElementById("jabatan");
                var n_kantor = document.getElementById("nama_kantor");
                if (checkBox.checked == true){
                    jab.style.display = "block";
                    n_kantor.style.display = "block";
                } else {
                    jab.style.display = "none";
                    n_kantor.style.display = "none";
                }
            }

            $(document).ready(function() {

            });
            </script>

            <script>
            tmp=true;
            var submit = function (){  
                $.ajax({
                    url: ROOT+'users/ajax_daftar',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        uid: "<?=$uid?>",
                        // csrf_token: ""
                    }
                })
                .done(function(data) {
                    if(data.is_error==1){ 
                        alert_error(data.error);
                        return; 
                    }
                    window.location = "<?php echo base_url('users/status_verifikasi')."/"; ?>";
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
            $(document).ready(function() {
                $('#editorBiografi').summernote({
                    minHeight: 200,
                    toolbar: [
                        // [groupName, [list of button]]
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        // ['fontsize', ['fontsize']],
                        ['para', ['ul', 'ol', 'paragraph']]
                    ],
                    // placeholder: 'Leave a comment ...',
                    // callbacks: {
                    //     // onKeydown: function (e) {
                    //     //     var t = e.currentTarget.innerText;
                    //     //     if (t.trim().length >= 150) {
                    //     //         //delete keys, arrow keys, copy, cut
                    //     //         if (e.keyCode != 8 && !(e.keyCode >=37 && e.keyCode <=40) && e.keyCode != 46 && !(e.keyCode == 88 && e.ctrlKey) && !(e.keyCode == 67 && e.ctrlKey))
                    //     //             e.preventDefault();
                    //     //     }
                    //     // },
                    //     onKeyup: function (e) {
                    //         var t = e.currentTarget.innerText;
                    //         $('#chars').text(150 - t.trim().length);
                    //     },
                    //     onPaste: function (e) {
                    //         var t = e.currentTarget.innerText;
                    //         var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                    //         e.preventDefault();
                    //         var maxPaste = bufferText.length;
                    //         if(t.length + bufferText.length > 400){
                    //             maxPaste = 400 - t.length;
                    //         }
                    //         if(maxPaste > 0){
                    //             document.execCommand('insertText', false, bufferText.substring(0, maxPaste));
                    //         }
                    //         $('#maxContentPost').text(400 - t.length);
                    //     }
                    // }
                });
                $('#editorEdukasi').summernote({
                    minHeight: 200,
                    toolbar: [
                        // [groupName, [list of button]]
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        // ['fontsize', ['fontsize']],
                        ['para', ['ul', 'ol', 'paragraph']]
                    ]
                });
            });
            </script>

<?php $this->load->view('landing_page/layout/footer')?>

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

                                            <label class="col-md-12" >Nama Lengkap <span class="text-danger email-error"></span></label>
                                            
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="firstname" placeholder="Nama Depan" value="<?=$profile->firstname?>">
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="lastname" placeholder="Nama Belakang" value="<?=$profile->lastname?>">
                                            </div>

                                            <label class="col-md-12" >Jenis Kelamin <span class="text-danger email-error"></span></label>

                                            <div class="col-md-12" >
                                                <select class="form-control" id="gender">
                                                    <option value="<?=$profile->gender?>"><?=get_text_gender($profile->gender)?></option>
                                                    <option value="1">Laki-laki</option>
                                                    <option value="2">Perempuan</option>
                                                    <option value="3">Tidak ingin disebutkan</option>
                                                </select>
                                            </div>

                                            <label class="col-md-12" >Titel Lengkap <span class="text-danger email-error"></span></label>
                                            
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="first_title" placeholder="Titel Depan" value="<?=$profile->first_title?>">
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="last_title" placeholder="Titel Belakang" value="<?=$profile->last_title?>">
                                            </div>


                                            <label class="col-md-12" >No Handphone <span class="text-danger email-error"></span></label>

                                            <div class="col-md-12">
                                                <input type="text" class="form-control" id="hp" placeholder="Masukkan No Handphone" value="<?=$profile->hp?>">
                                            </div>

                                            <label class="col-md-12" >Email <span class="text-danger email-error"></span></label>

                                            <div class="col-md-12">
                                                <input type="email" id="email" class="form-control" placeholder="Masukkan Email" value="<?=get_from_sess("advokat_email")?>" disabled>
                                            </div>
                                        </div>
                                        <!-- ["form-biodata", "form-identitas", "form-biografi", "form-edukasi", "form-bidang"]; -->
                                        <div class="form-group row form-identitas" style="display:none ;">

                                            <label class="col-md-12" >Kartu Identitas <span class="text-danger email-error"></span></label>

                                            <div class="col-md-6">
                                                <input type="text" id="id_ktp" class="form-control" placeholder="Nomer Identitas" value="<?=$profile->id_ktp?>">
                                            </div>

                                            <div class="col-md-6">
                                                Browse for file ... <input class="file-upload" type="file" id="file_photo_ktp" />

                                                <input type="hidden" id="photo_ktp"  value="<?=$profile->photo_ktp?>">
                                            </div>

                                            <label class="col-md-12" >Kartu Anggota <span class="text-danger email-error"></span></label>

                                            <div class="col-md-6">
                                                <input type="text" id="id_kta_advokat" class="form-control" placeholder="Nomer Keanggotaan" value="<?=$profile->id_kta_advokat?>">
                                            </div>

                                            <div class="col-md-6">
                                                Browse for file ... <input class="file-upload" id="file_kta_advokat" type="file" />

                                                <input type="hidden" id="kta_advokat" value="<?=$profile->kta_advokat?>">
                                            </div>

                                            <label class="col-md-12" >Alamat Domisili <span class="text-danger email-error"></span></label>

                                            <div class="col-md-12">
                                                <!-- <input type="number" class="form-control" placeholder="Alamat"> -->

                                                <textarea class="form-control" rows="3" id="alamat_domisili"><?=$profile->alamat_domisili?></textarea>
                                            </div>

                                            <label class="col-md-12" >Alamat KTP<span class="text-danger email-error"></span></label>

                                            <div class="col-md-12">
                                                <!-- <input type="number" class="form-control" placeholder="Alamat"> -->

                                                <textarea class="form-control" rows="3"  id="alamat_ktp"><?=$profile->alamat_ktp?></textarea>
                                            </div>

                                            <label class="col-md-12" >Area Praktik <span class="text-danger email-error"></span></label>
                                            
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" id="province" placeholder="Provinsi" value="<?=$profile->province?>">
                                            </div>

                                            <div class="col-md-12">
                                                <input type="checkbox" name="is_law_firm" id="is_law_firm" onclick="lawfirm()" <?=cek_checked($profile->is_law_firm)?>>    By Law Firm .. ?
                                            </div>

                                            <div class="col-md-6">
                                                <input type="text" style="<?php if(!$profile->is_law_firm){?>display:none<?php } ?>" class="form-control" name="company_firm_name" id="company_firm_name"  placeholder="Nama Kantor" value="<?=$profile->company_firm_name?>">
                                            </div>

                                            <div class="col-md-6">
                                                <input type="text" style="<?php if(!$profile->is_law_firm){?>display:none<?php } ?>" class="form-control" name="position_at_company" id="position_at_company" placeholder="Posisi" value="<?=$profile->position_at_company?>">
                                            </div>

                                        </div>
                                        <div class="form-group row form-biografi" style="display:none;">
                                            
                                            <label class="col-md-12" >Biografi ( Max 150 Characters )</label>
                                            <div class="col-md-12">
                                                <div id="biography" maxlength="150">
                                                <?=$profile->biography?>
                                                </div>
                                                <span id="chars">150</span> characters remaining
                                            </div>

                                            <div class="col-md-12">
                                                Browse for file ... <input class="file-upload" type="file" />
                                            </div>
                                        </div>
                                        <div class="form-group row form-edukasi" style="display:none ;">
                                            
                                            <label class="col-md-12" >Edukasi <span class="text-danger email-error"></span></label>
                                            <div class="col-md-12">
                                                <div id="education">
                                                    <?=$profile->education?>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                Browse for file ... <input class="file-upload" type="file" />
                                            </div>

                                        </div>
                                        <div class="form-group row form-bidang" style="display:none  ;">
                                            <label class="col-md-12" >Pilih Bidang Keahlian Anda : <span class="text-danger email-error"></span></label>
                                            
                                            <div class="col-md-12">
                                                <?php
                                                foreach($probono as $row)
                                                {
                                                    echo '<input type="checkbox" value="'.$row->id.'"'."&nbsp;&nbsp;".'>     '.$row->bidang_keahlian.'<br>';
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
                                    <div><p class="blockquote-footer">* This form Autosave</p></div>

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
                $("#file_photo_ktp").change(function(){
                    upload_data(ROOT+'upload/do_upload',"#file_photo_ktp","#photo_ktp");
                });


                $("#file_kta_advokat").change(function(){
                    upload_data(ROOT+'upload/do_upload',"#file_kta_advokat","#kta_advokat");
                });

            </script>

            
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
                var checkBox = document.getElementById("is_law_firm");
                var jab = document.getElementById("position_at_company");
                var n_kantor = document.getElementById("company_firm_name");
                if (checkBox.checked == true){
                    jab.style.display = "block";
                    n_kantor.style.display = "block";
                } else {
                    jab.style.display = "none";
                    n_kantor.style.display = "none";
                }
            }

            </script>

            <script>
            tmp=true;
            var submit = function (){  
            }

            $(document).ready(function() {
                autoSave();
            });
            function autoSave()
            {
                console.log("jalan");
                setTimeout("autoSave()", <?=TICKER_AUTO_SAVE?>); // Autosaves every minute.
                save();
            }
            function save(){
                $.ajax({
                    url: ROOT+'users/ajax_daftar',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        firstname: $("#firstname").val(),
                        lastname: $("#lastname").val(),
                        gender: $("#gender").val(),
                        first_title: $("#first_title").val(),
                        last_title: $("#last_title").val(),
                        hp: $("#hp").val(),
                        id_ktp: $("#id_ktp").val(),
                        photo_ktp: $("#photo_ktp").val(),
                        id_kta_advokat: $("#id_kta_advokat").val(),
                        kta_advokat: $("#kta_advokat").val(),
                        alamat_domisili: $("#alamat_domisili").val(),
                        alamat_ktp: $("#alamat_ktp").val(),
                        province: $("#province").val(),
                        company_firm_name: $("#company_firm_name").val(),
                        position_at_company: $("#position_at_company").val(),
                        biography: $('#biography').summernote('code'),
                        education: $('#education').summernote('code')
                    }
                })
                .done(function(data) {
                    console.log(data);
                    // if(data.is_error==1){ 
                    //     alert_error(data.error);
                    //     return; 
                    // }
                    // window.location = "<?php echo base_url('users/status_verifikasi')."/"; ?>";
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
                $('#biography').summernote({
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
                $('#education').summernote({
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
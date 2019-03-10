
<?php $this->load->view('users/layout/header')?>

            <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
            <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <script>
                var id= <?=$profile->user_id?>;
                
            </script>
            <main class="main-content" id="main-content">

                <section id="services" class="flat-row vc wrap-iconbox">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-2">
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
                                                <!--<li class="form-edukasi-step">
                                                    <a href="#">
                                                        <div class="ips-step">
                                                            <span class="circle">4</span>
                                                        </div>
                                                        <span class="label">Edukasi</span>
                                                    </a>
                                                </li>-->
                                                <li class="form-bidang-step">
                                                    <a href="#">
                                                        <div class="ips-step">
                                                            <span class="circle">4</span>
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
                                                <select class="form-control select-imp" id="gender">
                                                    <option value="<?=$profile->gender?>"><?=get_text_gender($profile->gender)?></option>
                                                    <option value="1">Laki-laki</option>
                                                    <option value="2">Perempuan</option>
                                                    <option value="3">Tidak ingin disebutkan</option>
                                                </select>
                                            </div>

                                            <label class="col-md-12" >Riwayat Pendidikan <span class="text-danger email-error"></span></label>
                                            
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="univ_s1" placeholder="Universitas - S1" value="<?=$profile->univ_s1?>">
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="jur_s1" placeholder="Jurusan" value="<?=$profile->jur_s1?>">
                                            </div>

                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="univ_s2" placeholder="Universitas - S2" value="<?=$profile->univ_s2?>">
                                            </div>

                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="jur_s2" placeholder="Jurusan" value="<?=$profile->jur_s2?>">
                                            </div>

                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="univ_s3" placeholder="Universitas - S3" value="<?=$profile->univ_s3?>">
                                            </div>

                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="jur_s3" placeholder="Jurusan" value="<?=$profile->jur_s3?>">
                                            </div>


                                            <label class="col-md-12" >No Handphone <span class="text-danger email-error"></span></label>

                                            <div class="col-md-12">
                                                <input type="NUMBER" class="form-control" id="hp" placeholder="Masukkan No Handphone" value="<?=$profile->hp?>">
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
                                                <input type="number" id="id_ktp" class="form-control" placeholder="Nomer Identitas" value="<?=$profile->id_ktp?>">
                                            </div>

                                            <div class="col-md-6">
                                                Browse for file ... <input class="file-upload" type="file" id="file_photo_ktp" />

                                                <input type="hidden" id="photo_ktp"  value="<?=$profile->photo_ktp?>">
                                            </div>

                                            <label class="col-md-12" >Kartu Tanda Anggota <span class="text-danger email-error"></span></label>

                                            <div class="col-md-6">
                                                <input type="number" id="id_kta_advokat" class="form-control" placeholder="Nomer Keanggotaan" value="<?=$profile->id_kta_advokat?>">
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

                                            <label class="col-md-12" for="exampleInputEmail1">Area Praktik <span class="text-danger email-error"></span></label>

                                            <div class="col-md-12">
                                                <select class="form-control select-imp" id="province">
                                                            <option value="<?=$profile->province?>">Pilih Provinsi</option>
                                                        <?php foreach ($provinces as $list) { ?>
                                                            <option value="<?= $list->id ?>"><?= $list->name ?></option>
                                                        <?php } ?>
                                                </select>
                                            </div>

                                            <div class="col-md-12 form-group">
                                                <input type="checkbox" name="is_law_firm" id="is_law_firm" onclick="lawfirm()" <?=cek_checked($profile->is_law_firm)?>>    Mewakili kantor hukum.
                                            </div>

                                            <div class="col-md-6">
                                                <input type="text" style="<?php if(!$profile->is_law_firm){?>display:none<?php } ?>" class="form-control" name="company_firm_name" id="company_firm_name"  placeholder="Nama Kantor" value="<?=$profile->company_firm_name?>">
                                            </div>

                                            <div class="col-md-6">
                                                <input type="text" style="<?php if(!$profile->is_law_firm){?>display:none<?php } ?>" class="form-control" name="position_at_company" id="position_at_company" placeholder="Posisi" value="<?=$profile->position_at_company?>">
                                            </div>

                                        </div>
                                        <div class="form-group row form-biografi" style="display:none;">
                                            
                                            <label class="col-md-12 form-group" >Biografi ( Max 150 Characters )</label>
                                            <div class="col-md-12">
                                                <div id="biography" maxlength="150">
                                                <?=$profile->biography?>
                                                </div>

                                            </div>

                                            <label class="col-md-12 form-group" >Upload CV</label>

                                            <div class="col-md-12 form-group">
                                                Browse for file ... <input class="file-upload" type="file" id="file_biography"/>
                                            </div>
                                            <div id="div_advokat_biography">

                                                <?php foreach($biography_list as $list){ ?>
                                                <div class="col-md-12 form-group"  id="file_<?=$list->file?>">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="File" value="file_<?=$list->name?>" disabled>
                                                        <span class="input-group-addon"><a class="glyphicon glyphicon-remove" href="#" onclick="javascript:deletedata('<?=$list->file?>');return false;"></a></span>
                                                    </div>
                                                </div>
                                                <?php } ?>

                                            </div>

                                        </div>
                                        <div class="form-group row form-bidang" style="display:none  ;">
                                            <label class="col-md-12" >Pilih Bidang Keahlian Anda : <span class="text-danger email-error"></span></label>
                                            
                                            <div class="col-md-12">
                                                <?php
                                                //echo var_dump($probono);exit;
                                                foreach($probono as $row)
                                                {
                                                    $check="";
                                                    if($row->user_id){
                                                        $check="checked";
                                                    }
                                                    echo '<input type="checkbox" '.$check.' id="bidang'.$row->id.'" onclick="set_bidang(\''.$row->id.'\')" value="'.$row->id.'"'."&nbsp;&nbsp;".'>     '.$row->bidang_keahlian.'<br>';
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
                    upload_data(ROOT+'upload/do_upload_file2',"#file_photo_ktp","#photo_ktp");
                });


                $("#file_kta_advokat").change(function(){
                    upload_data(ROOT+'upload/do_upload_file2',"#file_kta_advokat","#kta_advokat");
                });

            </script>

            
            <script type="text/javascript">
            $(function(){
                var forms = ["form-biodata", "form-identitas", "form-biografi", "form-bidang"];
                var tmp_i =0;
                $(".submit").click(function(){
                   //submit();
                });
                $("#submitBtn").click(function(){
                    $("#submitend").hide();
                });
                $("#submitend").click(function(){
                    // submit();
                    $('#biodataform').submit();
                    $("#submitend").hide();
                    save("submitend");
                    // window.location = ROOT+'users/status_verifikasi';

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
                setTimeout("autoSave()", <?=TICKER_AUTO_SAVE?>); // Autosaves every minute.
                save();
            }

            function save($button=false){
                var law_firm=0;
                if($('#is_law_firm').is(":checked")){
                    law_firm=1;
                }
                $is_submit=0;
                if($button!=false){
                    $("#submitend").hide();
                    $("#submitend-loader").show();
                    $is_submit=1;
                }
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
                        univ_s1: $("#univ_s1").val(),
                        jur_s1: $("#jur_s1").val(),
                        univ_s2: $("#univ_s2").val(),
                        jur_s2: $("#jur_s2").val(),
                        univ_s3: $("#univ_s3").val(),
                        jur_s3: $("#jur_s3").val(),
                        id_ktp: $("#id_ktp").val(),
                        photo_ktp: $("#photo_ktp").val(),
                        id_kta_advokat: $("#id_kta_advokat").val(),
                        is_law_firm:law_firm,
                        kta_advokat: $("#kta_advokat").val(),
                        alamat_domisili: $("#alamat_domisili").val(),
                        alamat_ktp: $("#alamat_ktp").val(),
                        province: $("#province").val(),
                        company_firm_name: $("#company_firm_name").val(),
                        position_at_company: $("#position_at_company").val(),
                        biography: $('#biography').summernote('code'),
                        is_submit: $is_submit
                    }
                })
                .done(function(data) {
                    console.log(data);
                    if($button != false){
                        $("#submitend").show();
                        $("#submitend-loader").hide();
                        window.location = "<?php echo base_url('users/status_verifikasi')."/"; ?>";
                    }
                })
                .fail(function() {
                    if(tmp){
                        alert_error( "Server tidak merespon. Mohon cek koneksi internet anda.\nServer not responding. Please check your internet connection." );
                        tmp = false;
                    }
                    if($button != false){
                        $("#submitend").show();
                        $("#submitend-loader").hide();
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

                var content_biography;
                $("#biography").on("summernote.change", function (e) {   // callback as jquery custom event 
                    var content = $('#biography').summernote('code');
                    var nohtml = content.replace(/(<([^>]+)>)/ig," "); 
                    // var double = nohtml.replace("  "," "); 
                    var double = $.trim(nohtml);
                    var clean = double.replace(/ +(?= )/g,'');
                    var letters = clean.split(" ").length;
                    if(letters>300){
                        $('#biography').summernote('code', content_biography);
                        alert('Tidak boleh lebih dari 300 kata');
                    } else {
                        content_biography = $('#biography').summernote('code');
                    }
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

                var content_education;
                $("#education").on("summernote.change", function (e) {   // callback as jquery custom event 
                    var content = $('#education').summernote('code');
                    var nohtml = content.replace(/(<([^>]+)>)/ig," "); 
                    // var double = nohtml.replace("  "," "); 
                    var double = $.trim(nohtml);
                    var clean = double.replace(/ +(?= )/g,'');
                    var letters = clean.split(" ").length;
                    if(letters>300){
                        $('#education').summernote('code', content_education);
                        alert('Tidak boleh lebih dari 300 kata');
                    } else {
                        content_education = $('#education').summernote('code');
                    }
                });
            });
            </script>

            <script>
            function do_upload_file($img_address){

                $.ajax({
                    url: ROOT+'users/ajax_daftar',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        img_address: $img_address,
                        user_id:user_id
                    }
                })
                .done(function(data) {
                    // console.log(data);
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

            $("#file_biography").change(function(){
                do_upload_file("#file_biography","advokat_biography");
            });

            $("#file_education").change(function(){
                do_upload_file("#file_education","advokat_education");
            });

            function result_upload(data){
                var html="";
                html=html+'<div class="col-md-12 form-group" id="file_'+data.filename+'">';
                html=html+'    <div class="input-group">';
                html=html+'        <input type="text" class="form-control" placeholder="File" value="'+data.raw_name+'" disabled>';
                html=html+'        <span class="input-group-addon"><a class="glyphicon glyphicon-remove" href="javascript:deletedata(\''+data.filename+'\')"></a></span>';
                html=html+'    </div>';
                html=html+'</div>';
                return html;
            }

            function do_upload_file($name_input,$img_address){
                var myFormData = new FormData();
                myFormData.append('user_id',id);
                myFormData.append('img_address',$img_address);
                myFormData.append('userfile',$($name_input).prop('files')[0]);

                $.ajax({
                    url: ROOT+'upload/do_upload_file',
                    type: 'POST',
                    processData: false, // important
                    contentType: false, // important
                    dataType : 'json',
                    data: myFormData
                }).done(function(data) {
                    if(data.is_error==1){ 
                        alert_error(data.error);
                        return; 
                    }
                    $('#div_'+$img_address).append(result_upload(data));
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
            function deletedata($filename){
                $.ajax({
                        url: ROOT+'upload/delete_file',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        filename: $filename
                    }
                })
                .done(function(data) {
                    // console.log(data);
                    if(data.is_error==1){ 
                        alert_error(data.error);
                        return; 
                    }
                    $(("#file_"+$filename).replace(".", '\\.')).hide();
                })
                .fail(function() {
                    if(tmp){
                        alert_error( "Server tidak merespon. Mohon cek koneksi internet anda.\nServer not responding. Please check your internet connection." );
                        tmp = false;
                    }
                })
                .always(function() {
                    
                });
            }
            </script>



<script>
    
    var set_bidang = function (id){  
        $val=$('#bidang'+id).is(":checked");
        console.log($val);
        var value=0;
        if($val){
            value=1;
        }
        $.ajax({
            url: ROOT+'users/ajax_set_bidang_keahlian',
            type: 'post',
            dataType: 'json',
            data: {
                "value":value,
                "bidang_keahlian":id
            }
        })
        .done(function(data) {
            if(data.is_error==1){ 
                grecaptcha.reset();
                alert_error(data.error_message);
                return; 
            }
            console.log(data);
        })
        .fail(function() {
            if(tmp){
                grecaptcha.reset();
                alert_error( "Server tidak merespon. Mohon cek koneksi internet anda. (Lakukan refresh jika dibutuhkan)\n" );
                tmp = false;
            }
        })
        .always(function() {
            
        }) ;
    }
    </script>

    <!-- Modal Term & Condition-->
    <div class="modal fade" id="modal-term-condition" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title" id="exampleModalLabel">Term & Condition</h5>
                </div>
                    <div class="modal-body" style="padding:20px;">
                        <div id="" style="overflow:scroll; height:300px;">

                            <?php $this->load->view('client/term_and_condition')?>
                        </div>

                        <input type="checkbox" id="is_accepted" value="" onclick="is_accept()">   I accept the Term & Condition<br>

                    </div>

                <div class="modal-footer">
                    <div class="loader-btn" id="submitend-loader"  style="display:none;"> </div>
                    <a href="#" id="submitend" class="btn btn-success success">Confirm</a>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function is_accept() {
            var checkBox = document.getElementById("is_accepted");
            var n_button = document.getElementById("submitend");
            if (checkBox.checked == true){
                n_button.style.display = "block";
            } else {
                n_button.style.display = "none";
            }
        }

    </script>

<?php $this->load->view('landing_page/layout/footer')?>
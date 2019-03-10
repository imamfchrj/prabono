<?php $this->load->view('client/layout/header')?>

<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>

var id=<?=$profile->user_id?>;
var kasus_id=<?php if(isset($kasus->id)){echo $kasus->id;}else{echo 0;}?>;
</script>
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
                                            <span class="label">Judul</span>
                                        </a>
                                    </li>
                                    
                                    <!-- Third Step -->
                                    <li class="form-biografi-step">
                                        <a href="#">
                                            <div class="ips-step">
                                                <span class="circle">3</span>
                                            </div>
                                            <span class="label">Kronologi Masalah</span>
                                        </a>
                                    </li>

                                    <!-- Third Step -->
                                    <li class="form-edukasi-step">
                                        <a href="#">
                                            <div class="ips-step">
                                                <span class="circle">4</span>
                                            </div>
                                            <span class="label">Harapan</span>
                                        </a>
                                    </li>
                                    <li class="form-bidang-step">
                                        <a href="#">
                                            <div class="ips-step">
                                                <span class="circle">5</span>
                                            </div>
                                            <span class="label">Lokasi Kasus</span>
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
                                    <input type="text" class="form-control" placeholder="Nama Depan" id="firstname" value="<?=$profile->firstname?>">
                                </div>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Nama Belakang" id="lastname" value="<?=$profile->lastname?>">
                                </div>

                                <label class="col-md-12" for="exampleInputEmail1">Jenis Kelamin <span class="text-danger email-error"></span></label>

                                <div class="col-md-12" for="exampleInputEmail1">
                                    <select class="form-control select-imp" id="gender" >
                                        <option value="<?=$profile->gender?>">Pilih Jenis Kelamin</option>
                                        <option value="1">Laki-laki</option>
                                        <option value="2">Perempuan</option>
                                        <option value="3">Tidak ingin disebutkan</option>
                                    </select>
                                </div>

                                <label class="col-md-12" >Kartu Identitas (KTP/SIM/Paspor)<span class="text-danger email-error"></span></label>

                                <div class="col-md-6">
                                    <input type="number" id="id_ktp" class="form-control" placeholder="Nomer Identitas" value="<?=$profile->id_ktp?>">
                                </div>

                                <div class="col-md-6">
                                    Browse for file ... <input class="file-upload" type="file" id="file_photo_ktp" />

                                    <input type="hidden" id="photo_ktp"  value="<?=$profile->photo_ktp?>">
                                </div>

                                <label class="col-md-12" for="exampleInputEmail1">Alamat Domisili <span class="text-danger email-error"></span></label>

                                <div class="col-md-12">
                                    <!-- <input type="number" class="form-control" placeholder="Alamat"> -->

                                    <textarea class="form-control" rows="3" id="alamat_domisili"><?=$profile->alamat_domisili?></textarea>
                                </div>

                                <label class="col-md-12" for="exampleInputEmail1">Pekerjaan & Penghasilan <span class="text-danger email-error"></span></label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Pekerjaan" id="pekerjaan" value="<?=$profile->pekerjaan?>">
                                </div>

                                <div class="col-md-6">
                                        <input type="text" class="form-control" id="penghasilan" placeholder="Penghasilan" id="penghasilan" value="<?=$profile->penghasilan?>">
                                </div>

                                <label class="col-md-12" for="exampleInputEmail1">No Handphone <span class="text-danger email-error"></span></label>

                                <div class="col-md-12">
                                    <input type="number" class="form-control" placeholder="Masukkan No Handphone"  id="hp" value="<?=$profile->hp?>">
                                </div>

                                <label class="col-md-12" for="exampleInputEmail1">Email <span class="text-danger email-error"></span></label>

                                <div class="col-md-12">
                                    <input type="email" class="form-control" placeholder="Masukkan Email"  disabled value="<?=get_from_sess("email")?>">
                                </div>

                                <label class="col-md-12" for="exampleInputEmail1">Surat Keterangan Tidak Mampu ( Optional ) <span class="text-danger email-error"></span></label>

                                <div class="col-md-6">
                                    Browse for file ... <input class="file-upload" id="file_surat_tidak_mampu" type="file" />
                                    <br>
                                    <input type="hidden" id="surat_tidak_mampu" value="<?=$profile->surat_tidak_mampu?>">
                                </div>

                            </div>
                            <div class="form-group row form-identitas" style="display:none;">

                                <label class="col-md-12" for="judul">Tulis Judul Masalah Hukum Anda <span class="text-danger email-error"></span></label>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="judul" placeholder="" maxlength="50" value="<?=$kasus->judul?>">
                                </div>

                                <div class="col-md-12">
                                    <b>Notes:</b><br>
                                    <p>Kasus khusus adalah kasus yang terkait masalah sensitif seperti kasus kekerasan anak,perceraian,pelecehan seksual ,keamanan negara dan saksi kunci akan diberikan kerahasian tentang biodata pencari keadilan.</p><br>
                                </div>

                                <label class="col-md-12" for="exampleInputEmail1">Pilih Jenis Kasus <span class="text-danger email-error"></span></label>

                                <div class="col-md-12" for="exampleInputEmail1">
                                    <select class="form-control select-imp" id="is_kusus">
                                        <option value="<?=$kasus->is_kusus?>">Pilih Jenis Kasus</option>
                                        <option value="0">Kasus Umum</option>
                                        <option value="1">Kasus Khusus</option>
                                    </select>
                                </div>

                                <label class="col-md-12 inisial-name" for="initial_name">Masukkan Nama Inisial<span class="text-danger email-error"></span></label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control inisial-name" id="initial_name" value="<?=$kasus->initial_name?>" placeholder="Nama Inisial">
                                </div>
                            </div>
                            <div class="form-group row form-biografi" style="display:none ;">

                                <label class="col-md-12" for="exampleInputEmail1">Ringkasan Penjelasan (Maks. 300 Karakter)<span class="text-danger email-error"></span></label>
                                <div class="col-md-12">
                                    <div id="kronologi_masalah">
                                        <?=$kasus->kronologi_masalah?>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <b>Jelaskan selengkapnya permasalahan hukum anda</b>
                                </div>

                                <hr>
                                <label class="col-md-12" for="exampleInputEmail1">Dokumen <span class="text-danger email-error"></span></label>

                                <div class="col-md-6 form-group">
                                    Browse for file ... <input class="file-upload" type="file" id="kronologi_masalah_file"/>
                                    <br>
                                </div>

                                <div id="div_kronologi_masalah_file">

                                <?php foreach($kronologi_masalah_list as $list){ ?>
                                                <div class="col-md-12 form-group"  id="file_<?=$list->file?>">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="File" value="file_<?=$list->name?>" disabled>
                                                        <span class="input-group-addon"><a class="glyphicon glyphicon-remove" href="#" onclick="javascript:deletedata('<?=$list->file?>');return false;"></a></span>
                                                    </div>
                                                </div>
                                <?php } ?>
                                </div>

                            </div>
                            <div class="form-group row form-edukasi" style="display:none ;">
                                <label class="col-md-12" for="exampleInputEmail1">Harapan Akan Kasus Kedepannya (Maks. 200 Karakter)<span class="text-danger email-error"></span></label>
                                <div class="col-md-12">
                                    <div id="ekspektasi_kasus">
                                        <?=$kasus->ekspektasi_kasus?>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row form-bidang" style="display:none  ;">
                                <label class="col-md-12" for="exampleInputEmail1">Provinsi <span class="text-danger email-error"></span></label>

                                <div class="col-md-12">
                                    <select class="form-control select-imp" id="province">
                                        <option value="0">Pilih provinsi</option>
                                        <?php foreach($provinces as $list){ ?>
                                        <option value="<?=$list->id?>"><?=$list->name?></option>
                                        <?php }?>
                                    </select>
                                </div>
                                <label class="col-md-12" for="exampleInputEmail1">Kota <span class="text-danger email-error"></span></label>

                                <div class="col-md-12">
                                    <select class="form-control select-imp" id="lokasi_kejadian">
                                        <option value="<?=$kasus->lokasi_kejadian?>">Pilih Kota</option>
                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <b>Tambahkan lokasi kejadian</b>
                                    <p>Untuk memudahkan kami menemukan pengacara anda</p>
                                </div>
                            </div>
                            
                        </div>
                        <div class="field clearfix field-btn">

                            <button class="flat-button-back btn-link kembali" style="float:left;display:none;">&nbsp;Kembali</button>
                            <button class="flat-button lanjut" style="float:right;">Lanjut</button>
                            <!--<button class="flat-button btn-success submit" style="float:right;display:none;">Submit</button>-->
                            <button id="submitBtn" data-toggle="modal" data-target="#modal-term-condition" class="flat-button btn-success submit" style="float:right;display:none;">Submit</button>
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
    });
    $("#submitBtn").click(function(){
        $("#submitend").hide();
    });
    $("#submitend").click(function(){
        $('#biodataform').submit();
        $("#submitend").hide();
        
        kasus(1,"submitend");

    });
    function simpan_update(){
        kasus();
    }
    $(".lanjut").click(function(){
        // $(".form-daftar").html("<b>Hello world!</b>");
        if(tmp_i>0){
            simpan_update();
        }
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
        if(tmp_i>0){
            simpan_update();
        }
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
</script>

<script>
tmp=true;

$(document).ready(function() {
                autoSave();
            });
            function autoSave()
            {
                setTimeout("autoSave()", <?=TICKER_AUTO_SAVE?>); // Autosaves every minute.
                update_profile();
            }
var    update_profile  = function (){  
    $.ajax({
        url: ROOT+'clients_ajax/clients_profile',
        type: 'post',
        dataType: 'json',
        data: {
            // csrf_token: ""
            firstname : $("#firstname").val(),
            lastname : $("#lastname").val(),
            gender : $("#gender").val(),
            hp : $("#hp").val(),
            id_ktp : $("#id_ktp").val(),
            photo_ktp : $("#photo_ktp").val(),
            
            alamat_domisili : $("#alamat_domisili").val(),
            pekerjaan : $("#pekerjaan").val(),
            penghasilan : $("#penghasilan").val(),
            surat_tidak_mampu : $("#surat_tidak_mampu").val()
        }
    })
    .done(function(data) {
        if(data.is_error==1){ 
            // alert_error(data.error);
            return; 
        }
        // window.location = "<?php echo base_url('client/kasus_aktif'); ?>";
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

function kasus($is_submit=0,$button=false){
    if($button!=false) {
        $("#submitend").hide();
        $("#submitend-loader").show();
    }
    $.ajax({
        url: ROOT+'clients_ajax/kasus',
        type: 'post',
        dataType: 'json',
        data: {
            id_kasus:kasus_id,
            judul : $("#judul").val(),
            is_kusus : $("#is_kusus").val(),
            initial_name : $("#initial_name").val(),
            lokasi_kejadian : $("#lokasi_kejadian").val(),
            kronologi_masalah :$('#kronologi_masalah').summernote('code'),
            ekspektasi_kasus : $('#ekspektasi_kasus').summernote('code'),
            is_submit : $is_submit,
            //province dan kota
        }
    })
    .done(function(data) {
        if(data.is_error==1){ 
            alert_error(data.error);
            return; 
        }
        kasus_id=data.id_kasus;
        if($is_submit==1){
            window.location = ROOT+'client/kasus_aktif';
        }
    })
    .fail(function() {
        if(tmp){
            alert_error( "Server tidak merespon. Mohon cek koneksi internet anda.\nServer not responding. Please check your internet connection." );
            tmp = false;
        }
        if($button!=false) {
            $("#submitend").show();
            $("#submitend-loader").hide();
        }
    })
    .always(function() {
        
    }) ;
}
</script>
<script>

$("#file_surat_tidak_mampu").change(function(){
    upload_data(ROOT+'upload/do_upload_file2',"#file_surat_tidak_mampu","#surat_tidak_mampu");
});


$("#file_photo_ktp").change(function(){
    upload_data(ROOT+'upload/do_upload_file2',"#file_photo_ktp","#photo_ktp");
});

</script>

<script>
$(document).ready(function() {
    $('#kronologi_masalah').summernote({
        minHeight: 200,
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['fontsize', ['fontsize']],
            ['para', ['ul', 'ol', 'paragraph']]
        ]
    });

    var content;
        $('#judul').on('keyup', function(){
            var letters = $(this).val().split(" ").length;
            $('#judul').text(11-letters+" letters left");
            // limit message
            var letters = $(this).val().split(" ").length;
            if(letters>10){
                $(this).val(content);
                alert('Tidak boleh lebih dari 10 kata');
            } else {
                content = $(this).val();
            }
        });

    var content_kronologi_masalah;
    $("#kronologi_masalah").on("summernote.change", function (e) {   // callback as jquery custom event 
        var content = $('#kronologi_masalah').summernote('code');
        var nohtml = content.replace(/(<([^>]+)>)/ig," "); 
        // var double = nohtml.replace("  "," "); 
        var double = $.trim(nohtml);
        var clean = double.replace(/ +(?= )/g,'');
        var letters = clean.split(" ").length;
        if(letters>300){
            $('#kronologi_masalah').summernote('code', content_kronologi_masalah);
            alert('Tidak boleh lebih dari 300 kata');
        } else {
            content_kronologi_masalah = $('#kronologi_masalah').summernote('code');
        }
    });

    $('#ekspektasi_kasus').summernote({
        minHeight: 200,
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['fontsize', ['fontsize']],
            ['para', ['ul', 'ol', 'paragraph']]
        ]
    });
    var content_ekspektasi_kasus;
    $("#ekspektasi_kasus").on("summernote.change", function (e) {   // callback as jquery custom event 
        var content = $('#ekspektasi_kasus').summernote('code');
        var nohtml = content.replace(/(<([^>]+)>)/ig," "); 
        // var double = nohtml.replace("  "," "); 
        var double = $.trim(nohtml);
        var clean = double.replace(/ +(?= )/g,'');
        var letters = clean.split(" ").length;
        if(letters>250){
            $('#ekspektasi_kasus').summernote('code', content_ekspektasi_kasus);
            alert('Tidak boleh lebih dari 250 kata');
        } else {
            content_ekspektasi_kasus = $('#ekspektasi_kasus').summernote('code');
        }
    });
    // $('#editorEdukasi').summernote({
    //     minHeight: 200,
    //     toolbar: [
    //         // [groupName, [list of button]]
    //         ['style', ['bold', 'italic', 'underline', 'clear']],
    //         ['fontsize', ['fontsize']],
    //         ['para', ['ul', 'ol', 'paragraph']]
    //     ]
    // });

    $("#is_kusus").change(function(){

        $(this).find("option:selected").each(function(){

            var optionValue = $(this).attr("value");

            if(optionValue==1){

                $(".inisial-name").show();

            } else{

                $(".inisial-name").hide();

            }

        });

    }).change();

    $("#province").on("change", function() {
        $.ajax({
            url :  ROOT+'clients/get_by_provinces',
            type : 'POST',
            data : {province:$(this).val()},
            success : function(result) {
                $("#lokasi_kejadian").html(result);
            }
        });
        return false;
    });

});

</script>


<script>

            $("#kronologi_masalah_file").change(function(){
                do_upload_file_client("#kronologi_masalah_file","kronologi_masalah_file");
            });

            function do_upload_file_client($name_input,$img_address){
                var myFormData = new FormData();
                myFormData.append('user_id',id);
                myFormData.append('img_address',$img_address);
                myFormData.append('kasus_id',kasus_id);
                myFormData.append('userfile',$($name_input).prop('files')[0]);
                
                $.ajax({
                    url: ROOT+'upload/client_upload_file',
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


            function deletedata($filename){
                $.ajax({
                        url: ROOT+'upload/delete_file_client',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        filename: $filename
                    }
                })
                .done(function(data) {
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
    $(document).ready(function(){
        var content;
        $('#judul').on('keyup', function(){
            var letters = $(this).val().split(" ").length;
            $('#judul').text(11-letters+" letters left");
            // limit message
            if(letters>10){
                $(this).val(content);
                alert('Tidak boleh lebih dari 10 kata');
            } else {
                content = $(this).val();
            }
        });

        //
        

    });
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
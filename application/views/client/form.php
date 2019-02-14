<?php $this->load->view('client/layout/header')?>

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
                                            <span class="label">Expectation <br>Future Case</span>
                                        </a>
                                    </li>
                                    <li class="form-bidang-step">
                                        <a href="#">
                                            <div class="ips-step">
                                                <span class="circle">5</span>
                                            </div>
                                            <span class="label">Lokasi Kejadian</span>
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
                                    <input type="text" class="form-control" placeholder="Masukkan No Handphone"  id="hp" value="<?=$profile->hp?>">
                                </div>

                                <label class="col-md-12" for="exampleInputEmail1">Email <span class="text-danger email-error"></span></label>

                                <div class="col-md-12">
                                    <input type="email" class="form-control" placeholder="Masukkan Email"  disabled value="<?=get_from_sess("email")?>">
                                </div>

                                <label class="col-md-12" for="exampleInputEmail1">Surat Keterangan Tidak Mampu ( Tidak Wajib ) <span class="text-danger email-error"></span></label>

                                <div class="col-md-6">
                                    Browse for file ... <input class="file-upload" type="file" />
                                    <br>
                                    <input type="hidden" id="surat_tidak_mampu" value="<?=$profile->surat_tidak_mampu?>">
                                </div>

                            </div>
                            <div class="form-group row form-identitas" style="display:none;">

                                <label class="col-md-12" for="exampleInputEmail1">Tulis Judul Masalah Hukum Anda <span class="text-danger email-error"></span></label>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="" maxlength="50">
                                </div>

                                <label class="col-md-12" for="exampleInputEmail1">Pilih Jenis Kasus <span class="text-danger email-error"></span></label>

                                <div class="col-md-12" for="exampleInputEmail1">
                                    <select class="form-control select-imp" id="kasus">
                                        <option value="0">Pilih Jenis Kasus</option>
                                        <option value="1">Kasus Umum</option>
                                        <option value="2">Kasus Khusus</option>
                                    </select>
                                </div>

                                <div class="col-md-12 inisial-name">
                                    <b>Notes:</b><br>
                                    <p>	Terkait masalah kerahasian kasus yang sensitif seperti kasus kekerasan anak,perceraian,pelecehan seksual ,keamanan negara dan saksi kunci akan diberikan kerahasian tentang biodata pencari keadilan.</p><br>
                                </div>

                                <label class="col-md-12 inisial-name" for="exampleInputEmail1">Masukkan Nama Inisial<span class="text-danger email-error"></span></label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control inisial-name" placeholder="Nama Inisial">
                                </div>
                            </div>
                            <div class="form-group row form-biografi" style="display:none ;">

                                <label class="col-md-12" for="exampleInputEmail1">Ringkasan Penjelasan <span class="text-danger email-error"></span></label>
                                <div class="col-md-12">
                                    <div id="jelasMasalahHukum">

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <b>Jelaskan selengkapnya permasalahan hukum anda</b>
                                </div>

                                <hr>

                                <label class="col-md-12" for="exampleInputEmail1">Dokumen <span class="text-danger email-error"></span></label>

                                <div class="col-md-6">
                                    Browse for file ... <input class="file-upload" type="file" />
                                    <br>
                                </div>


                            </div>
                            <div class="form-group row form-edukasi" style="display:none ;">
                                <label class="col-md-12" for="exampleInputEmail1">Ekspektasi Masalah Kedepan nya <span class="text-danger email-error"></span></label>
                                <div class="col-md-12">
                                    <div id="editorexpectation">

                                    </div>
                                </div>

                            </div>
                            <div class="form-group row form-bidang" style="display:none  ;">
                                <label class="col-md-12" for="exampleInputEmail1">Lokasi <span class="text-danger email-error"></span></label>

                                <div class="col-md-12">
                                    

                                    <select class="form-control select-imp" id="province">
                                        <?php foreach($provinces as $list){ ?>
                                        <option value="<?=$list->id?>"><?=$list->name?></option>
                                        <?php }?>
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
                            <button class="flat-button btn-success submit" style="float:right;display:none;">Submit</button>
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
        submit();
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
</script>

<script>
tmp=true;
var submit = function (){  
    $.ajax({
        url: ROOT+'users/ajax_daftar',
        type: 'post',
        dataType: 'json',
        data: {
            // csrf_token: ""
        }
    })
    .done(function(data) {
        if(data.is_error==1){ 
            alert_error(data.error);
            return; 
        }
        window.location = "<?php echo base_url('client/kasus_aktif'); ?>";
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
    $('#jelasMasalahHukum').summernote({
        minHeight: 200,
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['fontsize', ['fontsize']],
            ['para', ['ul', 'ol', 'paragraph']]
        ]
    });
    $('#editorexpectation').summernote({
        minHeight: 200,
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['fontsize', ['fontsize']],
            ['para', ['ul', 'ol', 'paragraph']]
        ]
    });
    $('#editorEdukasi').summernote({
        minHeight: 200,
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['fontsize', ['fontsize']],
            ['para', ['ul', 'ol', 'paragraph']]
        ]
    });

    $("select").change(function(){

        $(this).find("option:selected").each(function(){

            var optionValue = $(this).attr("value");

            if(optionValue==2){

                $(".inisial-name").show();

            } else{

                $(".inisial-name").hide();

            }

        });

    }).change();

});

</script>

<?php $this->load->view('landing_page/layout/footer')?>
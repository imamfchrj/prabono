<?php
$this->load->view('admin/layout/sidebar');
$this->load->view('admin/layout/header');
?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">Form Input Berita</h4>
        </div><!-- d-flex -->
        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <div class="form-layout form-layout-1">
                    <div class="row mg-b-25">
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Kategori: <span class="tx-danger">*</span></label>
                                <select id="id_kategori" class="form-control select2" data-placeholder="Pilih Kategori">
                                    <option value="0">Pilih Kategori</option>
                                    <?php
                                    foreach($kategori as $row)
                                    {
                                        $a = $row->id;
                                        $b = $values->id_kategori;
                                        $c ="";
                                        if ($a==$b){
                                            $c = "selected";
                                        }
                                        echo '<option value="'.$row->id.'"'."$c".'>'.$row->judul_kategori.'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label class="form-control-label">Judul: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" id="judul" name="judul" value="<?php if($values){echo $values->judul;}?>"  placeholder="Enter Judul">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <!--<div class="form-group">
                                <label class="form-control-label">Date: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" id="date" name="date" value="" placeholder="Enter Date">
                            </div>-->
                            <div class="form-group">
                                <label class="form-control-label">Date: <span class="tx-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                                    <input type="text" id="date" name="date" class="form-control fc-datepicker" data-date-format="yyyy-mm-dd"  value="<?php if($values){echo $values->date;}?>" placeholder="MM/DD/YYYY">
                                </div>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Penulis:</label>
                                <input class="form-control" type="text" id="penulis" name="penulis" value="<?php if($values){echo $values->penulis;}?>" placeholder="Enter Penulis">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Tags:<span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" id="tags" name="tags" value="<?php if($values){echo $values->tags;}?>" placeholder="Enter Tags">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Deskripsi: <span class="tx-danger">*</span></label>
                                <textarea id="deskripsi" rows="5" class="form-control" placeholder="Textarea"><?php if($values){echo $values->deskripsi;}?></textarea>
                            </div>
                        </div><!-- col-8 -->
                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <button class="btn btn-info btn-submit-form">Submit Form</button>
                        <button class="btn btn-secondary" id="maintabel">Cancel</button>
                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->

                <!-- ########## END: MAIN PANEL ########## -->

                <script>
                    var id="<?php if($values){echo $values->id;}else{echo '0';}?>";

                    $(".btn-submit-form").click(function(){
                        // alert("The paragraph was clicked.");
                        if(id !=0){
                            update();
                        }else{
                            insert();
                        }
                    });

                    function insert(){
                        var date;
                        date = new Date($('#date').val());
                        date = date.getUTCFullYear() + '-' +
                            ('00' + (date.getUTCMonth()+1)).slice(-2) + '-' +
                            ('00' + (date.getUTCDate()+1)).slice(-2);
                        //console.log(date);
                        //alert (date);
                        $.ajax({
                            url: ROOT+'/admin_api/berita_insert',
                            dataType: 'json',
                            type: 'post',
                            data: {
                                id_kategori: $('#id_kategori').val(),
                                judul: $('#judul').val(),
                                date: date,
                                penulis: $('#penulis').val(),
                                tags: $('#tags').val(),
                                deskripsi: $('#deskripsi').val(),
                            }
                        })
                        .done(function(data) {
                            if(data.is_error){
                                alert(data.error_message);
                                return;
                            }
                            window.location = ROOT+'admin/mst_news';
                        })
                        .always(function(){
                            // $('#buy_button_loading').addClass('d-none');
                            // $('#buy_button').removeClass('d-none');
                        })
                        .error(function(data){

                        });
                    }

                    function update(){
                       // alert('imam');
                        var date;
                        date = new Date($('#date').val());
                        date = date.getUTCFullYear() + '-' +
                            ('00' + (date.getUTCMonth()+1)).slice(-2) + '-' +
                            ('00' + date.getUTCDate()).slice(-2);

                        if($('#judul').val()==""){
                            console.log("Tidak boleh kosong");
                            return;
                        }
                        if(id==0){
                            console.log("Tidak boleh 0");
                            return;
                        }
                        $.ajax({
                            url: ROOT+'/admin_api/berita_update',
                            dataType: 'json',
                            type: 'post',
                            data: {
                                id_kategori: $('#id_kategori').val(),
                                judul: $('#judul').val(),
                                date: date,
                                penulis: $('#penulis').val(),
                                deskripsi: $('#deskripsi').val(),
                                tags: $('#tags').val(),
                                id: id
                            }
                        })
                        //alert ('aaa');
                        .done(function(data) {
                            if(data.is_error){
                                alert(data.error_message);
                                return;
                            }
                            window.location = ROOT+'admin/mst_news';
                        })
                        .always(function(){
                            // $('#buy_button_loading').addClass('d-none');
                            // $('#buy_button').removeClass('d-none');
                        })
                        .error(function(data){
                            }
                        );
                    }

                    // Datepicker
                    $('.fc-datepicker').datepicker({
                        format: 'yyyy-mm-dd',
                        showOtherMonths: true,
                        selectOtherMonths: true
                    });

                    $( "#maintabel" ).click(function() {
                        window.location = ROOT+'admin/mst_news';
                    });
                </script>

<?php
$this->load->view('admin/layout/footer');
?>
<?php
$this->load->view('admin/layout/sidebar');
$this->load->view('admin/layout/header');
?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">Form</h4>
        </div><!-- d-flex -->
        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <div class="form-layout form-layout-1">
                    <div class="row mg-b-25">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label class="form-control-label">Judul: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" id="judul" name="judul" value=""  placeholder="Enter Judul">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Date: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" id="date" name="date" value="" placeholder="Enter Date">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Penulis:<span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" id="penulis" name="penulis" value="" placeholder="Enter Penulis">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Tags:<span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" id="tags" name="tags" value="" placeholder="Enter Tags">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Kategori: <span class="tx-danger">*</span></label>
                                <select class="form-control select2" data-placeholder="Pilih Kategori">
                                    <option label="Pilih Kategori"></option>
                                    <option value="USA">DKI JAKARTA</option>
                                    <option value="UK">Jawa Barat</option>
                                    <option value="China">Jawa Timur</option>
                                </select>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Deskripsi: <span class="tx-danger">*</span></label>
                                <textarea rows="5" class="form-control" placeholder="Textarea"></textarea>
                            </div>
                        </div><!-- col-8 -->
                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <button class="btn btn-info">Submit Form</button>
                        <button class="btn btn-secondary">Cancel</button>
                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->

        <!-- ########## END: MAIN PANEL ########## -->
<?php
$this->load->view('admin/layout/footer');
?>
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
                                <label class="form-control-label">Kategori Berita: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" id="katberita" name="katberita" value=""  placeholder="Enter Kategori Berita">
                            </div>
                        </div><!-- col-4 -->
                    </div>
                    <div class="form-layout-footer">
                        <button class="btn btn-info">Submit Form</button>
                        <button class="btn btn-secondary">Cancel</button>
                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->

                <!-- ########## END: MAIN PANEL ########## -->
<?php
$this->load->view('admin/layout/footer');
?>
<?php
    $this->load->view('admin/layout/sidebar');
    $this->load->view('admin/layout/header');
?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
  <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
    <h4 class="tx-gray-800 mg-b-5">Edit Users</h4>
  </div>
    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <div class="form-layout form-layout-1">
                <div class="row mg-b-25">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Username: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="username" value="imam.fchrj@gmail.com" disabled>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Firstname: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="firstname" value="Imam" placeholder="Enter firstname">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Lastname:<span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="lastname" value="Fachrurroji" placeholder="Enter lastname">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-8">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Alias: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="alias" value="IF" placeholder="Enter alias">
                        </div>
                    </div><!-- col-8 -->
                    <div class="col-lg-4">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Lokasi Provinsi: <span class="tx-danger">*</span></label>
                            <select class="form-control select2" data-placeholder="Choose provinsi">
                                <option label="Choose provinsi"></option>
                                <option value="USA">DKI JAKARTA</option>
                                <option value="UK">Jawa Barat</option>
                                <option value="China">Jawa Timur</option>
                            </select>
                        </div>
                    </div><!-- col-4 -->
                </div><!-- row -->

                <div class="form-layout-footer">
                    <button class="btn btn-info">Submit Form</button>
                    <button class="btn btn-secondary">Cancel</button>
                </div><!-- form-layout-footer -->
            </div><!-- form-layout -->

<?php
    $this->load->view('admin/layout/footer');
?>
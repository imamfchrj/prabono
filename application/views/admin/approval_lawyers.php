<?php
    $this->load->view('admin/layout/sidebar');
    $this->load->view('admin/layout/header');
?>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="pd-30">
            <h4 class="tx-gray-800 mg-b-5">Lawyers Management - Approval Menu</h4>
        </div><!-- d-flex -->
        <div class="br-approve-lawyers-body">
            <div class= "row">
                <div class="br-lawyers-body rounded-10">
                    <div class="br-lawyers-header d-flex justify-content-between">
                        <div class="media align-items-center">
                            <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                            <div class="media-body mg-l-10">
                                <p class="tx-inverse tx-medium mg-b-0">Johny As</p>
                                <p class="tx-12 mg-b-0">
                                <span>Aug 18, 2018 10:01am</span>
                                </p>
                            </div><!-- media-body -->
                        </div><!-- media -->
                        <nav class="nav nav-inline tx-size-24 mg-b-0 lh-0">
                            <a href="" class="nav-link tx-gray-light hover-inverse pd-x-5"><i class="icon ion-printer"></i></a>
                            <a id="closeMail" href="" class="nav-link pd-x-5 mg-l-15 hidden-xl-up">
                            <i class="icon ion-close"></i>
                            </a>
                        </nav>
                    </div><!-- br-lawyers-header -->
                    <p>Hi Isidore,</p>

                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>

                    <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                    <a href=""><p class="tx-purple tx-bold">Read More >></p></a>
                    <div class="form-layout-footer-imam">
                    <button class="btn btn-info">Approve</button>
                    <button class="btn btn-secondary">Reject</button>
                    </div><!-- form-layout-footer -->
                </div><!-- br-lawyers-body rounded-10 -->
            </div><!-- row -->

            <div class="row">
                <div class="br-lawyers-body rounded-10">
                    <div class="br-lawyers-header d-flex justify-content-between">
                        <div class="media align-items-center">
                            <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                            <div class="media-body mg-l-10">
                                <p class="tx-inverse tx-medium mg-b-0">Louise Kate Lumaad</p>
                                <p class="tx-12 mg-b-0">
                                <span>Sep 20, 2017 8:45am</span>
                                </p>
                            </div><!-- media-body -->
                        </div><!-- media -->
                        <nav class="nav nav-inline tx-size-24 mg-b-0 lh-0">
                            <a href="" class="nav-link tx-gray-light hover-inverse pd-x-5"><i class="icon ion-printer"></i></a>
                            <a id="closeMail" href="" class="nav-link pd-x-5 mg-l-15 hidden-xl-up">
                            <i class="icon ion-close"></i>
                            </a>
                        </nav>
                    </div><!-- br-lawyers-header -->
                    <p>Hi Isidore,</p>

                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>

                    <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                    <a href=""><p class="tx-purple tx-bold">Read More >></p></a>
                    <div class="form-layout-footer-imam">
                        <button class="btn btn-info">Approve</button>
                        <button class="btn btn-secondary">Reject</button>
                    </div><!-- form-layout-footer -->
                </div><!-- br-lawyers-body -->
            </div><!-- row -->
        </div><!-- br-approve-lawyers-body -->
<?php
    $this->load->view('admin/layout/footer');
?>
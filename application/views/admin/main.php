<?php
$this->load->view('admin/layout/sidebar');
$this->load->view('admin/layout/header');
?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
    <div class="pd-30">
        <h4 class="tx-gray-800 mg-b-5">DASHBOARD</h4>
        <p class="mg-b-0">Statistic Overview</p>
    </div><!-- d-flex -->

    <div class="br-pagebody mg-t-5 pd-x-30">
        <!-- start you own content here -->
        <div class="row row-sm">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-teal rounded overflow-hidden">
                    <div class="pd-25 d-flex align-items-center">
                        <i class="ion ion-ios-people tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Client</p>
                            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1"><?php echo count($client); ?></p>
                            <!--<span class="tx-11 tx-roboto tx-white-6">24% higher yesterday</span>-->
                        </div>
                    </div>
                </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
                <div class="bg-danger rounded overflow-hidden">
                    <div class="pd-25 d-flex align-items-center">
                        <i class="ion ion-man tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Advokat</p>
                            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1"><?php echo count($advokat); ?></p>
                            <!--<span class="tx-11 tx-roboto tx-white-6">$390,212 before tax</span>-->
                        </div>
                    </div>
                </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                <div class="bg-primary rounded overflow-hidden">
                    <div class="pd-25 d-flex align-items-center">
                        <i class="ion ion-monitor tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Kasus Open</p>
                            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1"><?php echo count($k_open); ?></p>
                            <!--<span class="tx-11 tx-roboto tx-white-6">23% average duration</span>-->
                        </div>
                    </div>
                </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                <div class="bg-br-primary rounded overflow-hidden">
                    <div class="pd-25 d-flex align-items-center">
                        <i class="ion ion-android-done-all tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Kasus Aktif</p>
                            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1"><?php echo count($k_aktif); ?></p>
                            <!--<span class="tx-11 tx-roboto tx-white-6">65.45% on average time</span>-->
                        </div>
                    </div>
                </div>
            </div><!-- col-3 -->
        </div><!-- row -->
        <?php
        $data=array();
        foreach ($client_gender as $key => $row) {
            $data[]=array(
                'label' => $row->client_gender,
                'value' => $row->no_of_gender
            );
        }
        $data=json_encode($data);
        //var_dump($advokat_gender);
        $data_advokat=array();
        foreach ($advokat_gender as $key => $row) {
            $data_advokat[]=array(
                'label' => $row->advokat_gender,
                'value' => $row->no_of_gender
            );
        }
        $data_advokat=json_encode($data_advokat);
        ?>
        <div class="row row-sm mg-t-20">
            <div class="col-6">
                <div class="card pd-0 bd-0 shadow-base">
                    <div class="pd-x-30 pd-t-30 pd-b-15">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Client By Gender</h6>
                                <p class="mg-b-0">Duis autem vel eum iriure dolor in hendrerit in vulputate...</p>
                            </div>
                            <div class="tx-13">
                                <p class="mg-b-0"><span class="square-10 rounded-circle bg-pria mg-r-10"></span> Laki-Laki</p>
                                <p class="mg-b-0"><span class="square-10 rounded-circle bg-wanita mg-r-10"></span> Perempuan</p>
                                <p class="mg-b-0"><span class="square-10 rounded-circle bg-noop mg-r-10"></span> Tidak ingin disebutkan</p>
                            </div>
                        </div><!-- d-flex -->
                    </div>
                    <div class="pd-x-15 pd-b-15">
                        <div id="morrisDonut1" class="ht-200 ht-sm-300"></div>
                    </div>
                </div><!-- card -->
            </div>
            <div class="col-6">
                <div class="card pd-0 bd-0 shadow-base">
                    <div class="pd-x-30 pd-t-30 pd-b-15">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Advokat By Gender</h6>
                                <p class="mg-b-0">Duis autem vel eum iriure dolor in hendrerit in vulputate...</p>
                            </div>
                            <div class="tx-13">
                                <p class="mg-b-0"><span class="square-10 rounded-circle bg-pria mg-r-10"></span> Laki-Laki</p>
                                <p class="mg-b-0"><span class="square-10 rounded-circle bg-wanita mg-r-10"></span> Perempuan</p>
                                <p class="mg-b-0"><span class="square-10 rounded-circle bg-noop mg-r-10"></span> Tidak ingin disebutkan</p>
                            </div>
                        </div><!-- d-flex -->
                    </div>
                    <div class="row tx-center">
                        <div class="pd-x-15 pd-b-15">
                            <div id="morrisDonut2" class="ht-200 ht-sm-300"></div>
                        </div><!-- col-6 -->
                    </div><!-- row -->
                </div><!-- card -->
            </div>
        </div>
    </div><!-- br-pagebody -->
</div>
<!-- ########## END: MAIN PANEL ########## -->
<script>
$(document).ready(function(){
    var donut_chart= new Morris.Donut({
    element: 'morrisDonut1',
    data: <?php echo $data; ?>,
    colors: ['#3D449C','#268FB2','#74DE00'],
    resize: true
    });

    var donut_chart2= new Morris.Donut({
        element: 'morrisDonut2',
        data: <?php echo $data_advokat; ?>,
        colors: ['#3D449C','#268FB2','#74DE00'],
        resize: true
    });
});
</script>
<?php
$this->load->view('admin/layout/footer');
?>

<?php
$this->load->view('admin/layout/sidebar');
$this->load->view('admin/layout/header');
?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5"><?php echo $kasus->judul; ?></h4>
    </div><!-- d-flex -->
    <div class="br-pagebody">
    <div class="br-section-wrapper">
    <div class="form-layout form-layout-1">
        <div class="row mg-b-25">
            <div class="col-lg-12">
                <div class="bd rounded table-responsive">
                    <table id="tableProfile" class="table table-bordered mg-b-0">
                        <thead>
                        <tr>
                            <th class="wd-5p">No</th>
                            <th class="wd-25p">Agenda</th>
                            <th class="wd-40p">Deskripsi</th>
                            <th class="wd-15p">Mulai</th>
                            <th class="wd-15p">Selesai</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if($values) {
                            $no = 1;
                            foreach ($values as $key => $row) {
                                ?>
                                <tr>
                                    <th class="wd-5p"><?php echo $no++; ?></th>
                                    <td class="wd-25p"><?php echo !empty($row->title) ? $row->title : ""; ?></td>
                                    <td class="wd-40p"><?php echo !empty($row->description) ? $row->description : ""; ?></td>
                                    <td class="wd-15p"><?php echo !empty($row->fromdate) ? $row->fromdate : ""; ?></td>
                                    <td class="wd-15p"><?php echo !empty($row->todate) ? $row->todate : ""; ?></td>
                                </tr>
                                <?php
                            }
                        }else{
                        ?>
                            <tr>
                                <th class="wd-100p text-center" colspan="5"><?php echo "No Data"; ?></th>
                            </tr>
                        <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div><!-- bd-0 -->
            </div><!-- col-4 -->
        </div>
    </div><!-- form-layout -->
    </div>

    <!-- ########## END: MAIN PANEL ########## -->

    <script>


    </script>
<?php
$this->load->view('admin/layout/footer');
?>
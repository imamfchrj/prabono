<?php
    $this->load->view('admin/layout/sidebar');
    $this->load->view('admin/layout/header');
?>
<link href="<?=base_url()?>assets_123/lib/datatables/jquery.dataTables.css" rel="stylesheet"> <!-- table -->
<link href="<?=base_url()?>assets_123/lib/select2/css/select2.min.css" rel="stylesheet"> <!-- select2 -->

<script src="<?=base_url()?>assets_123/lib/datatables/jquery.dataTables.js"></script> 
<script src="<?=base_url()?>assets_123/lib/datatables-responsive/dataTables.responsive.js"></script>
<script src="<?=base_url()?>assets_123/lib/select2/js/select2.min.js"></script>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">Master - Berita</h4>
        </div><!-- d-flex -->
        <div class="br-pagebody">
        <div class="br-section-wrapper">
            <div class="table-wrapper">
                <table id="tableBerita" class="table display responsive table-bordered table-colored table-dark">
                <thead>
                    <tr>
                    <th class="wd-5p">ID</th>
                    <th class="wd-65p ">Berita</th>
                    <th class="wd-30p">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Berita Update 1</td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="" title="Edit" onclick=""><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                            <a class="btn btn-sm btn-danger" href="" title="Hapus" onclick=""><i class="glyphicon glyphicon-trash"></i> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Berita Update 2</td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="" title="Edit" onclick=""><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                            <a class="btn btn-sm btn-danger" href="" title="Hapus" onclick=""><i class="glyphicon glyphicon-trash"></i> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Berita Update 3</td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="" title="Edit" onclick=""><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                            <a class="btn btn-sm btn-danger" href="" title="Hapus" onclick=""><i class="glyphicon glyphicon-trash"></i> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Berita Update 4</td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="" title="Edit" onclick=""><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                            <a class="btn btn-sm btn-danger" href="" title="Hapus" onclick=""><i class="glyphicon glyphicon-trash"></i> Delete</a>
                        </td>
                    </tr>
                </tbody>
                </table>
            </div><!-- table-wrapper -->
        </div><!-- br-section-wrapper -->
    </div><!-- br-pagebody -->
    <script>
$(function(){
    'use strict';

    $('#tableBerita').DataTable({
        responsive: true,
        language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '_MENU_ items/page',
        }
    });

    // Select2
    $('.dataTables_length select').select2({
        minimumResultsForSearch: Infinity 
    });

});
</script>
<?php
    $this->load->view('admin/layout/footer');
?>
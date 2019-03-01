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
        <h4 class="tx-gray-800 mg-b-5">Tracking Agenda</h4>
    </div><!-- d-flex -->
    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <div class="table-wrapper">
                <table id="tableStatus" class="table display responsive table-bordered table-colored table-dark">
                <thead>
                    <tr>
                    <th class="wd-5p">No</th>
                    <th class="wd-20p ">Agenda</th>
                    <th class="wd-20p">Judul Kasus</th>
                    <th class="wd-15p">Nama Client</th>
                    <th class="wd-10p">No Client</th>
                    <th class="wd-15p">Nama Advokat</th>
                    <th class="wd-10p">No Advokat</th>
                    <th class="wd-5p">Days</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
                </table>
            </div><!-- table-wrapper -->
        </div><!-- br-section-wrapper -->
    </div><!-- br-pagebody -->
<script>
$(function(){
    'use strict';

    $('#tableStatus').DataTable({
        responsive: true,
        language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
        },
        ajax:{
            "url": ROOT+"/admin_api/tracking_agenda_get",
            "dataSrc": function ( json ) {
                var data=[];
                var no=1;
                for ( var i=0, ien=json.data.length ; i<ien ; i++ ) {
                    var value=[];
                    value[0] = no++;
                    value[1] = json.data[i]['title'];
                    value[2] = json.data[i]['judul_kasus'];
                    value[3] = json.data[i]['user_name']+' '+json.data[i]['user_lastname'];
                    value[4] = json.data[i]['hp_user'];
                    value[5] = json.data[i]['advokat_name']+' '+json.data[i]['advokat_lastname'];
                    value[6] = json.data[i]['hp_advokat'];
                    value[7] = json.data[i]['advokat_id'];
                    data[i]=value;
                }
                console.log(data);
                return data;
            }
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
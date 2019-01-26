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
            <h4 class="tx-gray-800 mg-b-5">Master - Kategori</h4>
        </div><!-- d-flex -->
        <div class="br-pagebody">
        <div class="br-section-wrapper">
            <div>
                <a class="btn btn-sm btn-success" href="mst_category_form"><i class="glyphicon glyphicon-pencil"></i> + Add </a>
            </div>
            <br>
            <div class="table-wrapper">
                <table id="tableKategori" class="table display responsive table-bordered table-colored table-dark">
                <thead>
                    <tr>
                    <th class="wd-5p">ID</th>
                    <th class="wd-65p ">Kategori Name</th>
                    <th class="wd-30p">Action</th>
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

        $('#tableKategori').DataTable({
            responsive: true,
            language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
            },

            ajax:{
                "url": ROOT+"/admin_api/probono_get",
                "dataSrc": function ( json ) {
                    var data=[];
                    var no=1;
                    for ( var i=0, ien=json.data.length ; i<ien ; i++ ) {
                        var value=[];
                        value[0] = no++;
                        value[1] = json.data[i]['bidang_keahlian'];
                        value[2] = '<a class="btn btn-sm btn-primary" href="mst_category_form/'+json.data[i]['id']+'" title="Edit" onclick=""><i class="glyphicon glyphicon-pencil"></i> Edit</a>';
                        value[2] += '&nbsp;<a class="btn btn-sm btn-danger" href="" title="Hapus" onclick="delete_probono('+json.data[i]['id']+')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
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

    function delete_probono(id) {
        if (confirm('Are you sure to delete..?')) {
            //alert(id);
            $.ajax({
                url: ROOT+'admin_api/probono_delete/',
                dataType: 'json',
                type: 'post',
                data: {
                    id: id
                },
                success: function(response) {
                    window.location = ROOT+'admin/mst_category';
                }
            })
        }
    }
</script>
<?php
    $this->load->view('admin/layout/footer');
?>
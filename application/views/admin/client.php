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
    <h4 class="tx-gray-800 mg-b-5">Client Management</h4>
  </div>
  <div class="br-pagebody">
    <div class="br-section-wrapper">
      <div class="table-wrapper">
        <table id="tableClient" class="table display responsive table-bordered table-colored table-dark">
          <thead>
            <tr>
              <th class="wd-5p">No</th>
              <th class="wd-25p">Nama</th>
<!--              <th class="wd-15p">Alias</th>-->
              <th class="wd-20p">Email</th>
              <th class="wd-20p">Number Phone</th>
              <th class="wd-15p">Action</th>
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

        $('#tableClient').DataTable({
            responsive: true,
            language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
            },
            ajax:{
                "url": ROOT+"admin_api/client_get",
                "dataSrc": function ( json ) {
                    var data=[];
                    var no=1;
                    for ( var i=0, ien=json.data.length ; i<ien ; i++ ) {
                        var value=[];
                        value[0] = no++;
                        value[1] = json.data[i]['firstname']+' '+json.data[i]['lastname'];
                        //value[2] = json.data[i]['nama_samaran'];
                        value[2] = json.data[i]['email'];
                        value[3] = json.data[i]['hp'];
                        value[4] = '<a class="btn btn-sm btn-primary" href="act_client_profil/'+json.data[i]['id']+'" title="Profile" onclick=""><i class="glyphicon glyphicon-pencil"></i> Profile</a>';
                        //value[4] += '&nbsp;<a class="btn btn-sm btn-danger" href="" title="Block" onclick=""><i class="glyphicon glyphicon-trash"></i> Block</a>';
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
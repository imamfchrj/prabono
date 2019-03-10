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
    <h4 class="tx-gray-800 mg-b-5">Admin Management</h4>
  </div>
  <div class="br-pagebody">
    <div class="br-section-wrapper">
    <div>
        <a class="btn btn-sm btn-success" href="form_user"><i class="glyphicon glyphicon-pencil"></i> + Add </a>
    </div>
    <br>
      <div class="table-wrapper">
        <table id="tableAdmin" class="table display responsive table-bordered table-colored table-dark">
          <thead>
            <tr>
              <th class="wd-5p">No</th>
              <th class="wd-50p">Username</th>
              <th class="wd-30p">Status</th>
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

        $('#tableAdmin').DataTable({
            responsive: true,
            language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
            },
            ajax:{
                "url": ROOT+"admin_api/admin_users_get",
                "dataSrc": function ( json ) {
                    var data=[];
                    var no=1;
                    for ( var i=0, ien=json.data.length ; i<ien ; i++ ) {
                        var value=[];
                        value[0] = no++;
                        value[1] = json.data[i]['username'];
                        value[2] = json.data[i]['status_admin'];
                        value[3] = '<a class="btn btn-sm btn-primary" href="form_user/'+json.data[i]['id']+'" title="Edit" onclick=""><i class="glyphicon glyphicon-pencil"></i> Edit</a>';
                        value[3] += '&nbsp;<a class="btn btn-sm btn-danger" href="" title="Hapus" onclick="delete_jasa('+json.data[i]['id']+')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';data[i]=value;
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
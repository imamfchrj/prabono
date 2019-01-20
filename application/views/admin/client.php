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
    <h4 class="tx-gray-800 mg-b-5">Users Management</h4>
  </div>
  <div class="br-pagebody">
    <div class="br-section-wrapper">
      <div class="table-wrapper">
        <table id="tableClient" class="table display responsive table-bordered table-colored table-dark">
          <thead>
            <tr>
              <th class="wd-5p">No</th>
              <th class="wd-20p">Username</th>
              <th class="wd-15p">First Name</th>
              <th class="wd-5p">Alias</th>
              <th class="wd-25p">NIK</th>
              <th class="wd-15p">No HP</th>
              <th class="wd-15p">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>imam.fchrj@gmail.com</td>
              <td>Imam</td>
              <td>IF</td>
              <td>1234567890123456</td>
              <td>087812345678</td>
              <td>
                <a class="btn btn-sm btn-primary" href="<?=base_url()?>admin/form_user" title="Edit" ><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                <a class="btn btn-sm btn-danger" href="" title="Hapus" onclick=""><i class="glyphicon glyphicon-trash"></i> Delete</a>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Garrett</td>
              <td>Winters</td>
              <td>Accountant</td>
              <td>2011/07/25</td>
              <td>$170,750</td>
              <td>
                <a class="btn btn-sm btn-primary" href="" title="Edit" onclick=""><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                <a class="btn btn-sm btn-danger" href="" title="Hapus" onclick=""><i class="glyphicon glyphicon-trash"></i> Delete</a>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Ashton</td>
              <td>Cox</td>
              <td>Junior Technical Author</td>
              <td>2009/01/12</td>
              <td>$86,000</td>
              <td>
                <a class="btn btn-sm btn-primary" href="" title="Edit" onclick=""><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                <a class="btn btn-sm btn-danger" href="" title="Hapus" onclick=""><i class="glyphicon glyphicon-trash"></i> Delete</a>
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td>Cedric</td>
              <td>Kelly</td>
              <td>Senior Javascript Developer</td>
              <td>2012/03/29</td>
              <td>$433,060</td>
              <td>
                <a class="btn btn-sm btn-primary" href="" title="Edit" onclick=""><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                <a class="btn btn-sm btn-danger" href="" title="Hapus" onclick=""><i class="glyphicon glyphicon-trash"></i> Delete</a>
              </td>
            </tr>
            <tr>
              <td>5</td>
              <td>Airi</td>
              <td>Satou</td>
              <td>Accountant</td>
              <td>2008/11/28</td>
              <td>$162,700</td>
              <td>
                <a class="btn btn-sm btn-primary" href="" title="Edit" onclick=""><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                <a class="btn btn-sm btn-danger" href="" title="Hapus" onclick=""><i class="glyphicon glyphicon-trash"></i> Delete</a>
              </td>
            </tr>
            <tr>
              <td>6</td>
              <td>Brielle</td>
              <td>Williamson</td>
              <td>Integration Specialist</td>
              <td>2012/12/02</td>
              <td>$372,000</td>
              <td>
                <a class="btn btn-sm btn-primary" href="" title="Edit" onclick=""><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                <a class="btn btn-sm btn-danger" href="" title="Hapus" onclick=""><i class="glyphicon glyphicon-trash"></i> Delete</a>
              </td>
            </tr>
            <tr>
              <td>7</td>
              <td>Herrod</td>
              <td>Chandler</td>
              <td>Sales Assistant</td>
              <td>2012/08/06</td>
              <td>$137,500</td>
              <td>
                <a class="btn btn-sm btn-primary" href="" title="Edit" onclick=""><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                <a class="btn btn-sm btn-danger" href="" title="Hapus" onclick=""><i class="glyphicon glyphicon-trash"></i> Delete</a>
              </td>
            </tr>
            <tr>
              <td>8</td>
              <td>Rhona</td>
              <td>Davidson</td>
              <td>Integration Specialist</td>
              <td>2010/10/14</td>
              <td>$327,900</td>
              <td>
                <a class="btn btn-sm btn-primary" href="" title="Edit" onclick=""><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                <a class="btn btn-sm btn-danger" href="" title="Hapus" onclick=""><i class="glyphicon glyphicon-trash"></i> Delete</a>
              </td>
            </tr>
            <tr>
              <td>9</td>
              <td>Colleen</td>
              <td>Hurst</td>
              <td>Javascript Developer</td>
              <td>2009/09/15</td>
              <td>$205,500</td>
              <td>
                <a class="btn btn-sm btn-primary" href="" title="Edit" onclick=""><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                <a class="btn btn-sm btn-danger" href="" title="Hapus" onclick=""><i class="glyphicon glyphicon-trash"></i> Delete</a>
              </td>
            </tr>
            <tr>
              <td>10</td>
              <td>Sonya</td>
              <td>Frost</td>
              <td>Software Engineer</td>
              <td>2008/12/13</td>
              <td>$103,600</td>
              <td>
                <a class="btn btn-sm btn-primary" href="" title="Edit" onclick=""><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                <a class="btn btn-sm btn-danger" href="" title="Hapus" onclick=""><i class="glyphicon glyphicon-trash"></i> Delete</a>
              </td>
            </tr>
            <tr>
              <td>11</td>
              <td>Jena</td>
              <td>Gaines</td>
              <td>Office Manager</td>
              <td>2008/12/19</td>
              <td>$90,560</td>
              <td>
                <a class="btn btn-sm btn-primary" href="" title="Edit" onclick=""><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                <a class="btn btn-sm btn-danger" href="" title="Hapus" onclick=""><i class="glyphicon glyphicon-trash"></i> Delete</a>
              </td>
            </tr>
            <tr>
              <td>12</td>
              <td>Quinn</td>
              <td>Flynn</td>
              <td>Support Lead</td>
              <td>2013/03/03</td>
              <td>$342,000</td>
              <td>
                <a class="btn btn-sm btn-primary" href="" title="Edit" onclick=""><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                <a class="btn btn-sm btn-danger" href="" title="Hapus" onclick=""><i class="glyphicon glyphicon-trash"></i> Delete</a>
              </td>
            </tr>
            <tr>
              <td>13</td>
              <td>Charde</td>
              <td>Marshall</td>
              <td>Regional Director</td>
              <td>2008/10/16</td>
              <td>$470,600</td>
              <td>
                <a class="btn btn-sm btn-primary" href="" title="Edit" onclick=""><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                <a class="btn btn-sm btn-danger" href="" title="Hapus" onclick=""><i class="glyphicon glyphicon-trash"></i> Delete</a>
              </td>
            </tr>
            <tr>
              <td>14</td>
              <td>Haley</td>
              <td>Kennedy</td>
              <td>Senior Marketing Designer</td>
              <td>2012/12/18</td>
              <td>$313,500</td>
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
    function edit_user()
    {
        // alert('test');exit;
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string
        $('#modal_form').modal('show'); // show bootstrap modal
        $('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }
    $(function(){
        'use strict';

        $('#tableClient').DataTable({
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
<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Person Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/>
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Username</label>
                            <div class="col-md-9">
                                <input name="username" placeholder="Username" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Attribute</label>
                            <div class="col-md-9">
                                <input name="attribute" placeholder="Attribute" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Value</label>
                            <div class="col-md-9">
                                <input name="value" placeholder="Value" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">NIK</label>
                            <div class="col-md-9">
                                <textarea name="NIK" placeholder="NIK" class="form-control"></textarea>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama Perangkat</label>
                            <div class="col-md-9">
                                <textarea name="nama_perangkat" placeholder="Nama Perangkat" class="form-control"></textarea>
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php
    $this->load->view('admin/layout/footer');
?>
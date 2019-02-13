var alert_error = function(text){
	var alert_html = '<div  class="modal fade in modal-alert-success" id="modal_alert" tabindex="-1" role="dialog">\
            <div class="modal-dialog modal-sm">\
              <div class="modal-content">\
				  	<div class="card card-danger-alt border border-danger">\
                      <div class="modal-header">\
                          <h5 class="card-title">Error</h5>\
                      </div>\
                <div class="modal-body">\
                <div class="field clearfix ">'+text+' </div>\
                </div>\
                <div class="modal-footer">\
							<button class="btn btn-danger float-right" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>\
						</div>\
					  </div>\
					</div>\
              </div>\
            </div>\
        </div>';
	$(alert_html).modal('show');
}
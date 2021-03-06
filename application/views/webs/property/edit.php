<!-- start: MAIN CONTAINER -->
			<div class="main-container inner">
				<!-- start: PAGE -->
				<div class="main-content">
					<!-- start: PANEL CONFIGURATION MODAL FORM -->
					<div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										&times;
									</button>
									<h4 class="modal-title">Panel Configuration</h4>
								</div>
								<div class="modal-body">
									Here will be a configuration form
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">
										Close
									</button>
									<button type="button" class="btn btn-primary">
										Save changes
									</button>
								</div>
							</div>
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
					</div>
					<!-- /.modal -->
					<!-- end: SPANEL CONFIGURATION MODAL FORM -->
					<div class="container">
						<!-- start: PAGE HEADER -->
						<!-- start: TOOLBAR -->
						<div class="toolbar row">
							<div class="col-sm-6 hidden-xs">
								<div class="page-header">
									<h1>Edit Property <small>Amended information of property selected</small></h1>
								</div>
							</div>
							 
						</div>
						<!-- end: TOOLBAR -->
						<!-- end: PAGE HEADER -->
						<!-- start: BREADCRUMB -->
						<div class="row">
							<div class="col-md-12">
								<ol class="breadcrumb">
									<li>
										<a href="<?= $this->config->item('domain').'/'.$this->name ?>/index">
											Manage Property
										</a>
									</li>
									<li class="active">
										Edit  <?= $result['data']['name'] ?>
									</li>
								</ol>
							</div>
						</div>
						<!-- end: BREADCRUMB -->
						<!-- start: PAGE CONTENT -->
						<div class="row">
							<div class="col-sm-12">
								<form>
								<div class="panel panel-white">
									<div class="panel-heading">
										<h4 class="panel-title"> <span class="text-bold">Edit Property Information for <?= $result['data']['name'] ?></span></h4>
									
									</div>
									<div class="panel-body">
										<?= form_hidden('edit',1) ?>
										<?= form_hidden('p_id',$result['data']['p_id'] ) ?>
										<?= form_hidden('name',$result['data']['name'] ) ?>
										<?= form_hidden('email',$result['data']['email'] ) ?>
                                        <?= form_hidden('contact_person',$result['data']['contact_person']  ) ?>
										<?= form_hidden('contact_no',$result['data']['contact_no']  ) ?>
										<?= form_hidden('fax_no',$result['data']['fax_no']  ) ?>
										<?= form_hidden('developer_name',$result['data']['developer_name']  ) ?>
										<?= form_hidden('address',$result['data']['address']   ) ?>
										<?= form_hidden('facility_book',$result['data']['facility_book']   ) ?>
										<?= form_hidden('maintenance_fee',$result['data']['maintenance_fee']   ) ?>
										<?= form_hidden('sinking_fee',$result['data']['sinking_fee']   ) ?>
										<table id="user" class="table table-bordered table-striped">
											<tbody>
												<tr>
													<td class="column-left">Property Logo</td>
													<td class="column-right">
													<?php  
												 
													if(!empty($result['data']['img_id'])) { ?>
														<img src="<?= $result['data']['logo'] ?>" />
														<br/>
														<button data-style="expand-right" data-size="xs" class="ladda-button" data-color="red" onClick="return confirmDeleteLogo('<?= $result['data']['img_id'] ?>')">
															Delete
														</button>
													<?php }else{ ?>
														<form>
															<div id="queue"></div>
															<input id="file_upload" name="file_upload" type="file" multiple="false">
														</form>
													<?php } ?>
												 	
												 	</td>
												</tr>
												<tr>
													<td class="column-left">Property Name</td>
													<td class="column-right">
													<a href="#" id="property_name" data-type="text" data-pk="1" data-placeholder="Required" data-original-title="Property Name" >
														<?= $result['data']['name'] ?>
													</a></td>
												</tr>
												<tr>
													<td>Email Address</td>
													<td><a href="#" id="email" data-type="text" data-pk="1" data-placeholder="Required" data-original-title="Email Address">
													<?= $result['data']['email'] ?>
													</a></td>
												</tr>
												<tr>
													<td>Contact Person</td>
													<td><a href="#" id="contact_person" data-type="text" data-pk="1" data-placeholder="Required" data-original-title="Contact Person">
													<?= $result['data']['contact_person'] ?>
													</a></td>
												</tr>
                                                <tr>
													<td>Contact Number</td>
													<td><a href="#" id="contact_no" data-type="text" data-pk="1" data-placeholder="Required" data-original-title="Contact Number">
													<?= $result['data']['contact_no'] ?>
													</a></td>
												</tr>
												<tr>
													<td>Fax Number</td>
													<td>
													<a href="#" id="fax_no" data-type="text" data-pk="1"   data-placeholder="Required" data-original-title="Fax Number">
														<?= $result['data']['fax_no'] ?>
													</a></td>
												</tr>
												<tr>
													<td>Developer Name</td>
													<td>
													<a href="#" id="developer_name" data-type="text" data-pk="1"   data-placeholder="Required" data-original-title="Developer Name">
														<?= $result['data']['developer_name'] ?>
													</a></td>
												</tr>
												<tr>
													<td>Address</td>
													<td><a href="#" id="address" data-type="textarea" data-pk="1"  data-placeholder="Required" data-original-title="Address"><?= trim($result['data']['address']) ?></a></td>
												</tr>
											
											</tbody>
										</table>
										
										<div class="panel-heading">
											<h4 class="panel-title"> <span class="text-bold"><?= $result['data']['name'] ?> Settings</span></h4>
										</div>
										<table id="user" class="table table-bordered table-striped">
											<tbody>
												<tr>
													<td style="width:25%;">Allowed times resident book facility per day</td>
													<td><a href="#" id="facility_book" data-type="text" data-pk="1" data-placeholder="Required" data-original-title="Facility book times" >
														<?= $result['data']['facility_book'] ?>
													</a></td>
												</tr>
												<tr>
													<td style="width:25%;">Property monthly maintenance fees</td>
													<td><a href="#" id="maintenance_fee" data-type="text" data-pk="1" data-placeholder="Required" data-original-title="Maintenance fees" >
														<?= $result['data']['maintenance_fee'] ?>
													</a></td>
												</tr>
												<tr>
													<td style="width:25%;">Property month sinking funds</td>
													<td><a href="#" id="sinking_fee" data-type="text" data-pk="1" data-placeholder="Required" data-original-title="Sinking funds" >
														<?= $result['data']['sinking_fee'] ?>
													</a></td>
												</tr>
											</tbody>
										</table>
										<div class="form-group" >
											 
											<div  style="text-align:right;">
												<button data-style="expand-right" class="ladda-button" data-color="green"  onClick="return update()">
													Update <?= ucwords($this->name) ?> <i class="fa fa-arrow-circle-right"></i>
												</button>
											</div>
										</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end: PAGE CONTENT-->
					</div>
			
				</div>
				<!-- end: PAGE -->
			</div>
			<!-- end: MAIN CONTAINER -->
			
<script>
	$(function() {
		$('#file_upload').uploadify({
				'formData'     : {
					'u_id' : "<?= $this->user->get_memberid() ?>",
					'item_id' : "<?= $result['data']['p_id'] ?>",
					'type' : "property"
				},
				'swf'      : "<?= $this->config->item('domain') ?>/public/js/uploadify/uploadify.swf",
				'uploader' : "<?= $this->config->item('domain') ?>/public/uploadImages.php",//"/public/uploadImages.php" "/admin/locations/uploadPhoto",
				'onUploadSuccess' : function(file, data, response) {	
					 window.location.reload();
			    },
				'onUploadError' : function(file, errorCode, errorMsg, errorString) {
		            alert('The file ' + file.name + ' could not be uploaded: ' + errorString);
		        }
			});
	});
	
	 var toastCount = 0;
	 var showSuccessPopUp =  function () {
            var shortCutFunction = "success";
            var msg = 'Property successfully updated!';//$('#message').val();
            var title = 'Property Updates';
            var toastIndex = toastCount++;

            toastr.options = {
                closeButton:true,
                positionClass:  'toast-top-right',
                onclick: null
            };
            
            toastr.options.showDuration = "1000";
			toastr.options.hideDuration = "1000";
            toastr.options.timeOut = "5000";
            toastr.options.extendedTimeOut = "1000";
            toastr.options.showEasing = "swing";
            toastr.options.hideEasing = "linear";
            toastr.options.showMethod = "fadeIn";
            toastr.options.hideMethod = "fadeOut";

            $("#toastrOptions").text("Command: toastr["
                            + shortCutFunction
                            + "](\""
                            + msg
                            + title
                            + "\")\n\ntoastr.options = "
                            + JSON.stringify(toastr.options, null, 2)
            );
            var $toast = toastr[shortCutFunction](msg, title); // Wire up an event handler to a button in the toast, if it exists
        }
        
	function confirmDeleteLogo(img_id){
    	$.confirm({
			'title'		: 'Delete Confirmation',
			'message'	: 'You are about to delete this logo. <br />Are you sure want to delete?',
			'buttons'	: {
				'Yes'	: {
					'class'	: 'blue',
					'action': function(){
						 removeLogo(img_id); //remove image
						
					}
				},
				'No'	: {
					'class'	: 'gray',
					'action': function(){}	// Doesn't do anything						
				}
			}
		});				
		return false;
    }
    
    function removeLogo(img_id){
	  	var form_data = "img_id="+img_id;
	  	 
	  	// Remove image action
	  	$.post("<?= $this->config->item('domain') ?>/<?= $this->name ?>/deleteLogo",form_data,function(data){
	  			showSuccessPopUp();
				 setTimeout(function(){
					window.location.reload();
				},2000);
	  	});
    }
    
    var update = function(){
		var str = $('form').serialize();
	///	alert(str);
		/**Do create property to system***/
		$.post("<?= $this->config->item('domain') ?>/<?= $this->name ?>/doUpdate/", str, function(result) {
			console.log(result);
			var obj = $.parseJSON(result);
			if(obj.status =="success"){
				showSuccessPopUp();
			}else{
				//error message
			}
		});
		
		return false;
	}
</script>